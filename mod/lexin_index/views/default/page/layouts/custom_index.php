<?php
/**
 * Elgg custom index layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */

$mod_params = array('class' => 'elgg-module-highlight');
elgg_load_css('custom_css');
?>

<div class="custom-index elgg-main elgg-grid clearfix">
	<div class="elgg-col elgg-col-60of100 custom-index-col1">
		<div class="elgg-inner pvm">
<?php
// left column

// blog
if (elgg_is_active_plugin('blog')) {
	echo elgg_view_module('featured',  elgg_echo("custom:blogs"), $vars['blogs'], $mod_params);
}


// a view for plugins to extend
echo elgg_view("index/righthandside");

// a view for plugins to extend
echo elgg_view("index/lefthandside");


?>
		</div>
	</div>
	<div class="elgg-col elgg-col-35of100 custom-index-col2">
		<div class="elgg-inner pvm">
<?php
// right column

// Top box for login or welcome message
if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
} else {
	$top_box = $vars['login'];
}
echo elgg_view_module('featured',  '', $top_box, $mod_params);


echo elgg_view_module('featured',  elgg_echo("custom:comments"), $vars['comments'], $mod_params);

echo elgg_view_module('featured',  elgg_echo("custom:thewires"), $vars['thewires'], $mod_params);

// member
echo elgg_view_module('featured',  elgg_echo("custom:members"), $vars['members'], $mod_params);

// groups
if (elgg_is_active_plugin('groups')) {
	echo elgg_view_module('featured',  elgg_echo("custom:groups"), $vars['groups'], $mod_params);
}


// files
if (elgg_is_active_plugin('file')) {
	echo elgg_view_module('featured',  elgg_echo("custom:files"), $vars['files'], $mod_params);
}
?>
		</div>
	</div>
</div>
