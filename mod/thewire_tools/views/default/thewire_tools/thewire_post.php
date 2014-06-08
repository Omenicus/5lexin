<?php 

	if(elgg_is_logged_in() && (elgg_get_plugin_setting("extend_widgets", "thewire_tools") != "no")){	
    //elgg_load_css('bootstrap.css');
    elgg_load_js('jquery.textareahelper.js');
		echo elgg_view_form("thewire/add"); 
	}