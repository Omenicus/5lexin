<?php

global $CONFIG;

$job_guid = get_input('job_guid');
$job = get_entity($job_guid);

  
  //$body = elgg_view('hypeFramework/tabs', array('tabs' => $TabsArray));
  
  $area1 = elgg_view_title($job->name);
  //$area2 = $body;
  if( $job )
  {
    $area3 = elgg_view('company/profilejob', array('entity' => $job));
  }
  else
  {
    $area3 = elgg_echo('company:jobnotcreated');
    
  }
  //elgg_set_context('jobinfo');

  $area4 = elgg_view_menu('page', array('sort_by' => 'name','entity' => $job));
  
  $body = elgg_view_layout('two_column_left_sidebar', array(
  	'content' => $area3,
    'sidebar' => $area4,
  	'title' => $area1,
  	'filter' => '',
  ));
  
  echo elgg_view_page($job->name, $body);

?>
