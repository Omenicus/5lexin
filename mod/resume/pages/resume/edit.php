<?php
/**
 * View a bookmark
 *
 * @package ElggBookmarks
 */

// set the page owner to show the right content
//elgg_set_page_owner_guid(0);//$user->getGUID());

$page_owner = $user;//elgg_get_page_owner_entity();

if ($page_owner === false || is_null($page_owner)) {
    $page_owner = elgg_get_logged_in_user_entity();
    //elgg_set_page_owner_guid(elgg_get_logged_in_user_entity());
}

elgg_push_context('resume_edit');

$area2 .= '<div class="resume">';
$area2 .= "<div class=\"clearfloat\"></div>";
$area1 = elgg_view('page/elements/intro',array('page_ower' => $page_owner));//_title(elgg_echo('resume:my'));
    
if ($page_owner == elgg_get_logged_in_user_entity()) {
    if( elgg_get_entities(array('type' => 'object', 'subtype' => 'rSummary', 'owner_guids'=>array($page_owner->getGUID()),count => TRUE))==0) 
    {
      elgg_register_menu_item('page', array('name' => '110_resume_add_summary','href' => "resume/add/summary",'text' => elgg_echo('resume:add:summary')));
    
    }
    elgg_register_menu_item('page', array('name' => '112_resume_add_academic','href' => "resume/add/academic",'text' => elgg_echo('resume:add:academic')));
    /*elgg_register_menu_item('page', array('name' => '114_resume_add_training','href' => "resume/add/training",'text' => elgg_echo('resume:add:training')));
    elgg_register_menu_item('page', array('name' => '113_resume_add_language','href' => "resume/add/lang",'text' => elgg_echo('resume:add:language')));
    elgg_register_menu_item('page', array('name' => '115_resume_add_reference','href' => "resume/add/reference",'text' => elgg_echo('resume:add:reference')));
    */
    elgg_register_menu_item('page', array('name' => '111_resume_add_work','href' => "resume/add/work",'text' => elgg_echo('resume:add:work')));
    
} else {
    //$area1 = elgg_view('page/elements/intro',array('page_ower' => $page_owner));//$area1 = elgg_view_title(sprintf(elgg_echo('resume:user'), $page_owner->name));
    elgg_register_menu_item('page', array('name' => 'resume_menu_goto','href' => "resume/" . elgg_get_logged_in_user_entity()->username,'text' => elgg_echo('resume:menu:goto')));       
}
$area2 .=$area1; 
 
// -------- BEGIN MAIN PAGE CONTENT ---------




// List Work experience Summary objects

$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rSummary',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
  'owner_guids'=>array($page_owner->getGUID()),
));

$user=elgg_get_logged_in_user_entity();
$site_url = elgg_get_site_url();
//if ($content) 
{
    $area2 .= '<div class="contentWrapper resume_contentWrapper resumesep" width=716>';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "v" . "</a></p>";
    $area2 .= '' . elgg_echo('resume:summary') . '';
    if( $page_owner == $user  &&  elgg_in_context('resume_edit'))
    {
      if (elgg_get_entities(array('type' => 'object', 'subtype' => 'rSummary', 'owner_guids'=>array($page_owner->getGUID()),count => TRUE))>0){
      
      $area2 .="<span class=\"right\"><a href=\"$site_url"."resume/add/summary?id=".elgg_get_entities(array('type' => 'object', 'subtype' => 'rSummary', 'owner_guids'=>array($page_owner->getGUID()),count => FALSE))[0]->getGUID()."\">". elgg_echo('resume:edit')."</a></span>";
      }    
      else
      {
        $area2 .="<span class=\"right\"><a href=\"$site_url"."resume/add/summary\">". elgg_echo('resume:edit')."</a></span>";      
      } 
    }
    $area2 .= '';
    //$area2 .= "<div class=\"resume_collapsible_box collapsible_box \">";
    $area2 .= $content;
    //$area2 .= "</div>";
    $area2 .= "</div>";
}
// List Work experience objects

$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rWork',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
  'owner_guids'=>array($page_owner->getGUID()),
  'order_by '=>'startdate',
));

