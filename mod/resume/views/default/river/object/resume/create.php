<?php
  $object = $vars['item']->getObjectEntity();
  $excerpt = strip_tags($object->description);
  $excerpt = thewire_filter($excerpt);
  
  $subject = $vars['item']->getSubjectEntity();
  $subject_link = elgg_view('output/url', array(
  	'href' => $subject->getURL(),
  	'text' => $subject->name,
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
  
  if ($object->getSubtype() == 'rAcademic') {
      $itemType = elgg_echo("resume:academics");
      $itemSubject= $object->institution;
  }
  
  if ($object->getSubtype() == 'rTraining') {
      $itemType = elgg_echo("resume:trainings");
  }
  //$site_url = elgg_get_site_url();
  //$string = sprintf(elgg_echo("resume:river:created"), $url, $itemType,$itemSubject)." ";
  //$string .= "<a href=\"{$site_url}resume/view/{$subject->username}\">".elgg_echo('resume:resume')."</a>";
  
  $summary = elgg_echo("resume:river:created", array($subject_link, $itemType,$itemSubject,$object_link));
  //$summary = elgg_echo("company:river:create", array($subject_link, $object_link));
  echo elgg_view('river/elements/layout', array(
  	'item' => $vars['item'],
  	'message' => $excerpt,
  	'summary' => $summary,
  ));