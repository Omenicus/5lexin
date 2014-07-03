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

//grab the latest 4 blog posts
$list_params['subtype'] = 'blog';
$blogs = elgg_list_entities($list_params);

//grab the latest bookmarks
$list_params['subtype'] = 'bookmarks';
$bookmarks = elgg_list_entities($list_params);

//grab the latest files
$list_params['subtype'] = 'file';
$files = elgg_list_entities($list_params);

//grab the latest comments
$list_params['subtype'] = 'comment';
$comments = elgg_list_entities($list_params);

//grab the latest comments
$list_params['subtype'] = 'thewire';
$thewires = elgg_list_entities($list_params);

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
$params=array(
	'metadata_names' => 'icontime',
	'type' => 'user',
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
	'size' => 'small',
);
//$vars['page'] = 'newest';
//$newest_members=elgg_trigger_plugin_hook('members:list', 'newest', $params, null);
//newest groups
$list_params['type'] = 'group';
unset($list_params['subtype']);
$groups = elgg_list_entities($list_params);

//grab the login form
$login = elgg_view("core/account/login_box");

elgg_pop_context();

// lay out the content
$params = array(
	'blogs' => $blogs,
	'bookmarks' => $bookmarks,
	'files' => $files,
	'groups' => $groups,
	'login' => $login,
	'members' => $newest_members,
  'comments' => $comments,
  'thewires' => $thewires,
); 
$body = elgg_view_layout('custom_index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);
