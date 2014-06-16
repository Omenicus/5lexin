<?php
  //$url = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";

  $object = $vars['item']->getObjectEntity();
  $excerpt = strip_tags($object->description);
  $excerpt = thewire_filter($excerpt);
  
  $subject = $vars['item']->getSubjectEntity();
  //if ($subject instanceof ElggUser) {
    $subject_text="";
    if( $subject->organisation )
      $subject_text.= $subject->organisation;
    if( $subject->jobtitle )
      $subject_text.= $subject->jobtitle;  
    $subject_text.= $subject->name;  
  //}
  //else
  //  $subjectt_text = $subject->title ? $subject->title : $subject->name;
  $subject_link = elgg_view('output/url', array(
  	'href' => $subject->getURL(),
  	'text' => $subject_text,//$subject->name,
  	'class' => 'elgg-river-subject',
  	'is_trusted' => true,
  ));
  
  $object_link = elgg_view('output/url', array(
  	'href' => "resume/view/$subject->username",// owner/$subject->username,
  	'text' => elgg_echo("resume:resume"),
  	'class' => 'elgg-river-object',
  	'is_trusted' => true,
  ));
  if ($object->getSubtype() == 'rLanguage') {
      $itemType = elgg_echo("resume:languages");
  }
  
  if ($object->getSubtype() == 'rReference') {
      $itemType = elgg_echo("resume:references");
  }
  if ($object->getSubtype() == 'rWork') {
      $itemType = elgg_echo("resume:works");
      $itemSubject= $object->organisation;
  }
  
  if ($object->getSubtype() == 'rEdu') {
      $itemType = elgg_echo("resume:academics");
      $itemSubject= $object->institution;
  }
  if ($object->getSubtype() == 'rSummary') {
      $itemType = elgg_echo("resume:summary");
      $itemSubject= '';
  }
  if ($object->getSubtype() == 'rTraining') {
      $itemType = elgg_echo("resume:trainings");
  }
  $site_url = elgg_get_site_url();
  $string = sprintf(elgg_echo("resume:river:created"), $url, $itemType,$itemSubject)." ";
  $string .= "<a href=\"{$site_url}resume/view/{$subject->username}\">".elgg_echo('resume:resume')."</a>";
  
  if( $object->getSubtype() == 'rSummary' )
    $summary = elgg_echo("resume:river:updated:nosubject", array($subject_link, $itemType,$object_link));
  else
    $summary = elgg_echo("resume:river:updated", array($subject_link, $itemType,$itemSubject,$object_link));
  
  
  //$summary = elgg_echo("company:river:create", array($subject_link, $object_link));
  //$vars['item']->annotation_id= $object->guid;
  echo elgg_view('river/elements/layout', array(
  	'item' => $vars['item'],
  	'message' => $excerpt,
  	'summary' => $summary,
  ));