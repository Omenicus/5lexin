<?php

global $CONFIG;
$body ="txt";
$query_options = array(
    'type' => 'group',

    'metadata_name' => 'organization',
    'metadata_value' => get_entity(get_input('company_guid'))->name,
    'count' => FALSE,
		//"limit" => $limit,
		//"joins" => array("JOIN {$dbprefix}users_entity u ON e.guid = u.guid"),
		//"wheres" => array("(u.name LIKE '%{$term}%' )"),
		//"order_by" => "u.name asc"
	);

$entities=elgg_list_entities_from_metadata($query_options);
echo $entities;
exit;
//echo $entities; 
//$entities=elgg_get_entities_from_metadata($query_options);
$entities=elgg_get_entities(array(
    'types' => 'object',
    'subtypes' => 'job',
    'container_guids' => get_input('company_guid'),
    'limit' => 9999,
    'count' => FALSE,
));
$body="";
if( $entities )
{
  foreach($entities as $entity){
    echo elgg_view_entity($entity);
  }	 
}
else
{
  echo  elgg_echo("company:nojobs");
}


exit;
?>
