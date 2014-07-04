<?php

/**
 * Resume
 *
 * @package Resume
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Pablo Borbón @ Consultora Nivel7 Ltda.
 * @copyright Consultora Nivel7 Ltda.
 * @link http://www.nivel7.net
 */
// only logged in users can add and object
gatekeeper();

// get the form input
$institution = get_input('title');
$level = get_input('level');
$start_year = get_input('start_year');
$end_year = get_input('end_year');
$field = get_input('field');
$grade = get_input('grade');
$activities = get_input('activities');
$description = get_input('description');

// create a new object
$rEdu = new ElggAcademic();
//$rEdu->subtype = "rEdu";
$rEdu->title = $institution;
$rEdu->level = $level;
$rEdu->start_year = $start_year;
$rEdu->end_year = $end_year;
$rEdu->field = $field;
$rEdu->grade = $grade;
$rEdu->activities = $activities;
$rEdu->title  = $institution;
$rEdu->description = $description;

// public acces for the resume
$rEdu->access_id = ACCESS_PUBLIC;

// owner is logged in user
$rEdu->owner_guid = elgg_get_logged_in_user_guid();

$dbprefix = elgg_get_config("dbprefix");
$query_options = array(
  'type' => 'object',
	'subtype' =>'rInstitution',  
  
  'count' => FALSE,
	"limit" => 5,
	"joins" => array("LEFT JOIN {$dbprefix}objects_entity oe ON oe.guid = e.guid "), //AND e.type = 'object
	"wheres" => array("(oe.title = '".$institution."' )"),
	//"order_by" => "u.name asc"
);

//$entities=elgg_list_entities_from_metadata($query_options);
$list=elgg_get_entities($query_options);

if( $list==0) 
{
  $rObj = new ElggObject();
  $rObj->subtype = "rInstitution";
  //$rObj->name = $institution;
  $rObj->title = $institution;
  // public acces for the resume
  $rObj->access_id = ACCESS_PUBLIC;
  
  // owner is logged in user
  $rObj->owner_guid = null;//elgg_get_logged_in_user_guid();
  $rObj->container_guid =$rObj->owner_guid;
  $rObj->created=false;
  $rObj->save();
  $rObj->institutionid=$rObj->getGUID();
  //system_message(elgg_echo('resume:addcomp:OK'));
}

// save to database
if( $rEdu->save() )
{
  system_message(elgg_echo('resume:OK'));

  // add to river
  add_to_river('river/object/resume/create', 'create', elgg_get_logged_in_user_guid(), $rEdu->guid);
  
} else {
	register_error(elgg_echo('resume:addacademic:failed'));
}
 // forward user to a main page
  forward($CONFIG->wwwroot . "resume/edit/" . elgg_get_logged_in_user_entity()->username);