//if ($content) 
{
    $area2 .= '<div class="contentWrapper resume_contentWrapper resumesep" width=716>';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "v" . "</a></p>";
    $area2 .= '<span class="resume_section_title">' . elgg_echo('resume:works') . '</span>';
    if( $page_owner == $user  &&  elgg_in_context('resume_edit'))
    {
       $area2 .="<span class=\"right\"><a href=\"$site_url"."resume/add/work\">". elgg_echo('resume:add')."</a></span>";      
      
    }
    //$area2 .= "<div class=\"resume_collapsible_box collapsible_box \">";
    $area2 .= $content;
    //$area2 .= "</div>";
    $area2 .= "</div>";
}

// List Academic history objects
$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rEdu',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
  'owner_guids'=>array($page_owner->getGUID()),
  'order_by '=>'startdate',
));
//if ($content) 
{
    $area2 .= '<div class="contentWrapper resume_contentWrapper " width=716>';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "+" . "</a></p>";
    $area2 .= '<span  class="resume_section_title">' . elgg_echo('resume:academics') . '</span>';
    if( $page_owner == $user  &&  elgg_in_context('resume_edit'))
    {
       $area2 .="<span class=\"right\"><a href=\"$site_url"."resume/add/academic\">". elgg_echo('resume:add')."</a></span>";      
      
    }
    //$area2 .= "<div class=\"collapsible_box resume_collapsible_box_hidden\">";
    $area2 .= $content;
    //$area2 .= "</div>";
    $area2 .= "</div>";
}
/*
// List additional training objects
$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rTraining',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
));
//if ($content) 
{
    $area2 .= '<div class="contentWrapper resume_contentWrapper resumesep" width=716>';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "+" . "</a></p>";
    $area2 .= '<h3>' . elgg_echo('resume:trainings') . '</h3>';
    //$area2 .= "<div class=\"collapsible_box resume_collapsible_box_hidden\">";
    $area2 .= $content;
    //$area2 .= "</div>";
    $area2 .= "</div>";
}


// List Language objects
$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rLanguage',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
));
//if ($content) 
{

    $area2 .= '<div class="contentWrapper resume_contentWrapper resumesep">';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "+" . "</a></p>";
    $area2 .= '<h3>' . elgg_echo('resume:languages') . '</h3>';
    //$area2 .= "<div class=\"collapsible_box resume_collapsible_box_hidden \">";
    $area2 .= '<table class="tabla_idiomas">';
    $area2 .= '<tr class="t_h"><td>' . elgg_echo('resume:languages:language') . '</td><td>' . elgg_echo('resume:languages:read') . '</td><td>' . elgg_echo('resume:languages:written') . '</td><td>' . elgg_echo('resume:languages:spoken') . '</td></tr>';
    $area2 .= $content;
    $area2 .= '</table>';
    //$area2 .= "</div>";
    $area2 .= '</div>';
}
// List References objects
$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'rReference',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => '',
));
//if ($content) 
{
    $area2 .= '<div class="contentWrapper resume_contentWrapper resumesep" width=716>';
    //$area2 .= "<p><a class=\"collapsibleboxlink resume_collapsibleboxlink\">" . "+" . "</a></p>";
    $area2 .= '<h3>' . elgg_echo('resume:references') . '</h3>';
    //$area2 .= "<div class=\"collapsible_box resume_collapsible_box_hidden\">";
    $area2 .= $content;
    //$area2 .= '</div>';
    $area2 .= '</div>';
}
*/


$area2 .= '</div>';


//$area0 = elgg_view("resume/search");

//$body = elgg_view_layout("two_column_left_sidebar", $area0, $area1 . $area2);               page_custom
//$body =elgg_view_layout('two_column_left_sidebar', array('sidebar' => $area0, 'content' => $area1.$area2));

$body = elgg_view_layout('one_sidebar', array(
	'content' => $area2,
  //'sidebar' => $area0,
  //'filter_context' => 'all',
  //'sidebar' => elgg_view('resume/search'),
  'owner_block'=>false,
	//'title' => $area1

));
//$body = elgg_view('resume/page_custom');
echo elgg_view_page(sprintf(elgg_echo('resume:user'), $page_owner->name), $body);

// -------- END MAIN PAGE CONTENT ---------