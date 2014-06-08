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
$page_owner = elgg_get_page_owner_entity();
$site_url = elgg_get_site_url();
if ($page_owner === false || is_null($page_owner)) {
    $page_owner = elgg_get_logged_in_user_entity();
    elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
}
?>

<tr>
    <td><?php echo $vars['entity']->language; ?></td>
    <td><?php echo $vars['entity']->read; ?></td>
    <td><?php echo $vars['entity']->written; ?></td>
    <td><?php echo $vars['entity']->spoken; ?></td>
    <?php if ($page_owner == elgg_get_logged_in_user_entity() && (elgg_get_context() != "profile" && elgg_get_context() != "profileprint")) {
    ?>
        <td><a
                href="<?php echo $site_url; ?>mod/resume/lang.php?id=<?php echo $vars['entity']->getGUID(); ?>"><?php echo elgg_echo('resume:edit'); ?></a></td>
        <td><?php
        echo elgg_view("output/confirmlink", array(
            'href' => $site_url . "action/resume/delete?id=" . $vars['entity']->getGUID(),
            'text' => elgg_echo('resume:delete'),
            'confirm' => elgg_echo('resume:delete:element'),
        ));

        // Allow the menu to be extended
        echo elgg_view("editmenu", array('entity' => $vars['entity']));
    ?></td>

    <?php } ?>
</tr>


