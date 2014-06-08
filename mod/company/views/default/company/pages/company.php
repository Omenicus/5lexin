<?php

global $CONFIG;

$company_guid = get_input('company_guid');
$company = get_entity($company_guid);



  $TabsArray = array(
    'summary' => array('id' => 'company_summary', 'name' => elgg_echo('company:tabs:summary'), 'view' => 'company/summary', 'vars' => array('entity' => $company)),
    'branches' => array('id' => 'company_branches', 'name' => elgg_echo('company:tabs:branches'), 'view' => 'company/branches', 'vars' => array('entity' => $company)),
    'reviews' => array('id' => 'company_reviews', 'name' => elgg_echo('company:tabs:reviews'), 'view' => 'company/reviews', 'vars' => array('entity' => $company)),
  );
  
  $hypepluginlist = string_to_tag_array(elgg_get_plugin_setting('hypepluginlist', 'hypeFramework'));
  foreach ($hypepluginlist as $plugin) {
      $TabsArray = elgg_trigger_plugin_hook('company:companytabs:' . $plugin, 'all', array('current' => $TabsArray), $TabsArray);
  }
  $TabsArray = elgg_trigger_plugin_hook('company:companytabs', 'all', array('current' => $TabsArray), $TabsArray);
  
  //$body = elgg_view('hypeFramework/tabs', array('tabs' => $TabsArray));
  
  $area1 = elgg_view_title($company->name);
  //$area2 = $body;
  if( $company->created )
  {
    $area3 = elgg_view('company/profile', array('entity' => $company));
  }
  else
  {
    $area3 = elgg_echo('company:notcreated');
    $site_url = elgg_get_site_url();
    $area3= $area3.'<div class="button">'.
                '<a href="' . $site_url . 'comp/edit/' . $company->guid . '">' . elgg_echo('company:createthis') . '</a>';
                '</div>';
  }
  //elgg_set_context('companyinfo');

  $area4 = elgg_view_menu('page', array('sort_by' => 'name','entity' => $company));
  
  $title = elgg_echo('company:companies');
  
  $body = elgg_view_layout('two_column_left_sidebar', array(
  	'content' => $area3,
    'sidebar' => $area4,
  	'title' => $area1,
  	'filter' => '',
  ));
  
  echo elgg_view_page($company->name, $body);

?>
