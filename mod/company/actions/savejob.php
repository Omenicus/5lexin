<?php

global $CONFIG;
gatekeeper();

$user_guid = get_input('user_guid');
$user = get_entity($user_guid);

$object_guid = (int) get_input('object_guid');
if ($object_guid == '') {
    $object_guid = NULL;
} else {
    $object = get_entity($object_guid);
    $address_string = getAddressString($object_guid);
}

$access_id = (int) get_input('access_id');

$job = new ElggJob($object_guid);
if( $object_guid && $user_guid != $company->getGUID())
{
  system_message(elgg_echo('company:cannotedit'));
  forward($_SERVER['HTTP_REFERER']);
}
//$job->subtype = 'company';
if( $object_guid == NULL )
  $job->owner_guid = $user_guid;
$job->access_id = ACCESS_PUBLIC;//get_input('access_id');

$fields = getJobFields();

foreach ($fields as $ref => $value) {
    if (get_input($ref)) {
        $job->$ref = get_input($ref);
    } else {
        $job->$ref = '';
    }
}
$job->company_guid=get_input('company_guid');
$job->owner_guid = elgg_get_logged_in_user_guid();
$job->container_guid=get_input('company_guid');
//$job->created=true;

if ($object_guid == NULL) {
    $action = 'create';
} else {
    $action = 'update';
}
if ($object_guid == NULL or $job->canEdit()) {
    $result = $job->save();
} else {
    $result = false;
}



if ($result) {
    system_message(elgg_echo('company:savesuccess').$job->guid);
    //add_to_river('river/object/company/' . $action, 'update', $user->guid, $job->guid);
    
    elgg_create_river_item(array(
    		'view' => 'river/object/job/' . $action,
    		'action_type' => "$action",
    		'subject_guid' => $user->guid,
    		'object_guid' => $job->guid,
        //'target_guid' => $rObject->guid,
    		//'annotation_id' => $rObject->guid,
    	));
    
    //if ($job->isEnabled())
    forward('comp/viewjob/' . $job->guid);
    //forward('comp/alljob');
} else {
    register_error(elgg_echo('company:noprivileges'));
    forward($_SERVER['HTTP_REFERER']);
}
?>