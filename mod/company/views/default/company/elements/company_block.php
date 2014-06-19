<?php
//$user_guid = elgg_extract('owner_guid', $vars);
$subtype ="company";
if (elgg_is_logged_in()) {
  $user=elgg_get_logged_in_user_entity();
  $html = "";
  
  //worked for
  $metadata = elgg_get_metadata(array(
  			'guid' => $user->getGUID(),
         "metadata_name" =>"organisationid",
  			//'limit' => 1,
  		));
  $body='';
  if( $metadata )
  {  
    $company_current=get_entity($metadata[count($metadata)-1]->value);//count($metadata)>1?$metadata[0]->value:$metadata->value);
    $body=  '<a href="'.$company_current->getURL().'">'.$company_current->name.'</a>';
    
  }
  else
  {
    $metadata = elgg_get_metadata(array(
  			'guid' => $user->getGUID(),
         "metadata_name" =>"organisation",
  			//'limit' => 1,
  		));
    if( $metadata )
    {
      $body= $metadata[count($metadata)-1]->value;
    }  
  }
  echo elgg_view_module('aside', elgg_echo("company:workfor"), $body);

$options = array(
	'type' => 'object',
	'subtype' => "rWork",
	'limit' => 20,
  'owner_guids'=>array($user->getGUID()),
	//'wheres' => array()
);

//created
$options = array(
	'type' => 'object',
	'subtype' => "company",
	'limit' => 20,
  'owner_guids'=>array($user->getGUID()),
	//'wheres' => array()
);

$entities=elgg_get_entities($options);
if( $entities )
{

  $list_class = 'elgg-list';
  if (isset($vars['list_class'])) {
  	$list_class = "$list_class {$vars['list_class']}";
  }
  
  $item_class = 'elgg-item';
  if (isset($vars['item_class'])) {
  	$item_class = "$item_class {$vars['item_class']}";
  }
  $html .= "<ul class=\"$list_class\">";
  foreach( $entities as $entity)
  {
    $li = '<a href="'.$entity->getURL().'">'.$entity->name.'</a>';
    $id = "item-{$entity->getType()}-{$entity->id}";
    $html .= "<li id=\"$id\" class=\"$item_classes\">$li</li>";
  }
  $html .= '</ul>';
  echo elgg_view_module('aside', elgg_echo("company:mycompanies"), $html);
}

}

