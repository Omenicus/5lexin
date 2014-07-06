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

elgg_register_event_handler('init', 'system', 'resume_init');
// ******************** REGISTER EVENT HANDLERS ******************
elgg_register_event_handler('pagesetup', 'system', 'resume_pagesetup');

$site_url = elgg_get_site_url();
function resume_init() {
    global $CONFIG;
    $root = dirname(__FILE__);
    
    elgg_register_plugin_hook_handler('entity:url', 'user', 'resume_set_url');
      
    // actions
	  $action_path = "$root/actions";
    elgg_register_action("resume/delete", "$action_path/delete.php");
    elgg_register_action("resume/edit", "$action_path/edit.php"); 
    elgg_register_action("resume/lang_add", "$action_path/lang_add.php");   
    elgg_register_action("resume/academic_add", "$action_path/academic_add.php");    
    elgg_register_action("resume/training_add", "$action_path/training_add.php");    
    elgg_register_action("resume/work_add", "$action_path/work_add.php");  
    elgg_register_action("resume/reference_add", "$action_path/reference_add.php");
    elgg_register_action("resume/summary_add", "$action_path/summary_add.php");

    elgg_unregister_action("avatar/crop");
    elgg_register_action("avatar/crop", "$action_path/crop.php");
    
    // Add menu item to logged users
    //if (elgg_is_logged_in ()) 
  	elgg_register_menu_item('site', array(
  		'name' => 'resume',
  		'text' => elgg_echo('resume:menu:item'),
  		'href' => "resume/view/" . elgg_get_logged_in_user_entity()->username
  	));
    
    elgg_register_menu_item('site', array(
  		'name' => 'index',
  		'text' => elgg_echo('resume:menu:index'),
  		'href' => elgg_get_site_url().'main',
  	));    

     

    elgg_unregister_menu_item('footer','powered');
    elgg_register_menu_item('footer', ElggMenuItem::factory(array(
  		'name' => 'powered',
  		'text' => elgg_echo("lexin:powered"),
  		'href' => elgg_get_site_url(),
  		'title' => elgg_echo("lexin:powered"),
  		'section' => 'meta',
  	))); 
    
    
    //$profile_fields = elgg_get_config('profile_fields');
    //unset($profile_fields['twitter']);
    //elgg_save_config('profile_fields',$profile_fields);
    elgg_register_plugin_hook_handler('get_list', 'default_widgets', 'resume_default_widgets_hook');   
    
    //add to pages of this mod
    elgg_register_plugin_hook_handler('register', 'menu:page', 'resume_page_menu');
    //add to owner block menu of all pages
    elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'resume_owner_block_menu');

    // ******************** REGISTER PAGE HANDLER ******************
    elgg_register_page_handler('resume', 'resume_page_handler');
    elgg_register_page_handler('resumeprintversion', 'printed_page_handler');

    // Extend profile menu to include resume item
    elgg_extend_view('profile/menu/links', 'resume/menu');
 
    // Extend CSS with plugin's CSS
    elgg_extend_view('css', 'resume/css');

    //Extend search
    elgg_register_entity_type('object', 'rEdu');
    elgg_register_entity_type('object', 'rWork');
    
    $js = elgg_get_simplecache_url('js', 'resume/init');
    elgg_register_js('resumeautocomplete', $js);
    //elgg_register_simplecache_view('js/resume/edit_js');
    
    if (get_subtype_id('object', 'rWork')) {
    	update_subtype('object', 'rWork', 'ElggWork');
    } else {
    	add_subtype('object', 'rWork', 'ElggWork');
    }
    
    
    if (get_subtype_id('object', 'rEdu')) {
    	update_subtype('object', 'rEdu', 'ElggAcademic');
    } else {
    	add_subtype('object', 'rEdu', 'ElggAcademic');
    }

}
/**
 * Register profile widgets with default widgets
 *
 * @param string $hook
 * @param string $type
 * @param array  $return
 * @return array
 */
function resume_default_widgets_hook($hook, $type, $return) {
	$return[] = array(
		'name' => elgg_echo('resume'),
		'widget_context' => 'resume',
		'widget_columns' => 1,

		'event' => 'create',
		'entity_type' => 'user',
		'entity_subtype' => ELGG_ENTITIES_ANY_VALUE,
	);

	return $return;
}

