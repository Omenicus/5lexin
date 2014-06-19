<?php

include_once(dirname(__FILE__) . '/models/model.php');
function company_init() {
    global $CONFIG;

    //if (!elgg_is_active_plugin('hypeFramework')) {
    //    register_error('hypeFramework is not enabled. company will not work properly. Visit www.hypeJunction.com for details');
    //}
    $root = dirname(__FILE__);
    $action_path = "$root/actions";
    elgg_register_action('company/get_companies', "$action_path/get_companies.php", false);
    elgg_register_action('company/setlatlng', "$action_path/setlatlng.php", false);
    elgg_register_action('company/save', "$action_path/save.php", false);
    elgg_register_action('company/delete', "$action_path/delete.php", false);
    elgg_register_action('company/savejob', "$action_path/savejob.php", false);
    elgg_register_action('company/deletejob', "$action_path/deletejob.php", false);
    elgg_register_action('company/savebranch', "$action_path/savebranch.php", false);
    elgg_register_action('company/branchform', "$action_path/branchform.php", false);
    elgg_register_action('company/ajax', "$action_path/ajax.php", false);

    elgg_register_entity_type('object', 'company');
    elgg_register_entity_type('object', 'job');
    //elgg_register_entity_type('object', 'branchcompany');
    
    elgg_register_page_handler('comp', 'company_page_handler');
    elgg_register_entity_url_handler('company_url_handler', 'object', 'company');
    elgg_register_entity_url_handler('company_branch_url_handler', 'object', 'branchcompany');

    elgg_extend_view('profile/icon', 'company/icon');
    elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'company_icon_hook');

    elgg_extend_view('css', 'company/css');
    elgg_extend_view('input', 'company/filter');

    elgg_extend_view('page_elements/header', 'company/maps/metatags');
    elgg_extend_view('index/righthandside', 'company/latest');

    //elgg_register_menu_item(elgg_echo('company:menu'), $CONFIG->wwwroot . 'comp/all');
    elgg_register_menu_item('site', array(
  		'name' => '121_company',
  		'text' => elgg_echo('company:menu'),
  		'href' => "comp/all" 
  	));
    //add to pages of this mod
    elgg_register_plugin_hook_handler('register', 'menu:page', 'company_page_menu');
    elgg_register_plugin_hook_handler('profile:fields', 'group', 'comp_group_profile_fields');
    
    
    //add to owner block menu of all pages
    //elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'company_owner_block_menu');        

    //add to pages of this mod
    //elgg_register_plugin_hook_handler('register', 'menu:page', 'resume_page_menu');
    
    //elgg_register_simplecache_view('js/elgg_tokeninput/tokeninput');
    elgg_register_js('elgg.city.js','vendors/city/city.min.js');
	  elgg_register_js('elgg.cityselect.js','vendors/city/jquery.cityselect.js');
    
    //elgg_register_simplecache_view("js/company/init");
    $js = elgg_get_simplecache_url("js", "company/init");
    elgg_register_js("elgg.cityinit.js", $js);
    
    $js = elgg_get_simplecache_url("js", "company/initcompanyinput");
    elgg_register_js("initcompanyinput.js", $js);
    //elgg_register_js('elgg_register_js.js',"company/init_company_input.js");
    elgg_extend_view("groups/edit","company/elements/company_input");
    
    $css_url = 'vendors/jquery/css/flick/jquery-ui-1.10.4.custom.css';
    elgg_register_css('jquery-ui', $css_url);
    

    if (get_subtype_id('object', 'company')) {
    	update_subtype('object', 'company', 'ElggCompany');
    } else {
    	add_subtype('object', 'company', 'ElggCompany');
    }
    if (get_subtype_id('object', 'job')) {
    	update_subtype('object', 'job', 'ElggJob');
    } else {
    	add_subtype('object', 'job', 'ElggJob');
    }
}
function comp_group_profile_fields($hook, $type, $fields, $params) {
  $result = $fields;
  $result['organization']='text';
	return  $result;
}
function company_page_menu($hook, $type, $return, $params) {
	if (elgg_is_logged_in()) {
		// only show  in resume pages
		if (elgg_in_context( "companies") || elgg_in_context("searchcomp")) 
    {
      elgg_register_menu_item('page', array('name' => '131_company_add','href' => "comp/new",'text' => elgg_echo('company:addcompany')));
    	//elgg_register_menu_item('page', array('name' => '133_company_addjob','href' => "comp/all",'text' => elgg_echo('company:addjob')));
    
		}    
    else
    if (elgg_in_context( "companyinfo")) 
    {
      elgg_register_menu_item('page', array('name' => '132_company_add','href' => "comp/new",'text' => elgg_echo('company:addcompany')));    	  
      $entity=$params['entity'];
      
      if(elgg_instanceof($entity, 'object', 'company')&&$entity->canEdit())//elgg_get_logged_in_user_entity()->getGUID()))
      {
         elgg_register_menu_item('page', array('name' => '133_company_addjob','href' => "comp/newjob/".$entity->getGUID(),'text' => elgg_echo('company:addjob')));
    
      }
       
    }else
    if (elgg_in_context( "jobinfo")) 
    {
      elgg_register_menu_item('page', array('name' => '132_company_add','href' => "comp/new",'text' => elgg_echo('company:addcompany')));    	  
      $entity=$params['entity'];
      $comp=get_entity($entity->company_guid);
      if(elgg_instanceof($comp, 'object', 'company')&&$comp->canEdit())//elgg_get_logged_in_user_entity()->getGUID()))
      {
         elgg_register_menu_item('page', array('name' => '133_company_addjob','href' => "comp/newjob/".$comp->getGUID(),'text' => elgg_echo('company:addjob')));
    
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
function company_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "resume/{$params['entity']->username}";
		$item = new ElggMenuItem('resume', elgg_echo('resume:menu:owner_block'), $url);
		$return[] = $item;
	} 

	return $return;
}

function company_pagesetup() {
    global $CONFIG;

//add submenu options
    if (elgg_in_context( "companies") || elgg_get_context("searchcomp")) 
    {
        
        elgg_register_menu_item(elgg_echo('company:everyone'), $CONFIG->wwwroot . "comp/all/");
        elgg_register_menu_item(elgg_echo('company:neighbourhood'), $CONFIG->wwwroot . "comp/neighbourhood");

        if (elgg_is_logged_in ()) {
            elgg_register_menu_item(elgg_echo('company:network'), $CONFIG->wwwroot . "comp/network/" . $_SESSION['user']->username);
            //company_guid
            if (canCreateCompany(elgg_get_logged_in_user_entity())) {
                elgg_register_menu_item(elgg_echo('company:your'), $CONFIG->wwwroot . "comp/owner/" . $_SESSION['user']->username);
                elgg_register_menu_item(elgg_echo('company:addcompany'), $CONFIG->wwwroot . "comp/new/{$_SESSION['user']->username}/");
            }
        }
    }
}

function company_page_handler($page) {

    global $CONFIG;

    if (isset($page[0])) {

        switch ($page[0]) {
            case 'neighbourhood' :
                include($CONFIG->pluginspath . 'company/views/default/company/pages/neighbourhood.php');
                break;

            case 'network' :
                set_input('username', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/network.php');
                break;

            case 'owner' :
                set_input('username', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/owner.php');
                break;

            case 'new' :
                //set_input('username', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/new.php');
                break;
            case 'newjob' :
                set_input('company_guid', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/newjob.php');
                break;
            case 'edit' :
                elgg_set_context('companyinfo');
                set_input('company_guid', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/edit.php');
                break;
            case 'editjob' :
                elgg_set_context('jobinfo');
                set_input('job_guid', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/editjob.php');
                break;
            case 'icon':
                if (isset($page[1])) {
                    set_input('company_guid', $page[1]);
                }
                if (isset($page[2])) {
                    set_input('size', $page[2]);
                }
                include($CONFIG->pluginspath . "company/graphics/company/icon.php");
                break;

            case 'view' :
                elgg_set_context('companyinfo');
                set_input('company_guid', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/company.php');
                break;
            case 'viewjob' :
                elgg_set_context('jobinfo');
                set_input('job_guid', $page[1]);
                include($CONFIG->pluginspath . 'company/views/default/company/pages/job.php');
                break;
            case 'ajax':
                set_input('company_guid', $page[1]);
                //include($CONFIG->pluginspath . 'company/views/default/company/pages/company.php');
                include($CONFIG->pluginspath . 'company/views/default/company/pages/'.$page[2].'.php');
                break;
            case 'all' :                                                                                         
            default :
                include($CONFIG->pluginspath . 'company/views/default/company/pages/all.php');
                break;
        }
    } else {
        register_error(elgg_echo('company:error'));
        forward($_SERVER['HTTP_REFERER']);
    }
}

function company_icon_hook($hook, $entity_type, $returnvalue, $params) {

    global $CONFIG;
    if ((!$returnvalue) && ($hook == 'entity:icon:url') && ($params['entity'] instanceof ElggObject) && ($params['entity']->getSubtype() == 'company')) {

        $entity = $params['entity'];
        $size = $params['size'];
        $filehandler = new ElggFile();
        $filehandler->owner_guid = $entity->owner_guid;
        $filehandler->setFilename("company/" . $entity->guid . $size . ".jpg");

        $url = $CONFIG->url . "comp/icon/{$entity->guid}/{$size}/company.jpg";
        return $url;
    }
    
    if ((!$returnvalue) && ($hook == 'entity:icon:url') && ($params['entity'] instanceof ElggObject) && ($params['entity']->getSubtype() == 'branchcompany')) {

        $entity = $params['entity'];
        $parent = get_entity($entity->container_guid);
        $size = $params['size'];
        $url = $CONFIG->url . "comp/icon/{$parent->guid}/{$size}/company.jpg";
        return $url;
    }
    
}

function company_url_handler($company) {
    global $CONFIG;
    return $CONFIG->wwwroot . "comp/view/" . $company->guid . '/' . friendly_title($company->title);
}

function company_branch_url_handler($branch) {
    global $CONFIG;
    return $CONFIG->wwwroot . "comp/view/" . $branch->container_guid;
}

function company_user_address($event, $object_type, $object) {
    if ($object instanceof ElggUser) {
        $object->hypelatitude = '';
        $object->hypelongitude = '';
    }
}

elgg_register_event_handler('init', 'system', 'company_init');
elgg_register_event_handler('pagesetup', 'system', 'company_pagesetup');
elgg_register_event_handler('update', 'user', 'company_user_address');
?>
