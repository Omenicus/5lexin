<?php
/**
 * Elgg demo custom index page plugin
 * 
 */

elgg_register_event_handler('init', 'system', 'lexin_index_init');

function lexin_index_init() {

	// Extend system CSS with our own styles
	//elgg_extend_view('css/elgg', 'lexin_index/css');
  elgg_register_simplecache_view('css/lexin_index/css');
	elgg_register_css('lexin_index_css', elgg_get_simplecache_url('css', 'lexin_index/css'));
  elgg_register_simplecache_view('css/lexin_index/css_custom');
	elgg_register_css('custom_css', elgg_get_simplecache_url('css', 'lexin_index/css_custom'));
	// Replace the default index page
	elgg_register_page_handler('', 'index');  //if want to show only login box, change to lexin_index  
  elgg_register_page_handler('index', 'index');
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
function index() {
  if (elgg_is_logged_in()) {
  $user=elgg_get_logged_in_user_entity();
  if( !($user->icontime) || $user->icontime== "default")
    forward('avatar/edit/'.$user->username);
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
      forward('resume/edit/'.$user->username);
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

