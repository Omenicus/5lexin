<?php

global $CONFIG;

$company_guid = get_input('company_guid');
$company = get_entity($company_guid);

$title = elgg_echo('company:editlisting');
$header = elgg_view('page_elements/title', array('title' => $title));
if ($company && $company->canEdit()) {
    $body = elgg_view('company/forms/edit', array('entity' => $company, 'user' => elgg_get_logged_in_user_entity()));
} else if (!$company && canCreateCompany(elgg_get_logged_in_user_entity ())) {
    $body = elgg_view('company/forms/edit', array('user' => elgg_get_logged_in_user_entity()));
} else {
    $body = elgg_echo('company:noprivileges');
}
//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $body));
//$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $body, $area3);
$area4 = elgg_view_menu('page', array('sort_by' => 'name','entity' => $company));
  
$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $body,
  'sidebar' => $area4,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);
?>

