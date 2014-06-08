<?php

global $CONFIG;
$body ="txt";
$body = elgg_list_entities_from_relationship(array(
	'relationship' => 'member',
	'relationship_guid' => get_input('company_guid'),//$vars['entity']->guid,
	//'inverse_relationship' => true,
	'type' => 'user',
	'limit' => false,//$limit,
	'pagination' => true,
	'list_type' => 'list',//gallery',
	'gallery_class' => 'elgg-list-entity',
  'no_results' => elgg_echo('company:members:none'),
));

echo $body; 
exit;
?>
