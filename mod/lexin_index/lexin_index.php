<?php
/**
 * Elgg custom index page
 * 
 */

elgg_push_context('front');

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
      forward('main');
  }
}
else
{
  
  //grab the login form
  $login = elgg_view("core/account/login_box");
  
   
  // lay out the content
  $params = array(
  	'login' => $login,
  ); 
   
  $body = elgg_view_layout('lexin_index_1', $params);

  // no RSS feed with a "widget" front page
  global $autofeed;
  $autofeed = FALSE;
  
  echo elgg_view_page('', $body);
}


