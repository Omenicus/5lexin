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
$name = get_input('name');
$ocupation = get_input('ocupation');
$organisation = get_input('organisation');
$jobtitle = get_input('jobtitle');
$tel = get_input('tel');


// create a new object
$rReference = new ElggObject();
$rReference->name = $name;
$rReference->ocupation = $ocupation;
$rReference->organisation = $organisation;
$rReference->jobtitle = $jobtitle;
$rReference->tel = $tel;
$rReference->subtype = "rReference";


// public acces for the resume
$rReference->access_id = ACCESS_PUBLIC;

// owner is logged in user
$rReference->owner_guid = elgg_get_logged_in_user_guid();

// save to database
$rReference->save();
system_message(elgg_echo('resume:OK'));

// add to river
add_to_river('river/object/resume/create', 'create', elgg_get_logged_in_user_guid(), $rReference->guid);

// forward user to a main page
forward($CONFIG->wwwroot . "resume/view/" . elgg_get_logged_in_user_entity()->username);