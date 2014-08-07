<?php
/**
 * Elgg custom index page
 * 
 */  

elgg_push_context('front');  

elgg_push_context('widgets');

$list_params = array(
	'type' => 'object',
	'limit' => 5,
	'full_view' => false,
	'list_type_toggle' => false,
	'pagination' => false,
);

$show_blogs=false;
$show_bookmarks=false;

//grab the latest 4 blog posts

$blogs=null;
if( $show_blogs ){
  $list_params['subtype'] = 'blog';
  $blogs = elgg_list_entities($list_params);
}


//grab the latest bookmarks
/*$list_params['subtype'] = 'bookmarks';
$bookmarks = elgg_list_entities($list_params);
*/
//grab the latest files
/*$list_params['subtype'] = 'file';
$files = elgg_list_entities($list_params);
*/
//grab the latest comments
/*$list_params['subtype'] = 'comment';
$comments = elgg_list_entities($list_params);
*/
//grab the latest comments
/*$list_params['subtype'] = 'thewire';
$thewires = elgg_list_entities($list_params);
*/
//get the newest members who have an avatar
$params=array(
	'metadata_names' => 'icontime',
	'type' => 'user',
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
	//'list_type' => 'gallery',
	//'gallery_class' => 'elgg-gallery-users',
	'size' => 'small',
);
$newest_members = elgg_list_entities_from_metadata($params);
/*$params=array(
	'metadata_names' => 'icontime',
	'type' => 'user',
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
	'size' => 'small',
); */
//$vars['page'] = 'newest';
//$newest_members=elgg_trigger_plugin_hook('members:list', 'newest', $params, null);
//newest groups
/*$list_params['type'] = 'group';
$list_params['limit'] = 10;
unset($list_params['subtype']);
$groups = elgg_list_entities($list_params);  
*/
$groups_join='';
if (elgg_is_logged_in()) {
$dbprefix = elgg_get_config('dbprefix');
$groups_entities = elgg_get_entities_from_relationship(array(
  'type' => 'group',
	'relationship' => 'member',
	'relationship_guid' => elgg_get_logged_in_user_guid(),
	'inverse_relationship' => false,
	'full_view' => false,
	'joins' => array("JOIN {$dbprefix}groups_entity ge ON e.guid = ge.guid"),
	'order_by' => 'ge.name ASC',
	'no_results' => elgg_echo('groups:none'),
));
$html='';
foreach ($groups_entities as $entity) {
  $icon = elgg_view_entity_icon($entity, 'small');
  //$branding = (abs($entity->userpoints_points) > 1) ? elgg_echo('elggx_userpoints:lowerplural') : elgg_echo('elggx_userpoints:lowersingular');
  //$branding =  "<a href=\"blog/view/498\">{$branding}</a>";
  $count = elgg_get_river(array(
    'joins' => array(
			"JOIN {$dbprefix}entities e1 ON e1.guid = rv.object_guid",
			"LEFT JOIN {$dbprefix}entities e2 ON e2.guid = rv.target_guid",
		),
		'wheres' => array(
			"(e1.container_guid = $entity->guid OR e2.container_guid = $entity->guid)  ",
		),
    'count' =>true,
    'posted_time_lower'=> elgg_get_logged_in_user_entity()->prev_last_login,
		'no_results' => elgg_echo('groups:activity:none'),
	));
  
  $info = "<a href=\"groups/activity/{$entity->getGUID()}\">";
  $title=elgg_echo("lexin:updates:afterlastlogin");
  if( $count >0) $info.="<b class=\"left newitems\" title=\"{$title}\">[+{$count}]</b>";
  $info .= "{$entity->name}</a>";
  $desc=  elgg_get_excerpt($vars['entity']->briefdescription, 20);
  $info .="<div class=\"elgg-subtext\">$desc</div>";    
  $html .= elgg_view('page/components/image_block', array('image' => $icon, 'body' => $info));
}
$groups_join= $html;

}

$rivers = elgg_list_river(array('limit'=>20,'pagination'=>false));


//grab the login form
$login = elgg_view("core/account/login_box");

$limit = 10;

$options = array('type' => 'user', 'limit' => $limit, 'order_by_metadata' =>  array('name' => 'userpoints_points', 'direction' => DESC, 'as' => integer));
$options['metadata_name_value_pairs'] = array(array('name' => 'userpoints_points', 'value' => 0,  'operand' => '>'));
$entities = elgg_get_entities_from_metadata($options);

$html = '';

foreach ($entities as $entity) {

    $icon = elgg_view_entity_icon($entity, 'small');
    $branding = (abs($entity->userpoints_points) > 1) ? elgg_echo('elggx_userpoints:lowerplural') : elgg_echo('elggx_userpoints:lowersingular');
    $branding =  "<a href=\"blog/view/498\">{$branding}</a>";
    $info = "<a href=\"{$entity->getURL()}\">{$entity->name}</a><b class=\"right\">{$entity->userpoints_points} $branding</b>";
    
    $jobtitle='';

    $title=elgg_get_metadata(array( 'metadata_name' => 'jobtitle', 'guid' => $entity->getGUID() ));
    if( $title )
      $jobtitle.=$title[count($title)-1]->value;
    //$jobtitle.=count($title);   
    $org=elgg_get_metadata(array( 'metadata_name' => 'organisation', 'guid' => $entity->getGUID() ));
    $orgid=elgg_get_metadata(array( 'metadata_name' => 'organisationid', 'guid' => $entity->getGUID() ));
    
    if( $org && $orgid)
    {
      //$jobtitle.=  "-1-";
      $company=get_entity($orgid[count($orgid)-1]->value);
      $jobtitle.=  ' - <a href="'.$company->getURL().'">'.$company->title.'</a>';
    }
    elseif( $org )
    {
      //$jobtitle.=  "-2-".count($org);
      $jobtitle.= ' - '.$org[count($org)-1]->value;
    }
    //$jobtitle.= count($org);
    $info .="<div class=\"elgg-subtext\">$jobtitle</div>";    
    $html .= elgg_view('page/components/image_block', array('image' => $icon, 'body' => $info));
}

$caifu=$html;

elgg_pop_context();
                                         
// lay out the content
$params = array(
	//'blogs' => $blogs,
	//'bookmarks' => $bookmarks,
	//'files' => $files,
	//'groups' => $groups,  
  'groups_join' => $groups_join,               
	'login' => $login,
	'members' => $newest_members,
  //'comments' => $comments,
  //'thewires' => $thewires,
  'rivers'=> $rivers,
  'caifu'=>$caifu,
); 
$body = elgg_view_layout('custom_index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);
