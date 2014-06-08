<?php
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/engine/start.php");

// make sure only logged in users can see this page
gatekeeper();
// set context to add a "cancel" option
elgg_set_context('resume_form');
// set the title
$title = elgg_echo('resume:add:academic');

// start building the main column of the page
$area2 = '';// elgg_view_title($title);

// Add the form to this section
if (get_input('id')) {
    $gid = (int) get_input('id');
    $academic = get_entity($gid);
    $area2 .= elgg_view("resume/academic_form", array('entity' => $academic));
} else {
    $area2 .= elgg_view("resume/academic_form");
}
// layout the page
//$body = elgg_view_layout('two_column_left_sidebar', '', $area2);

$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $area2,
  'sidebar' => '',
	'title' => $title,
	'filter' => '',
));
echo elgg_view_page($title, $body);