/**
 * Profile URL generator for $user->getUrl();
 *
 * @param string $hook
 * @param string $type
 * @param string $url
 * @param array  $params
 * @return string
 */
function resume_set_url($hook, $type, $url, $params) {
	$user = $params['entity'];
	return "resume/view/" . $user->username;
}

/**
 * Add a page menu menu.
 *
 * @param string $hook
 * @param string $type
 * @param array  $return
 * @param array  $params
 */
function resume_page_menu($hook, $type, $return, $params) {
	if (elgg_is_logged_in()) {
		// only show  in resume pages
		if (elgg_in_context('resume_view')) {
			$page_owner = elgg_get_page_owner_entity();
			if (!$page_owner) {
				$page_owner = elgg_get_logged_in_user_entity();
			}
			
			if ($page_owner instanceof ElggGroup) {
				$title = elgg_echo('resume:bookmarklet:group');
        $return[] = null; 
			} else {
				$title = elgg_echo('resume:bookmarklet');
        //$return[] = null; //new ElggMenuItem('bookmarklet', $title, 'resume/bookmarklet/' . $page_owner->getGUID());
			}
		}
	}

	return $return;
}

/**
 * Add a menu item to an ownerblock
 * 
 * @param string $hook
 * @param string $type
 * @param array  $return
 * @param array  $params
 */
function resume_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "resume/{$params['entity']->username}";
		$item = new ElggMenuItem('010resume', elgg_echo('resume:menu:owner_block'), $url);
    //$item->setPriority(1);
    
		$return[] = $item;
	} /*else {
		if ($params['entity']->resume_enable != 'no') {
			$url = "resume/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('resume', elgg_echo('resume:group'), $url);
			$return[] = $item;
		}
	} */

	return $return;
}
function resume_pagesetup() {

    global $CONFIG;
    $root = dirname(__FILE__);
    //Add submenu items to the page
    if (elgg_get_context() == "resume_view") {
        $page_owner = elgg_get_page_owner_entity();

        // Add page owner's exclusive items to menu
        /*if ($page_owner == elgg_get_logged_in_user_entity()) {
            elgg_register_menu_item('page', array('name' => '112_resume_add_academic','href' => "resume/add/academic.php",'text' => elgg_echo('resume:add:academic')));
            elgg_register_menu_item('page', array('name' => '114_resume_add_training','href' => "resume/add/training.php",'text' => elgg_echo('resume:add:training')));
            elgg_register_menu_item('page', array('name' => '113_resume_add_language','href' => "resume/add/language.php",'text' => elgg_echo('resume:add:language')));
            elgg_register_menu_item('page', array('name' => '115_resume_add_reference','href' => "resume/add/reference.php",'text' => elgg_echo('resume:add:reference')));
            elgg_register_menu_item('page', array('name' => '111_resume_add_work','href' => "resume/add/work",'text' => elgg_echo('resume:add:work')));
            
        } else if (elgg_is_logged_in ()) {
            // Not "Page owner's" exclusive items
            elgg_register_menu_item('page', array('name' => 'resume_menu_goto','href' => "resume/" . elgg_get_logged_in_user_entity()->username,'text' => elgg_echo('resume:menu:goto')));
        } */
    }


    // Add "cancel" option if the user is in a create/edit form
    if (elgg_get_context() == "resume_form") {
        $page_owner = elgg_get_page_owner_entity();
        elgg_register_menu_item('page', array('name' => 'resume_menu_cancel','href' => "resume/edit/" . elgg_get_logged_in_user_entity()->username,'text' => elgg_echo('resume:menu:cancel')));

    }
}

