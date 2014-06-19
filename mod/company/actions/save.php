<?php

global $CONFIG;
gatekeeper();

$user_guid = elgg_get_logged_in_user_guid();//get_input('user_guid');
$user = get_entity($user_guid);

$object_guid = (int) get_input('object_guid');
if ($object_guid == '') {
    $object_guid = NULL;
} else {
    $object = get_entity($object_guid);
    $address_string = getAddressString($object_guid);
}

$access_id = (int) get_input('access_id');

$organisation = get_input('title');
        
$dbprefix = elgg_get_config("dbprefix");
$query_options = array(
  'type' => 'object',
	'subtype' =>'company',  
  
  'count' => FALSE,
	"limit" => 5,
	"joins" => array("LEFT JOIN {$dbprefix}objects_entity oe ON oe.guid = e.guid "), //AND e.type = 'object
	"wheres" => array("(oe.title = '".$organisation."' )"),
	//"order_by" => "u.name asc"
);

//$entities=elgg_list_entities_from_metadata($query_options);
$list=elgg_get_entities($query_options);
if($object_guid == NULL&&count($list) >0)
{
  system_message(elgg_echo('company:exist'));
  forward($_SERVER['HTTP_REFERER']);
}

$company = new ElggCompany($object_guid);
//$company->subtype = 'company';
//$company->owner_guid = $user_guid;
$company->access_id = ACCESS_PUBLIC;//get_input('access_id');
$company->owner_guid = $user_guid;//elgg_get_logged_in_user_guid();

$fields = getCompanyFields();

foreach ($fields as $ref => $value) {
    if (get_input($ref)) {
        $company->$ref = get_input($ref);
    } else {
        $company->$ref = '';
    }
}
//elgg always use title to represent object
if( get_input('name'))
  $company->title=get_input('name');  
$company->created=true;

if ($object_guid == NULL) {
    $action = 'create';
} else {
    $action = 'update';
}
if ($object_guid == NULL or $company->canEdit()) {
    $result = $company->save();
} else {
    $result = false;
}

$topbar = get_resized_image_from_uploaded_file('companyicon', 16, 16, true, true);
$tiny = get_resized_image_from_uploaded_file('companyicon', 25, 25, true, true);
$small = get_resized_image_from_uploaded_file('companyicon', 40, 40, true, true);
$medium = get_resized_image_from_uploaded_file('companyicon', 100, 100, true, true);
$large = get_resized_image_from_uploaded_file('companyicon', 200, 200);
$master = get_resized_image_from_uploaded_file('companyicon', 550, 550);

if ($small !== false
        && $medium !== false
        && $large !== false
        && $tiny !== false) {


    $filehandler = new ElggFile();
    $filehandler->owner_guid = $company->owner_guid;
    $filehandler->setFilename("company/" . $company->guid . "large.jpg");
    $filehandler->open("write");
    $filehandler->write($large);
    $filehandler->close();
    $filehandler->setFilename("company/" . $company->guid . "medium.jpg");
    $filehandler->open("write");
    $filehandler->write($medium);
    $filehandler->close();
    $filehandler->setFilename("company/" . $company->guid . "small.jpg");
    $filehandler->open("write");
    $filehandler->write($small);
    $filehandler->close();
    $filehandler->setFilename("company/" . $company->guid . "tiny.jpg");
    $filehandler->open("write");
    $filehandler->write($tiny);
    $filehandler->close();
    $filehandler->setFilename("company/" . $company->guid . "topbar.jpg");
    $filehandler->open("write");
    $filehandler->write($topbar);
    $filehandler->close();
    $filehandler->setFilename("company/" . $company->guid . "master.jpg");
    $filehandler->open("write");
    $filehandler->write($master);
    $filehandler->close();
}

if ($result) {
    system_message(elgg_echo('company:savesuccess'));
    //add_to_river('river/object/company/' . $action, 'update', $user->guid, $company->guid);
    
    elgg_create_river_item(array(
    		'view' => 'river/object/company/' . $action,
    		'action_type' => 'update',
    		'subject_guid' => $user->guid,
    		'object_guid' => $company->guid,
        //'target_guid' => $rObject->guid,
    		//'annotation_id' => $rObject->guid,
    	));
    if ($address_string !== getAddressString($company)) {
        //remove_metadata($company->guid, 'latitude');
        //remove_metadata($company->guid, 'longitude');
        elgg_delete_metadata($company->guid, 'latitude');
        elgg_delete_metadata($company->guid, 'longitude');
    }
    
    //if ($company->isEnabled())
    forward('comp/view/' . $company->guid);
    //forward('comp/all');
} else {
    register_error(elgg_echo('company:noprivileges'));
    forward($_SERVER['HTTP_REFERER']);
}
?>