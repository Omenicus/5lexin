<?php

global $CONFIG;
elgg_set_context('companies');
$title = elgg_echo('company:everyone');
$header = elgg_view('page_elements/title', array('title' => $title));
$filter = elgg_view('company/filter');
//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $filter));
//$body .= elgg_view('company/list');
$area2 = $filter.elgg_view('company/list');
//$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $area2, $area3);
$area4 = elgg_view_menu('page', array('sort_by' => 'name'));
$area4 .=elgg_view('company/elements/company_block');

$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $area2,
  'sidebar' => $area4,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);

?>
