
 <?php
    
    $list_params = array(
    	'type' => 'object',
    	'limit' => 4,
    	'full_view' => false,
    	'list_type_toggle' => false,
    	'pagination' => false,
    );

    //grab the latest 4 blog posts
    $list_params['subtype'] = 'job';
    $entities = elgg_list_entities($list_params);

    echo elgg_view_module('featured',  elgg_echo("company:latestjob"), $entities);
    ?>


