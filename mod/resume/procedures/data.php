<?php 
	global $CONFIG;

	$q = sanitize_string(get_input("q"));

	
  //$comps=elgg_get_entities(array('type' => 'object', 'subtype' => 'rSummary', 'owner_guids'=>array($page_owner->getGUID()),count => FALSE));
  $dbprefix = elgg_get_config("dbprefix");
	$limit = (int) get_input("limit", 30);
  $term = sanitize_string(get_input("term"));
  $type_front= sanitize_string(get_input("type"));
  if( $type_front=="organisation" )
  {
    $type="company";
    $query_options = array(
    'type' => 'object',
		'subtype' => $type,
    'metadata_name' => 'created',//name',
    'metadata_value' => true,
    'count' => FALSE,
		"limit" => $limit,
		"joins" => array("LEFT JOIN {$dbprefix}objects_entity oe ON oe.guid = e.guid "), //AND e.type = 'object
		"wheres" => array("(oe.title LIKE '%{$term}%' )"),
		//"order_by" => "u.name asc"
	 );
  }
    
  elseif($type_front=="institution")
  {
    $type="rInstitution";
    $query_options = array(
    'type' => 'object',
		'subtype' => $type,
    'metadata_name' => 'created',//name',
    'metadata_values' => array(true,false),
    'count' => FALSE,
		"limit" => $limit,
		"joins" => array("LEFT JOIN {$dbprefix}objects_entity oe ON oe.guid = e.guid "), //AND e.type = 'object
		"wheres" => array("(oe.title LIKE '%{$term}%' )"),
		//"order_by" => "u.name asc"
	  );
  }
     
	// find existing users
  //$entities=elgg_list_entities_from_metadata($query_options);
  $entities=elgg_get_entities_from_metadata($query_options);
  $result = array();
  foreach($entities as $entity){	
    if( $entity==null || $entity->title==null || $entity->guid==null )    continue;
		$result[] = array("type" => $type, "value" => $entity->title,"content" =>  $entity->guid, "name" => $entity->guid);
	}	
  
	header("Content-Type: application/json");
	echo json_encode(array_values($result));
	
	exit();