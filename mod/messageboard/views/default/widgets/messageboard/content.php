<?php
/**
 * Elgg messageboard widget view
 *
 */

$owner = elgg_get_page_owner_entity();

$num_display = $vars['entity']->num_display;

if (elgg_is_logged_in()) {
	echo elgg_view_form('messageboard/add', array('name' => 'elgg-messageboard'));
}
else
  echo elgg_echo('messageboard:notlogin');

$options = array(
	'annotations_name' => 'messageboard',
	'guid' => $owner->getGUID(),
	'limit' => $num_display,
	'pagination' => false,
	'reverse_order_by' => true,
);

$content=  elgg_list_annotations($options);
if(!$content)
  $content = elgg_echo('messageboard:none');
echo $content;

if ($owner instanceof ElggGroup) {
	$url = "messageboard/group/$owner->guid/all";
} else {
	$url = "messageboard/owner/$owner->username";
}

echo elgg_view('output/url', array(
	'href' => $url,
	'text' => elgg_echo('messageboard:viewall'),
	'is_trusted' => true,
));