<?php

global $CONFIG;

$job_guid = get_input('job_guid');
$job = get_entity($job_guid);
$company_guid = $job->company_guid;
$company = get_entity($company_guid);
//set page owner to show the owner_block menu at the sidebar
elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

$header = elgg_view('page_elements/title', array('title' => $title));
if ($job && $job->canEdit()) {
    $body = elgg_view('company/forms/editjob', array('entity' => $job, 'user' => elgg_get_logged_in_user_entity(),'company'=>$company));
} else if (!$job && elgg_get_logged_in_user_entity()->getGUID()==$company->owner_guid)  {
    $body = elgg_view('company/forms/editjob', array('user' => elgg_get_logged_in_user_entity(),'company'=>$company));
} else {
    $body = elgg_echo('company:noprivileges');
}
//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $body));
//$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $body, $area3);
$area4 = elgg_view_menu('page', array('sort_by' => 'name','entity' => $job));
//$area4
$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $body,
  'sidebar' => $area4,
	'title' => $title,
	'filter' => '',
));
$title=elgg_echo('company:editlistingjob').':'.($job->title).'-'.$job->comp_name;
echo elgg_view_page($title, $body);
?>

