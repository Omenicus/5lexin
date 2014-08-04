<?php

	$zh = array(
		'thewire_tools' => "The Wire Tools",
		'thewire_tools:no_result' => "没有微博",
		'thewire_tools:login_required' => "你需要登录",
	
		// menu
		'thewire_tools:menu:mentions' => "@我的",
	
		// settings
		'thewire_tools:settings:enable_group' => "Enable the wire for groups",
		'thewire_tools:settings:extend_widgets' => "Extend the wire widget with the option to post update directly from the widget",
		'thewire_tools:settings:extend_activity' => "Extend the activity page with the wire form",
		'thewire_tools:settings:wire_length' => "Set the max length of a Wire post",
	
		// notification
		// mention
		'thewire_tools:notify:mention:subject' => "你在下面的微博中被提到",
		'thewire_tools:notify:mention:message' => "Hi %s,

%s 在微博中提到你.

点击查看你被@的情况:
%s",

		// user settings
		'thewire_tools:usersettings:notify_mention' => "I wish to receive a notification when I'm mentioned in a Wire post",
		
		// group wire
		'thewire_tools:group:title' => "群微博",
		'thewire_tools:groups:tool_option' => "启用群微博",
		'thewire_tools:groups:error:not_enabled' => "已为该群启用群微博",
		
		// search
		'thewire_tools:search:title' => "搜索微博: '%s'",
		'thewire_tools:search:title:no_query' => "搜索微博",
		'thewire_tools:search:no_query' => "请在上面输入要搜索的内容",
				
		// widget
		// thewire_groups
		'widgets:thewire_groups:title' => "群微博",
		'widgets:thewire_groups:description' => "显示发送到群组中的微博",
		
		// index_thewire
		'widgets:index_thewire:title' => "群微博",
		'widgets:index_thewire:description' => "显示最近微博",
		
		// the wire post
		'widgets:thewire_post:title' => "发表微博",
		'widgets:thewire_post:description' => "更新你的状态",
	
		// the wire (default widget)
		'widgets:thewire:owner' => "显示谁的微博",
		'widgets:thewire:filter' => "过滤微博 (可选)",
    'thewire:reply'=>'回复',
    'canaccess:groups'=>'群组可见',
    'canaccess:friends'=>'仅好友可见',
    'canaccess:public'=>'所有人可见',
    'thewire:group'=>'群微博',
			
	);

	add_translation("zh", $zh);
