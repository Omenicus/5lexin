<?php
$entity = $vars['entity'];

$title = $entity->title;
$description = elgg_get_excerpt($vars['entity']->description, 100);

$company=get_entity($entity->company_guid);
$icon = elgg_view_entity_icon($company,'small');//elgg_view("profile/icon", array('entity' => $entity, 'size' => 'small'));

?>

<div id="<?php echo $entity->guid ?>" class="search_listing">
    <div class="filter_area">
        

        <div class="search_listing_icon company_logo"><?php echo $icon; ?></div>
        <div class="search_listing_info">
        
            <p class="company_title">
            <a href="<?php echo $entity->getURL() ?>"><?php echo $title; ?></a>
            <a href="<?php echo $company->getURL() ?>"><?php echo " -".$company->title; ?></a>
            
            </p>
        
            <p class="item_description company_description"><?php echo $description; ?></p>
            
           
        </div>

    </div>
    
</div>