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
$training_type = get_input('training_type');
$enddate = get_input('enddate');
$institution = get_input('institution');
$name = get_input('name');



// create a new object
$rTraining = new ElggObject();
$rTraining->training_type = $training_type;
$rTraining->enddate = $enddate;
$rTraining->institution = $institution;
$rTraining->name = $name;

$rTraining->subtype = "rTraining";


// public acces for the resume
$rTraining->access_id = ACCESS_PUBLIC;

// owner is logged in user
$rTraining->owner_guid = elgg_get_logged_in_user_guid();

// save to database
$rTraining->save();
system_message(elgg_echo('resume:OK'));

// add to river
add_to_river('river/object/resume/create', 'create', elgg_get_logged_in_user_guid(), $rTraining->guid);

// forward user to a main page
forward($CONFIG->wwwroot . "resume/view/" . elgg_get_logged_in_user_entity()->username);