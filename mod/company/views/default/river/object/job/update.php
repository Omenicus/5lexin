<?php
  $object = $vars['item']->getObjectEntity();
  $excerpt = strip_tags($object->description);
  $excerpt = elgg_get_excerpt($excerpt);
  //$excerpt = thewire_filter($excerpt);
  
  $subject = $vars['item']->getSubjectEntity();
  $subject_link = elgg_view('output/url', array(
  	'href' => $subject->getURL(),
  	'text' => $subject->name,
  	'class' => 'elgg-river-subject',
  	'is_trusted' => true,
  ));
  
  $object_link = elgg_view('output/url', array(
  	'href' => "comp/viewjob/$object->guid",// owner/$subject->username,
  	'text' => $object->title,
  	'class' => 'elgg-river-object',
  	'is_trusted' => true,
  ));
  $summary = elgg_echo("company:river:updatejob", array($subject_link, $object_link));
  echo elgg_view('river/elements/layout', array(
  	'item' => $vars['item'],
  	'message' => $excerpt,
  	'summary' => $summary,
  ));

?>