function resume_page_handler($page) {
    global $CONFIG;
    $pages = dirname(__FILE__) . '/pages/resume';
    // determine wich user resume are we showing
    if (isset($page[0]) && !empty($page[0])) {
        
        switch ($page[0]) {
      		case "view":
            $username = $page[1];
            // forward away if invalid user.
            if (!$user = get_user_by_username($username)) {
                register_error( elgg_echo('resume:error:unknown_username'));
                forward($_SERVER['HTTP_REFERER']);
            }
      			include "$pages/view.php";
      			break;
          case "edit":
            //$username = $page[1];
            // forward away if invalid user.
            //$user = get_user_by_username($username);
            if (!elgg_is_logged_in()  )
            {
                register_error( elgg_echo('resume:error:not_loggedin'));
                forward($_SERVER['HTTP_REFERER']);
            }
            else 
              $user=elgg_get_logged_in_user_entity();
      			include "$pages/edit.php";
      			break;
          case "profile":
            include "$pages/profile.php";
      			break;
          case "add": 
            if (!elgg_is_logged_in()) {
                register_error(elgg_echo('resume:error:invalidrequest'));
                forward($_SERVER['HTTP_REFERER']);
            }   
            $user = elgg_get_logged_in_user_entity();
            
            include "$pages/$page[1].php";    
            //include "$pages/academic.php";       
      			//include dirname(__FILE__) . '/work.php';//.$page[1];
      			break;
          case "data":
            include dirname(__FILE__) . "/procedures/data.php";
            break;
          default:
            $username = $page[0];
            // forward away if invalid user.
            if (!$user = get_user_by_username($username)) {
                register_error( elgg_echo('resume:error:unknown_username'));
                forward($_SERVER['HTTP_REFERER']);
            }
      			include "$pages/view.php";
      			break;
      	}
        
    } else if (elgg_is_logged_in ()) {
        // Forward to user's resume if not user is provided
        forward($CONFIG->wwwroot . "resume/" . elgg_get_logged_in_user_entity()->username);
    } else {
        // Forward to main page if not logged in
        forward($_SERVER['HTTP_REFERER']);
    }

    
}

