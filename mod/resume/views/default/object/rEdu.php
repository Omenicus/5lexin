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

<div>

    <p><span class="strong">
    <?php echo $vars['entity']->title; ?> </span>
    
    <span class="leftspace">
    <?php if ($page_owner == elgg_get_logged_in_user_entity() && elgg_in_context('resume_edit')) {
    ?>
        <a
                href="<?php echo $site_url; ?>resume/add/academic?id=<?php echo $vars['entity']->getGUID(); ?>"><?php echo elgg_echo('resume:edit'); ?></a>
            <?php
            echo elgg_view("output/confirmlink", array(
                'href' => $site_url . "action/resume/delete?id=" . $vars['entity']->getGUID(),
                'text' => elgg_echo('resume:delete'),
                'confirm' => elgg_echo('resume:delete:element'),
                "class" => "leftspace",
            ));

            // Allow the menu to be extended
            echo elgg_view("editmenu", array('entity' => $vars['entity'],"class" => "leftspace"));
            ?>
    <?php } ?>
    </span>
    </p>
    <p><?php echo $vars['entity']->start_year . " - "; ?><?php echo $vars['entity']->end_year; ?></p>
    <p><?php echo $vars['entity']->level; ?>  <?php echo "， "; ?>
    <?php echo $vars['entity']->field; ?>      <?php echo "， "; ?>
    <?php echo $vars['entity']->grade; ?>
    </p>
    <?php if ( $vars['entity']->activities ) ?>
    <p><?php echo $vars['entity']->description; ?></p>      
    <p><?php echo elgg_echo('resume:academic:activities').': '.$vars['entity']->activities; ?></p>
    <?>
</div><br />

