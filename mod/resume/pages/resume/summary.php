<?php
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/engine/start.php");

// make sure only logged in users can see this page
gatekeeper();
// set context to add a "cancel" option
elgg_set_context('resume_form');
// set the title
$title = elgg_echo('resume:add:summary');

// set the page owner to show the right content
//elgg_set_page_owner_guid($user->getGUID());
$page_owner = $user;//elgg_get_page_owner_entity();

if ($page_owner === false || is_null($page_owner)) {
    $page_owner = elgg_get_logged_in_user_entity();
    //elgg_set_page_owner_guid(elgg_get_logged_in_user_entity());
}


// start building the main column of the page
$area2 = '';//elgg_view_title($title);

// Add the form to this section
if (get_input('id')) {
    $gid = (int) get_input('id');
    $summary = get_entity($gid);
    $area2 .= elgg_view("resume/summary_form", array('entity' => $summary));
} else {
    $area2 .= elgg_view("resume/summary_form");
}
// layout the page
//$body = elgg_view_layout('two_column_left_sidebar', '', $area2);

// draw the page
//elgg_view_page($title, $body);
$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $area2,
  'sidebar' => '',
	'title' => $title,
	'filter' => '',
));
echo elgg_view_page($title, $body);
