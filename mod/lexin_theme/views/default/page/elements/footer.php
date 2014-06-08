<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

?>

<ul class="elgg-menu elgg-menu-footer elgg-menu-hz elgg-menu-footer-meta float">
<li class="elgg-menu-item-powered">
<?php
  echo elgg_echo("lexin:powered:desc");
?>
</li>
</ul>
<ul class="elgg-menu elgg-menu-footer elgg-menu-hz elgg-menu-footer-meta float-alt">
<li class="elgg-menu-item-powered">
<?php
  echo elgg_echo("lexin:powered:desc2");
?>
</li>
</ul>
