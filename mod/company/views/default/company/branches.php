<?php
$company = $vars['entity'];
$company_logo = elgg_view('profile/icon', array('entity' => $company, 'size' => 'medium'));
$site_url = elgg_get_site_url();

$branches = elgg_get_entities(array(
    'type' => 'object',
    'subtype' => 'branchcompany',
    'container_guid' => $company->guid,
    'limit' => 9999
        ));
elgg_set_context('companycontainer');
echo elgg_view_entity_list($branches);

if ($company->canEdit()) {
    ?>
    <a id="getaddbranchform" class="button" href="javascript:void(0)"><?php echo elgg_echo('company:addbranch') ?></a>
    <?php
}
?>

<script type="text/javascript">
    $(document).ready(function(){
        var modalWrapper = $('#modalWrapper');
        var modalContent = $('#modalContent');
        var add_button = $('#getaddbranchform');
        var edit_button = $('#editbranchform');
        
        add_button.click(function(){
            var ajax_loader = '<div class="hj-ajax-loader hj-loader-circle"></div>';
            modalContent.html(ajax_loader);
            modalWrapper.dialog({modal:true});
            $.ajax ({
                url: '<?php echo elgg_add_action_tokens_to_url($site_url . 'action/company/branchform') ?>',
                type: 'POST',
                dataType: 'html',
                data: {
                    action_type: 'new',
                    parent_guid: '<?php echo $company->guid ?>'
                },
                success: function(data) {
                    modalContent.html(data);
                }
            });
        });
        edit_button.each(function(){
            $(this).click(function(){
                var ajax_loader = '<div class="hj-ajax-loader hj-loader-circle"></div>';
                modalContent.html(ajax_loader);
                modalWrapper.dialog({modal:true});
                $.ajax ({
                    url: '<?php echo elgg_add_action_tokens_to_url($site_url . 'action/company/branchform') ?>',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        action_type: 'edit',
                        parent_guid: '<?php echo $company->guid ?>',
                        entity_guid: $(this).attr('branchid')
                    },
                    success: function(data) {
                        modalContent.html(data);
                    }
                });
            });
        })
    });
</script>

<div id="modalWrapper" style="display:none">
    <div id="modalContent">
    </div>
</div>
