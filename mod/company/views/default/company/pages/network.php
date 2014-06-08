<?php

global $CONFIG;

$username = get_input('username');
$user = get_user_by_username($username);

$title = elgg_echo('company:network');
$header = elgg_view('page_elements/title', array('title' => $title));
$filter = elgg_view('company/filter');
//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $filter));
$body = $filter;
$body .= elgg_view('company/list', array('entity' => $user, 'type' => 'network'));
$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $body, $area3);

elgg_view_page($title, $body);

?>
