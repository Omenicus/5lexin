<?php 

	$plugin = $vars["entity"];
	
	$noyes_options = array(
    "yes" => elgg_echo("option:yes"),
		"no" => elgg_echo("option:no"),
		
	);
	
	echo "<div>";
	echo elgg_echo("thewire_tools:usersettings:notify_mention");
	echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[notify_mention]", "options_values" => $noyes_options, "value" => $plugin->getUserSetting("notify_mention")));
	echo "</div>";
