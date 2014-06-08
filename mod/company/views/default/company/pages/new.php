<?php

global $CONFIG;

$title = elgg_echo('company:newlisting');
$header = elgg_view('page_elements/title', array('title' => $title));

if (canCreateCompany(elgg_get_logged_in_user_entity())) {
    $area2 = elgg_view('company/forms/edit', array('user' => elgg_get_logged_in_user_entity()));
} else {
    $area2 = elgg_echo('company:noprivileges');
}

//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $body));
//$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $area2, $area3);

$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $area2,
  'sidebar' => '',
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);
//echo elgg_view_page(elgg_echo('answers:question:add'), $body);
?>

