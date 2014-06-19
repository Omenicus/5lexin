<?php
$job = $vars['entity'];
$company=get_entity($job->company_guid);
if (!$vars['size']) $size='large';
  $company_logo = elgg_view_entity_icon($company,$size);//elgg_view('profile/icon', array('entity' => $company, 'size' => $size));

$fields = getJobFields();
//$company_address = getAddressString($company);
//elgg_load_css('jquery-ui');
$site_url = elgg_get_site_url();
?>

<div id="company_profile">
  <div style="float:left;width:200px">
    <div class="company_logo"><?php echo $company_logo ?> </div>
  </div>
  <div style="" class="elgg-body pll">
    <?php
            if ($job->canEdit()) {
                
                echo '<div class="button">';
                echo '<a href="' . $site_url . 'comp/editjob/' . $job->guid . '">' . elgg_echo('company:editbutton') . '</a>';
                echo '</div>';
            }
      ?>
       <?php
            foreach ($fields as $ref => $value) {
              if( $value['section']!="comp")
              {
                if ($ref=="title")//($company->$ref && $value['section'] == 'contacts') 
                {   
                    echo '<div class="company_' . $ref . '"><b >';
                    echo $value['display_name'] . ':</b><span> ';
                    echo '<a href="' . $site_url . 'comp/view/' . $company->guid . '">'.elgg_view('output/' . $value['type'], array('value' => $job->$ref)).'</a>';
                    echo '</span></div>';
                }
                else
                if( $job->$ref )
                {
                    echo '<div class="company_' . $ref . '"><b >';
                    echo $value['display_name'] . ':</b><span> ';
                    echo elgg_view('output/' . $value['type'], array('value' => $job->$ref));
                    echo '</span></div>';
                }
              }
                
            }
            foreach ($fields as $ref => $value) {
              if( $value['section']=="comp")
              {
                if( $job->$ref )
                {
                    echo '<div class="company_' . $ref . '"><b >';
                    echo $value['display_name'] . ':</b><span> ';
                    echo elgg_view('output/' . $value['type'], array('value' => $job->$ref));
                    echo '</span></div>';
                }
              }
            }
    ?>
            <div class="search_listing_extras">
        <?php echo elgg_view("elggx_fivestar/elggx_fivestar", array('entity' => $vars['entity'])); ?>
        </div>

        <p class="owner_timestamp">
        <?php
            $owner = get_entity($job->owner_guid);
            $imprint = elgg_echo('company:addedby') . ' ';
            $imprint .= '<a href="' . $owner->getURL() . '">' . $owner->name . '</a> ';
            if (elgg_is_active_plugin('hypeCategories')) {
                $imprint .= elgg_echo('company:incategory') . ' ';
                $imprint .= elgg_view('output/category', array('entity' => $company));
            }
            echo $imprint;
        ?>
        </p>
    
  </div>
</div>
<?php
echo elgg_view_comments($job);
?>