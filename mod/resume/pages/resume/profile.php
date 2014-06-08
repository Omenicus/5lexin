<?php

$area2 =  elgg_view('profile/userdetails');
$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $area2,
  'sidebar' => '',
	'title' => 'profile',
	'filter' => '',
));
echo elgg_view_page(elgg_echo('resume:profile'), $body);
?>
