<?php
$company = $vars['entity'];

if (!$vars['size']) $size='large';
$company_logo = elgg_view_entity_icon($company,$size);//elgg_view('profile/icon', array('entity' => $company, 'size' => $size));

$fields = getCompanyFields();
//$company_address = getAddressString($company);
elgg_load_css('jquery-ui');
$site_url = elgg_get_site_url();
?>


  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><?php echo elgg_echo('company:tabname:detail');?></a></li>
      <li><a href="<?php echo $site_url;?>comp/ajax/<?php echo $company->guid; ?>/jobs"><?php echo elgg_echo('company:tabname:jobs');?></a></li>
      <li><a href="<?php echo $site_url;?>comp/ajax/<?php echo $company->guid; ?>/members"><?php echo elgg_echo('company:tabname:members');?></a></li>
      <li><a href="<?php echo $site_url;?>comp/ajax/<?php echo $company->guid; ?>/groups"><?php echo elgg_echo('company:tabname:groups');?></a></li>
      
    </ul>
    <div id="tabs-1">
      <div id="company_profile">
        <div style="float:left;width:200px">
          <div class="company_logo"><?php echo $company_logo ?> </div>
        </div>
        <div style="" class="elgg-body pll">
          <?php
                  if ($company->canEdit()) {
                      
                      echo '<div class="button">';
                      echo '<a href="' . $site_url . 'comp/edit/' . $company->guid . '">' . elgg_echo('company:editbutton') . '</a>';
                      echo '</div>';
                  }
            ?>
             <?php
                  foreach ($fields as $ref => $value) {
                      if ($ref!="title" && $company->$ref)//($company->$ref && $value['section'] == 'contacts') 
                      {
                          echo '<div class="company_' . $ref . '"><b >';
                          echo $value['display_name'] . ':</b><span> ';
                          echo elgg_view('output/' . $value['type'], array('value' => $company->$ref));
                          echo '</span></div>';
                      }
                  }
          ?>
                  <div class="search_listing_extras">
              <?php echo elgg_view("elggx_fivestar/elggx_fivestar", array('entity' => $vars['entity'])); ?>
              </div>
              <div>
              <p class="owner_timestamp">
              <?php
                  $owner = get_entity($company->owner_guid);
                  $imprint = elgg_echo('company:addedby') . ' ';
                  //$imprint .= '<a href="' . $owner->getURL() . '">' . $owner->name . '</a> ';
                  $imprint .=elgg_view_entity($owner, array('full_view' => false,size=>'small'));
                  echo $imprint;
              ?>
              </p>
              </div>
        </div>
    </div>
  </div>

</div>
<script type="text/javascript">
$(function() {
  $( "#tabs" ).tabs({
  beforeLoad: function( event, ui ) {
  ui.jqXHR.error(function() {
  ui.panel.html(
  "Couldn't load this tab. We'll try to fix this as soon as possible. " +
  "If this wouldn't be a demo." );
  });
  }
  });
});
</script>
<?php
echo elgg_view_comments($company);
?>