<script type="text/javascript">
    function check_mandatory_fields(form_container) {
        var check = true;
        $('.mandatory', form_container).each(function(){
            if ($(this).val() == '') {
                check = false;
            }
        });
        if (!check) alert('<?php echo elgg_echo('company:mandatoryfieldmissing') ?>');
        return check;
    }
</script>

<?php
$fields = getCompanyBranchFields();
$parent_guid = $vars['parent_guid'];
$site_url = elgg_get_site_url();
if (!$vars['entity']) {
    foreach ($fields as $ref => $value) {
        $vars['entity']->$ref = '';
    }
    $current_category = NULL;
} else {
    if (elgg_is_active_plugin('hypeCategories')) {
        $current_category = get_item_categories($vars['entity']->guid);
    } else {
        $current_category = NULL;
    }
}
?>

<form action="<?php echo $site_url; ?>action/company/savebranch" method="post" enctype="multipart/form-data" onsubmit="return check_mandatory_fields($(this));">
    <?php
    echo elgg_view('input/securitytoken');
    //echo '<p><label>' . elgg_echo('company:icon') . '</label>' . elgg_view('input/file', array('name' => 'companyicon')) . '</p>';
    foreach ($fields as $ref => $value) {
        echo '<div><label>' . elgg_echo($value['display_name']) . '</label>' . elgg_view('input/' . $value['type'], array('value' => $vars['entity']->$ref,
            'name' => $ref, 'options' => $value['options'], 'class' => $value['class'])) . '</div>';
    }

    if (in_array('branchcompany', string_to_tag_array(elgg_get_plugin_setting('allowed_object_types', 'hypeCategories')))) {
        echo elgg_view('hypeCategories/forms/assign', array('current_category' => $current_category)) . '<br>';
    }


    echo '<p><label>' . elgg_echo('company:access') . '</label>' . elgg_view('input/access', array('name' => 'access_id', 'value' => $vars['entity']->access_id)) . '</p>';
    echo elgg_view('input/hidden', array('value' => $vars['entity']->guid, 'name' => 'object_guid'));
    echo elgg_view('input/hidden', array('value' => $vars['user']->guid, 'name' => 'user_guid'));
    echo elgg_view('input/hidden', array('value' => $parent_guid, 'name' => 'parent_guid'));
    echo elgg_view('input/submit', array('value' => 'save', 'name' => 'save'));
    ?>
</form>