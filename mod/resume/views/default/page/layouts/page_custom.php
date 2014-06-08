<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is added to the sidebar
 * @uses $vars['nav']     Optional override of the page nav (default: breadcrumbs)
 * @uses $vars['header']  Optional override for the header
 * @uses $vars['footer']  Optional footer
 * @uses $vars['class']   Additional class to apply to layout
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

?>

<div class="<?php echo $class; ?>">
	<div class="elgg-main elgg-body custom">
		<?php
			echo elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));
			
			echo elgg_view('page/layouts/elements/header', $vars);
			
			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			if (isset($vars['content'])) {
				echo $vars['content'];
			}
			
			echo elgg_view('page/layouts/elements/footer', $vars);
		?>
	</div>
	<div class="elgg-sidebar">
		<?php

        /**
         * Elgg sidebar contents
         *
         * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
         */
        
        echo elgg_view_menu('extras', array(
        	'sort_by' => 'priority',
        	'class' => 'elgg-menu-hz',
        ));
        
        if (!isset($vars['owner_block'])||(!isset($vars['owner_block'])&&$vars['owner_block']))  echo elgg_view('page/elements/owner_block', $vars);
        
        echo elgg_view_menu('page', array('sort_by' => 'name'));
        
        // optional 'sidebar' parameter
        if (isset($vars['sidebar'])) {
        	echo $vars['sidebar'];
        }
        
        // @todo deprecated so remove in Elgg 2.0
        // optional second parameter of elgg_view_layout
        if (isset($vars['area2'])) {
        	echo $vars['area2'];
        }
        
        // @todo deprecated so remove in Elgg 2.0
        // optional third parameter of elgg_view_layout
        if (isset($vars['area3'])) {
        	echo $vars['area3'];
        }
		?>
	</div>
</div>
