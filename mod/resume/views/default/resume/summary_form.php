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

    $action = "resume/summary_add";
}
$site_url = elgg_get_site_url();
?>

<div class="contentWrapper">
    <form action="<?php echo $site_url; ?>action/<?php echo $action ?>"
          method="post">
        <p><?php echo elgg_echo('resume:summary:name'); ?><br />
            <?php echo elgg_view('input/text', array('name' => 'user_name', 'value' => elgg_get_logged_in_user_entity()->name)); ?></p>

        <p><?php echo elgg_echo('resume:summary:description'); ?><br />
            <?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $vars['entity']->description)); ?></p>

            <?php echo elgg_view('input/securitytoken'); ?>

        <p><?php echo elgg_view('input/submit', array('value' => elgg_echo('resume:save'))); ?></p>
        <?php if (isset($vars['entity'])) {
                echo elgg_view('input/hidden', array('name' => 'id', 'value' => $vars['entity']->getGUID()));
            } ?>
    </form>
</div>
