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
/* Object's default view. "Edit" and "Delete" links are added
  based on object's ownership */
$site_url = elgg_get_site_url();
$page_owner = elgg_get_page_owner_entity();
if ($page_owner === false || is_null($page_owner)) {
    $page_owner = elgg_get_logged_in_user_entity();
    elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
}
?>


<div>

    <p><span class="strong"><?php echo elgg_echo('resume:training:type') . ': '; ?></span><?php echo $vars['entity']->training_type; ?></p>
    

    <p><?php echo $vars['entity']->name; ?> </p>
     <p><?php echo $vars['entity']->institution . " - "; ?><?php echo $vars['entity']->enddate; ?></p>
    
    <?php if ($page_owner == elgg_get_logged_in_user_entity() && (elgg_get_context() != "profile" && elgg_get_context() != "profileprint")) {
    ?>
            <p><a
                    href="<?php echo $site_url; ?>mod/resume/training.php?id=<?php echo $vars['entity']->getGUID(); ?>"><?php echo elgg_echo('resume:edit'); ?></a>
            <?php
            echo elgg_view("output/confirmlink", array(
                'href' => $site_url . "action/resume/delete?id=" . $vars['entity']->getGUID(),
                'text' => elgg_echo('resume:delete'),
                'confirm' => elgg_echo('resume:delete:element'),
            ));

            // Allow the menu to be extended
            echo elgg_view("editmenu", array('entity' => $vars['entity']));
            ?></p>



    <?php } ?>

</div><br />

