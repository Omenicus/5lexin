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
$description = get_input('description');
$$user_name = get_input('$user_name');
//elgg_get_logged_in_user_entity()->name=$name;

// create a new object
$rWork = new ElggObject();
$rWork->title = $$user_name;
$rWork->description = $description;
$rWork->subtype = "rSummary";


// public acces for the resume
$rWork->access_id = ACCESS_PUBLIC;

// owner is logged in user
$rWork->owner_guid = elgg_get_logged_in_user_guid();
$rWork->container_guid =$rWork->owner_guid;

$user=elgg_get_logged_in_user_entity();
$user->name=$$user_name;

// save to database
if($rWork->save()&&$user->save())
{
  system_message(elgg_echo('resume:add:OK'));
  // add to river
  add_to_river('river/object/resume/create', 'create', elgg_get_logged_in_user_guid(), $rWork->guid);
  
  
} else {
	register_error(elgg_echo('resume:add:failed'));
}

// forward user to a main page
forward($CONFIG->wwwroot . "resume/edit/" . elgg_get_logged_in_user_entity()->username);



