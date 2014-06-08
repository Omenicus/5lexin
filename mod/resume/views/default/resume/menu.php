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
// This script adds the "Resume" option in user's profile menu
$site_url = elgg_get_site_url();
?>

<p class="user_menu_resume"><a
        href="<?php echo $site_url; ?>resume/view/<?php echo $vars['entity']->username; ?>"><?php echo elgg_echo('resume:menu:item'); ?></a>
</p>

