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
//elgg_load_js('elgg.city.js');
elgg_load_js('elgg.cityselect.js');

elgg_load_js('elgg.city.js');

elgg_load_js('elgg.cityinit.js');
$fields = getJobFields();
if (!$vars['entity']) {
  $new=true;
    foreach ($fields as $ref => $value) {
        $vars['entity']->$ref = '';
    }
}
$site_url = elgg_get_site_url();
?>

<form action="<?php echo $site_url; ?>action/company/savejob" method="post" enctype="multipart/form-data" onsubmit="return check_mandatory_fields($(this));">
  <fieldset>
    <?php
    echo elgg_view('input/securitytoken');
    
    $vars['entity']->comp_name= $vars['company']->name;
    $vars['entity']->comp_description= $vars['company']->description;
    $vars['entity']->comp_industry= $vars['company']->industry;
    foreach ($fields as $ref => $value) {
        echo '<div><label>' . elgg_echo($value['display_name']) . '</label>' . elgg_view('input/' . $value['type'], array('value' => $vars['entity']->$ref,
            'name' => $ref, 'options' => $value['options'], 'class' => $value['class'])) . '</div>';
    }

    echo elgg_view('input/category', array('entity' => $vars['entity']));


    echo elgg_view('input/hidden', array('value' => $vars['entity']->guid, 'name' => 'object_guid'));
    echo elgg_view('input/hidden', array('value' => $vars['user']->guid, 'name' => 'user_guid'));
    echo elgg_view('input/hidden', array('value' => $vars['company']->guid, 'name' => 'company_guid'));
    echo elgg_view('input/submit', array('value' => elgg_echo('company:save'), 'name' => 'save'));
    
    	// add a delete button if editing
    if( !$new )
    {
      $delete_url = $site_url."action/company/deletejob?company_guid={$vars['entity']->guid}";
    	$delete_link = elgg_view('output/confirmlink', array(
    		'href' => $delete_url,
    		'text' => elgg_echo('delete'),
    		'class' => 'elgg-button elgg-button-delete float-alt'
    	));
      echo $delete_link;
      
    }
  	?>
  <fieldset>
</form>
