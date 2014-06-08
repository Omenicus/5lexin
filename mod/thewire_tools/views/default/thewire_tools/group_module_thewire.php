<?php
/**
 * Group blog module
 */

$group = elgg_get_page_owner_entity();

if ($group->blog_enable == "no") {
	return true;
}

group_gatekeeper();

$group_guid = $group->getGUID();//sanitize_int(get_input("group_guid", 0));
$entities_only = sanitize_int(get_input("entities_only", 0));

$all_link = elgg_view('output/url', array(
	'href' => "thewire/group/$group->guid",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');

$options = array(
	'types' => 'object', 
	'subtypes' => 'thewire',
	'offset' => (int) max(get_input('offset', 0), 0),
	'limit' => (int) max(get_input('limit', 10), 0),
	'container_guid' => $group_guid,
  'full_view' => false,
  'pagination' => false,
	'no_results' => elgg_echo('discussion:none'),
);


	// check if The Wire is enabled
	if($group->thewire_enable == "no"){
		register_error(elgg_echo("thewire_tools:groups:error:not_enabled"));
		forward($group->getURL());
	}
	
	elgg_push_breadcrumb(elgg_echo('thewire'), "thewire/all");
	elgg_push_breadcrumb($group->name);
	
	if($entities_list = elgg_list_entities($options)){
		$content = $entities_list;
	} else {
		$content = elgg_echo("notfound".$group_guid);
	}
	elgg_pop_context();
  
  $new_link = elgg_view('output/url', array(
  	'href' => "discussion/add/" . $group->getGUID(),
  	'text' => elgg_echo('groups:addtopic'),
  	'is_trusted' => true,
  ));

    // build page elements
	$title_text = elgg_echo("thewire_tools:group:title");
	
  $add="";
	if($group->isMember()){
    //elgg_load_css('bootstrap.css');
    elgg_load_js('jquery.textareahelper.js');
    
    
		$add = elgg_view_form("thewire/add");
	}
	
	$content = $add.$content;
	
	// Display page
	//echo elgg_view_page($title_text,$body);
	
  echo elgg_view('groups/profile/module', array(
  	'title' => elgg_echo('thewire:group'),
  	'content' => $content,
  	'all_link' => $all_link,
  	//'add_link' => $new_link,
  ));


