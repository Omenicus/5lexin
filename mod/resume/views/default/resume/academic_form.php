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
$site_url = elgg_get_site_url();
if (isset($vars['entity'])) {

    $action = "resume/edit";
} else {

    $action = "resume/academic_add";
}
elgg_load_js('resumeautocomplete');  
?>

<div class="contentWrapper">
    <form action="<?php echo $site_url; ?>action/<?php echo $action ?>"
          method="post">
        <p><?php echo elgg_echo('resume:academic:institution'); ?>

            <?php echo elgg_view('input/text', array('name' => 'title','id' => 'title', 'datatype' => 'institution', 'value' => $vars['entity']->title,"class"=>"elgg-input elgg-input-autocomplete")); ?></p>

        <p><?php echo elgg_echo('resume:academic:level'); ?>   </br>
            <?php echo elgg_view('input/dropdown', array('name' => 'level', 'value' => $vars['entity']->level,'options_values' => array("本科"=>"本科","硕士"=>"硕士","博士"=>"博士","高中"=>"高中","初中"=>"初中","小学"=>"小学"))); ?></p>
        <p><?php echo elgg_echo('resume:academic:attend'); ?>   </br>
            <?php  
              $year=array();
              for($theyear=2015;$theyear>1900;$theyear--)    $year[$theyear]=$theyear;
              echo elgg_view('input/dropdown', array(
            	'name' => 'start_year',
            	'options_values' => $year,
            	'value' => $vars['entity']->start_year,
              )); 
              echo " - ";
              echo elgg_view('input/dropdown', array(
            	'name' => 'end_year',
            	'options_values' => $year,
            	'value' => $vars['entity']->end_year,
              ));     
            ?></p>
        <p><?php echo elgg_echo('resume:academic:field'); ?>
            <?php echo elgg_view('input/text', array('name' => 'field', 'value' => $vars['entity']->field)); ?></p>
        <p><?php echo elgg_echo('resume:academic:grade'); ?>
            <?php echo elgg_view('input/dropdown', array('name' => 'grade', 'value' => $vars['entity']->grade,'options_values' => array("优"=>"优","良"=>"良","及格"=>"及格","不及格"=>"不及格"))); ?></p>
        <p><?php echo elgg_echo('resume:academic:description'); ?>
            <?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $vars['entity']->description)); ?></p>
        <p><?php echo elgg_echo('resume:academic:activities'); ?>
            <?php echo elgg_view('input/longtext', array('name' => 'activities', 'value' => $vars['entity']->activities)); ?></p>
            

       

        
<?php echo elgg_view('input/securitytoken'); ?>

        <p><?php echo elgg_view('input/submit', array('value' => elgg_echo('resume:save'))); ?></p>
        <?php if (isset($vars['entity'])) {
                echo elgg_view('input/hidden', array('name' => 'id', 'value' => $vars['entity']->getGUID()));
            } ?>
    </form>
</div>
