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

    $action = "resume/reference_add";
}
?>

<div class="contentWrapper">
    <form action="<?php echo $site_url; ?>action/<?php echo $action ?>"
          method="post">

        <p><?php echo elgg_echo('resume:reference:name'); ?><br />
<?php echo elgg_view('input/text', array('name' => 'name', 'value' => $vars['entity']->name)); ?></p>

        <p><?php echo elgg_echo('resume:reference:ocupation'); ?><br />
<?php echo elgg_view('input/text', array('name' => 'ocupation', 'value' => $vars['entity']->ocupation)); ?></p>

        <p><?php echo elgg_echo('resume:reference:jobtitle'); ?><br />
<?php echo elgg_view('input/text', array('name' => 'jobtitle', 'value' => $vars['entity']->jobtitle)); ?></p>

        <p><?php echo elgg_echo('resume:reference:organisation'); ?><br />
<?php echo elgg_view('input/text', array('name' => 'organisation', 'value' => $vars['entity']->organisation)); ?></p>

        <p><?php echo elgg_echo('resume:reference:tel'); ?><br />
<?php echo elgg_view('input/text', array('name' => 'tel', 'value' => $vars['entity']->tel)); ?></p>

<?php echo elgg_view('input/securitytoken'); ?>

        <p><?php echo elgg_view('input/submit', array('value' => elgg_echo('resume:save'))); ?></p>
<?php if (isset($vars['entity'])) {
    echo elgg_view('input/hidden', array('name' => 'id', 'value' => $vars['entity']->getGUID()));
} ?>
    </form>
</div>
