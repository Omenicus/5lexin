<?php
/**
 * Elgg demo custom index page plugin
 * 
 */

elgg_register_event_handler('init', 'system', 'lexin_index_init');

function lexin_index_init() {
  if (elgg_is_logged_in()&& elgg_is_active_plugin('live_notifications')) {
		elgg_register_menu_item('topbar', array(
			'name' => 'live_notifications',
			'href' => 'live_notifications/all',
			'text' => elgg_echo('live_notifications'),
			'priority' => 102,
			'section' => 'alt',
      'parent_name' => 'account',
		));
	}
  if (elgg_is_logged_in()&& elgg_is_active_plugin('invitefriends')) {
		elgg_register_menu_item('topbar', array(
			'name' => 'invite',
			'href' => 'invite',
			'text' => elgg_echo('friends:invite'),
			'priority' => 103,
			'section' => 'alt',
      'parent_name' => 'account',
		));
	} 
	// Extend system CSS with our own styles
	//elgg_extend_view('css/elgg', 'lexin_index/css');
  elgg_register_simplecache_view('css/lexin_index/css');
	elgg_register_css('lexin_index_css', elgg_get_simplecache_url('css', 'lexin_index/css'));
  elgg_register_simplecache_view('css/lexin_index/css_custom');
	elgg_register_css('custom_css', elgg_get_simplecache_url('css', 'lexin_index/css_custom'));
	// Replace the default index page
	elgg_register_page_handler('', 'custom_index');  //if want to show only login box, change to lexin_index  
  elgg_register_page_handler('main', 'custom_index');
  
}

/**
 * Serve the front page
 * 
 * @return bool Whether the page was sent.
 */
function lexin_index() {
	if (!include_once(dirname(__FILE__) . "/lexin_index.php")) {
		return false;
	}

	return true;
}
function custom_index() {
  if (elgg_is_logged_in()) {
  $user=elgg_get_logged_in_user_entity();
  if( !($user->icontime) || $user->icontime== "default")
  {
    system_message(elgg_echo('lexin:needusericon'));
    forward('avatar/edit/'.$user->username);
  }    
  else{
    
    $work = elgg_get_entities(array(
    	'type' => 'object',
    	'subtype' => 'rWork',
    	'count' => true,
      'owner_guids'=>array($user->getGUID()),
      'order_by '=>'startdate',
    ));
    $edu = elgg_get_entities(array(
    	'type' => 'object',
    	'subtype' => 'rWorkEdu',
    	'count' => true,
      'owner_guids'=>array($user->getGUID()),
      'order_by '=>'startdate',
    ));
    if( $work==0 && $edu==0)
    {
      system_message(elgg_echo('lexin:needresume'));
      forward('resume/edit/'.$user->username);
    }
    else 
    {
        //forward('activity');
        if (!include_once(dirname(__FILE__) . "/index.php")) {
		      return false;
	       }
    }
      
  }
}
else
{
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}
}
	return true;
}