function printed_page_handler($page) {
?>

<?php

echo elgg_view("page_elements/header");
?>
   <div class="resume_body_printer">

   <?php
    elgg_set_context("profileprint");
    global $CONFIG;
    /**
     * Elgg user display (details)
     *
     * @package ElggProfile
     *
     * @uses $vars['entity'] The user entity
     */
    // determine wich user resume are we showing
    if (isset($page[0]) && !empty($page[0])) {
        $username = $page[0];



        // forward away if invalid user.
        if (!$user = get_user_by_username($username)) {
            register_error('blog:error:unknown_username');
            forward($_SERVER['HTTP_REFERER']);
        }

        // set the page owner to show the right content
        elgg_set_page_owner_guid($user->getGUID());
        $page_owner = elgg_get_page_owner_entity();

        if ($page_owner === false || is_null($page_owner)) {
            $page_owner = elgg_get_logged_in_user_entity();
            elgg_set_page_owner_guid(elgg_get_logged_in_user_entity());
        }


        $iconsize = "medium";


// wrap all profile info
?>

        <div id="profile_info_printed">


    <?php
// wrap the icon and links in a div
        // display the users name
  
        echo "<h1>" . $page_owner->name . "</h1>";
        echo "<br/>";
        echo "<strong>" . elgg_echo("resume:profileurl") . ":</strong><a href=\"" . $page_owner->getUrl() . "\">" . $page_owner->getUrl() . "</a>";
        echo "<div style=\"float:right;\">";
// get the user's main profile picture
        echo elgg_view(
                "profile/icon", array(
            'entity' => $page_owner,
            //'align' => "left",
            'size' => $iconsize,
            'override' => true,
                )
        );


        echo "</div>";
        echo "<br/>";
// display relevant links
// close profile_info_column_left
      
    ?>

        <div class="print-block">

        <?php
        // Simple XFN
        $rel_type = "";
        if (elgg_get_logged_in_user_guid() == $page_owner->guid) {
            $rel_type = 'me';
        } elseif (check_entity_relationship(elgg_get_logged_in_user_guid(), 'friend', $page_owner->guid)) {
            $rel_type = 'friend';
        }

        if ($rel_type) {
            $rel = "rel=\"$rel_type\"";
        }



        //insert a view that can be extended
        echo elgg_view("profile/status", array("entity" => $vars['entity']));
        ?>
        <?php
        $even_odd = null;

        if (is_array($CONFIG->profile) && sizeof($CONFIG->profile) > 0)
            foreach ($CONFIG->profile as $shortname => $valtype) {
                if ($shortname != "description") {
                    $value = $page_owner->$shortname;
                    if (!empty($value)) {

                        //This function controls the alternating class
                        $even_odd = ( 'odd' != $even_odd ) ? 'odd' : 'even';
        ?>
                        <p class="<?php echo $even_odd; ?>">
                            <b><?php
                        echo elgg_echo("profile:{$shortname}");
        ?>: </b>
            <?php
                        $options = array(
                            'value' => $page_owner->$shortname
                        );

                        if ($valtype == 'tags') {
                            $options['tag_names'] = $shortname;
                        }

                        echo elgg_view("output/{$valtype}", $options);
            ?>

                    </p>

        <?php
                    }
                }
            }
        ?>
    </div><!-- /#profile_info_column_middle -->


    <?php if (!elgg_get_plugin_setting('user_defined_fields', 'profile')) {
    ?>

            <div class="print-block">
                <p class="profile_aboutme_title"><b><?php echo elgg_echo("profile:aboutme"); ?></b></p>

        <?php if ($page_owner->isBanned()) {
 ?>
                <div>
            <?php
                echo elgg_echo('profile:banned');
            ?>
            </div><!-- /#profile_info_column_right -->

<?php } else { ?>

        <?php
                echo elgg_view('output/longtext', array('value' => $page_owner->description));
                //echo autop(filter_tags($vars['entity']->description));
        ?>

        <?php } ?>

        </div><!-- /#profile_info_column_right -->



    <?php } ?>




    </div><!-- /#profile_info -->

<?php ?>



        <div>
    <?php echo $title ?>

    <?php
// List Work experience objects
        if (elgg_list_entities($page_owner->getGUID(), 'rWork', 0, false, false, false)) {
    ?>
            <div class="print-block">

                <h3> <?php echo elgg_echo('resume:works'); ?> </h3>

        <?php echo elgg_list_entities($page_owner->getGUID(), 'rWork', 0, false, false, false); ?>

        </div> <?php
        }


// List Academic history objects
        if (elgg_list_entities($page_owner->getGUID(), 'rEdu', 0, false, false, false)) {
        ?>
            <div class="print-block">

                <h3> <?php echo elgg_echo('resume:academics') ?></h3>

        <?php echo elgg_list_entities($page_owner->getGUID(), 'rEdu', 0, false, false, false); ?>

        </div>
    <?php
        }

// List additional training objects

        if (elgg_list_entities($page_owner->getGUID(), 'rTraining', 0, false, false, false)) {
    ?>
            <div class="print-block" >

                <h3> <?php echo elgg_echo('resume:trainings'); ?></h3>

        <?php echo elgg_list_entities($page_owner->getGUID(), 'rTraining', 0, false, false, false); ?>

        </div>
    <?php
        }


// List Language objects

        if (elgg_list_entities($page_owner->getGUID(), 'rLanguage', 0, true, true, true)) {
    ?>

            <div class="print-block">

                <h3><?php echo elgg_echo('resume:languages'); ?> </h3>

                <table class="tabla_idiomas">
                    <tr class="t_h"><td><?php echo elgg_echo('resume:languages:language'); ?></td><td><?php echo elgg_echo('resume:languages:read'); ?></td><td> <?php echo elgg_echo('resume:languages:written'); ?> </td><td> <?php echo elgg_echo('resume:languages:spoken'); ?></td></tr>
            <?php echo elgg_list_entities($page_owner->getGUID(), 'rLanguage', 0, true, true, true); ?>
        </table>

    </div>
    <?php
        }
// List References objects
        if (elgg_list_entities($page_owner->getGUID(), 'rReference', 0, true, true, true)) {
    ?>
            <div class="print-block" >

                <h3><?php echo elgg_echo('resume:references'); ?> </h3>

        <?php echo elgg_list_entities($page_owner->getGUID(), 'rReference', 0, true, true, true); ?>

        </div>

    <?php
        }


// Show a message if there aren't any user objects.
        if (!elgg_list_entities($page_owner->getGUID(), 'rReference', 0, true, true, true)
                && !elgg_list_entities($page_owner->getGUID(), 'rLanguage', 0, true, true, true)
                && !elgg_list_entities($page_owner->getGUID(), 'rWork', 0, true, true, true)
                && !elgg_list_entities($page_owner->getGUID(), 'rEdu', 0, true, true, true)
                && !elgg_list_entities($page_owner->getGUID(), 'rTraining', 0, true, true, true)
        ) {
    ?>
            <div class="print-block">
                <h3> <?php echo elgg_echo('resume:noentries'); ?></h3>
            </div>
    <?php
        }
    ?>
    </div>
    </div>

<?php
    }
}





