<?php


$owner = elgg_get_page_owner_entity();

$num_display = 10;

if ($owner instanceof ElggGroup) {
	$url = "messageboard/group/$owner->guid/all";
} else {
	$url = "messageboard/owner/$owner->username";
}

$all_link = elgg_view('output/url', array(
	'href' => $url,
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');

$options = array(
	'annotations_name' => 'messageboard',
	'guid' => $owner->getGUID(),
	'limit' => $num_display,
	'pagination' => false,
	'reverse_order_by' => true,
);

$content = elgg_list_annotations($options);

	elgg_pop_context();
  
 

  $add="";
	if (elgg_is_logged_in()) {
  	$add = elgg_view_form('messageboard/add', array('name' => 'elgg-messageboard'));
  }
  else
    $add = elgg_echo('messageboard:notlogin');
	if(!$content)
    $content = elgg_echo('messageboard:none');
	$content = $add.$content;
	
	// Display page
	//echo elgg_view_page($title_text,$body);
	
  echo elgg_view('groups/profile/module', array(
  	'title' => elgg_echo('messageboard:board'),
  	'content' => $content,
  	'all_link' => $all_link,
  	//'add_link' => $new_link,
  ));

