<?php 
	global $CONFIG;

	$q = sanitize_string(get_input("q"));

	
  //$comps=elgg_get_entities(array('type' => 'object', 'subtype' => 'rSummary', 'owner_guids'=>array($page_owner->getGUID()),count => FALSE));
  $dbprefix = elgg_get_config("dbprefix");
	$limit = (int) get_input("limit", 50);
  $term = sanitize_string(get_input("term"));
  $type_front= sanitize_string(get_input("type"));
  if( $type_front=="organisation" )
    $type="company";
  elseif($type_front=="institution")
    $type="rInstitution";
  
	// find existing users
	$query_options = array(
    'type' => 'object',
		'subtype' => $type,
    'metadata_name' => 'name',
    'metadata_value' => $organisation,
    'count' => FALSE,
		//"limit" => $limit,
		//"joins" => array("JOIN {$dbprefix}users_entity u ON e.guid = u.guid"),
		//"wheres" => array("(u.name LIKE '%{$term}%' )"),
		//"order_by" => "u.name asc"
	);

  //$entities=elgg_list_entities_from_metadata($query_options);
  $entities=elgg_get_entities_from_metadata($query_options);
  $result = array();
  foreach($entities as $entity){	
		$result[] = array("type" => $type, "value" => $entity->name,"content" =>  $entity->id, "name" => $entity->id);
	}	
  
	header("Content-Type: application/json");
	echo json_encode(array_values($result));
	
	exit();