<?php
/**
 * Elgg topbar
 * The standard elgg top toolbar
 */

// Elgg logo
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));

$site = elgg_get_site_entity();
$site_name = $site->name;
echo "<div class=\"elgg-module clearfix sitename\">";
echo "<a href=\"".elgg_get_site_url()."\" class=\"\" >".$site_name."</a>";
echo "</div>"; 
// elgg tools menu
// need to echo this empty view for backward compatibility.
echo elgg_view_deprecated("navigation/topbar_tools", array(), "Extend the topbar menus or the page/elements/topbar view directly", 1.8);
