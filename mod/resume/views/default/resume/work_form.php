<?php
/**
 * Resume
 *
 * @package Resume
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Pablo Borbón @ Consultora Nivel7 Ltda.
 * @copyright Consultora Nivel7 Ltda.
 * @link http://www.nivel7.net
 */
// Decide wich action to use based on if its and edit or add use case.
if (isset($vars['entity'])) {

    $action = "resume/edit";
} else {

    $action = "resume/work_add";
}
$site_url = elgg_get_site_url();

  //elgg_register_js('jquery.autocomplete', '/vendors/jquery/jquery.autocomplete.min.js', 'head');
  //elgg_load_js('jquery.autocomplete');
  //elgg_load_js('elgg.autocomplete');
  //elgg_load_js('jquery.ui.autocomplete.html');
  
  //$init_js = elgg_get_simplecache_url('js', 'resume/init');
  //elgg_register_js('resumeautocomplete', $init_js);
  //elgg_register_js('resumeautocomplete', 'resume/init');
  elgg_load_js('resumeautocomplete');  
  
?>

<div class="contentWrapper">
    <form action="<?php echo $site_url; ?>action/<?php echo $action ?>"
          method="post">
        <p><?php echo elgg_echo('resume:work:organisation'); ?><br />
            <?php echo elgg_view('input/text', array('name' => 'organisation','id' => 'organisation', 'value' => $vars['entity']->organisation,'class'=>"elgg-input elgg-input-autocomplete")); ?></p>

        <p><?php echo elgg_echo('resume:work:time'); ?><br />
        <?php  
              $year=array();
              for($theyear=2015;$theyear>1900;$theyear--)    $year[$theyear]=$theyear;
              echo elgg_view('input/dropdown', array(
            	'name' => 'startyear',
            	'options_values' => $year,
            	'value' => $vars['entity']->startyear,
              )); 
              echo '年';
              $month=array();
              for($themonth=12;$themonth>1;$themonth--)    $month[$themonth]=$themonth;
              echo elgg_view('input/dropdown', array(
            	'name' => 'startmonth',
            	'options_values' => $month,
            	'value' => $vars['entity']->startmonth,
              )); 
               echo '月 - ';
              $year=array();
              $year['now']='至今';
              for($theyear=2015;$theyear>1900;$theyear--)    $year[$theyear]=$theyear;
              echo elgg_view('input/dropdown', array(
            	'name' => 'endyear',
            	'options_values' => $year,
            	'value' => $vars['entity']->endyear,
              ));
               echo '年';
              echo elgg_view('input/dropdown', array(
            	'name' => 'endmonth',
            	'options_values' => $month,
            	'value' => $vars['entity']->endmonth,
              ));  
               echo '月';    
            ?>
        </p>

        <p><?php echo elgg_echo('resume:work:jobtitle'); ?><br />
            <?php echo elgg_view('input/text', array('name' => 'title', 'value' => $vars['entity']->title)); ?></p>

        <p><?php echo elgg_echo('resume:work:description'); ?><br />
            <?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $vars['entity']->description)); ?></p>

<?php echo elgg_view('input/securitytoken'); ?>

        <p><?php echo elgg_view('input/submit', array('value' => elgg_echo('resume:save'))); ?></p>
        <?php if (isset($vars['entity'])) {
                echo elgg_view('input/hidden', array('name' => 'id', 'value' => $vars['entity']->getGUID()));
            } ?>
    </form>
</div>
