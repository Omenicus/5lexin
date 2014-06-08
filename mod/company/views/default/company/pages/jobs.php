<?php

global $CONFIG;
$body ="txt";

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
