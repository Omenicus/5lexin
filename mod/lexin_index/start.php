<?php
/**
 * Elgg demo custom index page plugin
 * 
 */

elgg_register_event_handler('init', 'system', 'lexin_index_init');

function lexin_index_init() {

	// Extend system CSS with our own styles
	//elgg_extend_view('css/elgg', 'lexin_index/css');
  elgg_register_simplecache_view('css/lexin_index/css');
	elgg_register_css('lexin_index_css', elgg_get_simplecache_url('css', 'lexin_index/css'));

	// Replace the default index page
	elgg_register_page_handler('', 'lexin_index');
}

/**
 * Serve the front page
 * 
 * @return bool Whether the page was sent.
 */
function lexin_index() {
	if (!include_once(dirname(__FILE__) . "/lexin_index.php")) {
		return false;
	}

	return true;
}
