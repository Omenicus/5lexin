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
$guid = (int) get_input('id');
$user=elgg_get_logged_in_user_entity();
if (can_edit_entity($guid)) {

    //get the object to replace the metadata
    $rObject = get_entity($guid);

    $rComp=NULL;
    $organisationid =NULL;
    $test="0";
    if (get_input('organisation')) {
    
        $organisation = get_input('organisation');
        
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
        $test.=count($list);
        if( !$list||count($list)==0) 
        {
        }
        else
        {
          $rComp=$list[0];
          $organisationid= $rComp->getGUID();
          $rComp->points++;
          //if($rObject->endyear == "now")
          //  $rComp->memebers++; 
          $rComp->save(); 
       
    
      if ($rObject instanceof ElggObject
          && $rObject->getSubtype() == 'rWork') {
            $endyear = get_input('endyear');
            $organisation = get_input('organisation');
            $jobtitle = get_input('jobtitle');
            if($rObject->endyear=="now" && $endyear!="now")
            {
              //remove member
              if( $organisationid )
                remove_entity_relationship($organisationid, 'member', elgg_get_logged_in_user_guid());
              elgg_delete_metadata(array(
                      'guid' => $user->getGUID(),
                      'metadata_name' => array("organisationid","organisation","title")
              ));
              //system_message(elgg_echo('elgg_delete_metadata'));
            }
            if( ($rObject->endyear!="now" || !($rObject->organisationid))&& $endyear=="now" )
            {
              if( $organisationid )
                add_entity_relationship($organisationid, 'member', elgg_get_logged_in_user_guid());
              create_metadata_from_array($user->getGUID(),array(
                "organisationid"=> $organisationid,
                "organisation"=>$organisation,
                "title"=>$jobtitle
              ));
              //system_message(elgg_echo('create_metadata_from_array'));
            }
            if( $rObject->endyear=="now" && $endyear=="now"&&$organisation!=$rObject->organisation )
            {
              if($rObject->organisationid)
                remove_entity_relationship($rObject->organisationid, 'member', elgg_get_logged_in_user_guid());
              if( $organisationid )
                add_entity_relationship($organisationid, 'member', elgg_get_logged_in_user_guid());
              create_metadata_from_array($user->getGUID(),array(
                "organisationid"=>$organisationid,
                "organisation"=>$organisation,
                "title"=>$jobtitle
              ));
              //system_message(elgg_echo('remove_entity_relationship'));
            }
            
          }
        }
    }
    $object_metadata_array = elgg_get_metadata( array('guid' => $guid,
			'limit' => false));//get_metadata_for_entity($guid);
    foreach ($object_metadata_array as $meta_object) {
        $name = $meta_object->name;
        $rObject->$name = get_input($name);
        
    }
    if( $rComp )
      $rObject->organisationid=$rComp->getGUID();
    else
      $rObject->organisationid=NULL;
     
    // set public acces
    $rObject->access_id = ACCESS_PUBLIC;

// set title and description



    $rObject->title = get_input('title');
    $rObject->description = get_input('description');
    if ($rObject->getSubtype() == "rEdu") {
        //$rObject->title = get_input('achieved_title') . " (" . get_input('level') .")";
        //$rObject->description = get_input('institution');
    }

    if ($rObject->getSubtype() == "rWork") {
        //$rObject->title = get_input('jobtitle') . " @ " . get_input('organisation');
        $rObject->organisation=get_input('organisation');
    }
    if ($rObject->getSubtype() == "rSummary") {
        //$rObject->title = get_input('jobtitle') . " @ " . get_input('organisation');
        $rObject->description = get_input('description');
    }

// save to database
    if($rObject->save())
    {
      system_message(elgg_echo('resume:OK').$test);//.$rObject->description.$rObject->canComment());

      // add to river
      //add_to_river('river/object/resume/update', 'update', elgg_get_logged_in_user_guid(), $rObject->guid);
      elgg_create_river_item(array(
    		'view' => 'river/object/resume/update',
    		'action_type' => 'update',
    		'subject_guid' => elgg_get_logged_in_user_guid(),
    		'object_guid' => $rObject->guid,
        //'target_guid' => $rObject->guid,
    		//'annotation_id' => $rObject->guid,
    	));
      
      
    }
    else
      register_error(elgg_echo('resume:notOK1'));  
    
} else {
    register_error(elgg_echo('resume:notOK2'));
}

$user_name = get_input('user_name');
$user=elgg_get_logged_in_user_entity();

if ( $user_name&&  $user && $user->canEdit() ) {
		if ($user_name != $user->name) {
      $user->name=$user_name;
      if ($user->save()) {
				system_message(elgg_echo('user:name:success'));
				
			} else {
				register_error(elgg_echo('user:name:fail'));
			}
    }
}
// forward user to the main page
forward($CONFIG->wwwroot . "resume/edit/" . elgg_get_logged_in_user_entity()->username);