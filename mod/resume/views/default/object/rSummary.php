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
  <?php 
    echo elgg_view('output/longtext', array('value' => $vars['entity']->description));  
  ?> 
  
</div>

