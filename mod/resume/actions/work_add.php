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
$startyear = get_input('startyear');
$startmonth = get_input('startmonth');
$endyear = get_input('endyear');
$endmonth = get_input('endmonth');
$organisation = get_input('organisation');
$jobtitle = get_input('title');
$description = get_input('description');


// create a new object
$rWork = new ElggWork();
$can=$rWork->canComment();
//$rWork->subtype = "rWork";
$rWork->startyear = $startyear;
$rWork->startmonth = $startmonth;
$rWork->endyear = $endyear;
$rWork->endmonth = $endmonth;

$rWork->organisation = $organisation;
$rWork->jobtitle = $jobtitle;
$rWork->title = $jobtitle;
$rWork->description = $description;




// public acces for the resume
$rWork->access_id = ACCESS_PUBLIC;

// owner is logged in user
$rWork->owner_guid = elgg_get_logged_in_user_guid();
$rWork->container_guid =$rWork->owner_guid;

       
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
$rComp=NULL;
if( !$list||count($list)==0) 
{
  /*$rComp = new ElggObject();
  $rComp->subtype = "rCompany";
  $rComp->name = $organisation;
  // public acces for the resume
  $rComp->access_id = ACCESS_PUBLIC;
  
  // owner is logged in user
  $rComp->owner_guid = elgg_get_logged_in_user_guid();
  $rComp->container_guid =$rWork->owner_guid;
  
  $rComp->points=0;
  $rComp->created=FALSE;*/
 
  //system_message(elgg_echo('resume:addcomp:OK'));
}
else
{
  $rComp=$list[0];
  $rComp->points++;
  //if($rWork->endyear == "now")
  //  $rComp->memebers++;
  
  $rComp->save();
  $rWork->organisationid=$rComp->getGUID();
  if($rWork->endyear == "now")
  {
    
    $user=elgg_get_logged_in_user_entity();
    add_entity_relationship($rComp->getGUID(), 'member', $user->getGUID());
    
    //$user->organisationid=$rComp->getGUID();
    //$user->organisation=$organisation;
    //$user->save();
    create_metadata_from_array($user->getGUID(),array(
      "organisationid"=> $rComp->getGUID()
    ));
   
  }
}
elgg_delete_metadata(array(
        'guid' => $user->getGUID(),
        'metadata_name' => array("organisationid","organisation","title")
));
create_metadata_from_array($user->getGUID(),array(
  "organisation"=>$organisation,
  "jobtitle"=>$jobtitle
));

// save to database
if($rWork->save())
{
  system_message(elgg_echo('resume:addwork:OK'));
  // add to river
  //add_to_river('river/object/resume/create', 'create', elgg_get_logged_in_user_guid(), $rWork->guid);
  elgg_create_river_item(array(
    		'view' => 'river/object/resume/create',
    		'action_type' => 'create',
    		'subject_guid' => elgg_get_logged_in_user_guid(),
    		'object_guid' => $rWork->guid,
        //'target_guid' => $rWork->guid,
    		//'annotation_id' => $rObject->guid,
    	));
  
} else {
	register_error(elgg_echo('resume:addwork:failed'));
}

// forward user to a main page
forward($CONFIG->wwwroot . "resume/edit/" . elgg_get_logged_in_user_entity()->username);



