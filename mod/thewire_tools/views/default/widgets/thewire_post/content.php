<?php 

if(elgg_is_logged_in()){
  //elgg_load_css('bootstrap.css');
  elgg_load_js('jquery.textareahelper.js');
	echo elgg_view_form("thewire/add");
} else {
	echo elgg_echo("thewire_tools:login_required");
}
