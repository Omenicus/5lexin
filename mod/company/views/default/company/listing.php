<?php
$entity = $vars['entity'];

$title = $entity->title;
$description = elgg_get_excerpt($vars['entity']->description, 100);

$icon = elgg_view_entity_icon($entity,'small');//elgg_view("profile/icon", array('entity' => $entity, 'size' => 'small'));
$address = getAddressString($entity);

if (elgg_is_active_plugin('hypeJobs'))
    $jobcount = elgg_get_entities(array(
                'types' => 'object',
                'subtypes' => 'job',
                'container_guids' => $entity->guid,
                'count' => true
            ));
?>

<div id="<?php echo $entity->guid ?>" class="search_listing">
    <div class="filter_area">
        <div class="search_listing_icon company_logo"><?php echo $icon; ?></div>
        <div class="search_listing_info">       
            <p class="company_title"><a href="<?php echo $entity->getURL() ?>"><?php echo $title; ?></a>
            <span class="item_address company_address"><?php echo $address ?></span>
            </p>       
            <p class="item_description company_description"><?php echo $description; ?></p>
            <?php
            if (elgg_is_active_plugin('hypeJobs') && $jobcount > 0) {
                echo '<p class="company_jobscount right">';
                echo sprintf(elgg_echo('company:jobscount'), $jobcount);
                echo '</p>';
            }
            ?>
        </div>
    </div>
    <div class="search_listing_extras">
        <div class="company_category">
            <?php
            if (elgg_is_active_plugin('hypeCategories')) {
                elgg_view('output/category', array('entity' => $vars['entity']));
            }
            ?>
        </div>
        <div class="right">
<?php echo elgg_view("elggx_fivestar/elggx_fivestar", array('entity' => $vars['entity'])); ?>
        </div>
        <div class="clearfloat"></div>
    </div>
</div>