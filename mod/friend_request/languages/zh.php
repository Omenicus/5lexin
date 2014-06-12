<?php
	$zh = array(
		'friend_request' => "好友请求",
		'friend_request:menu' => "好友请求",
		'friend_request:title' => "%s的好友请求",
	
		'friend_request:new' => "新好友请求",
		
		'friend_request:friend:add:pending' => "好友请求待同意 ",
		
		'friend_request:newfriend:subject' => "%s 想加你为好友!",
		'friend_request:newfriend:body' => "%s 想加你为好友! 他们等待你的批准...你可以登录并审批!

你可以查看发送给你的 好友请求:
%s

请确认你点击下面的连接前已经登录到网站，否则你会被引导到登录页面。

(请不要回复此邮件.)",
		
		// Actions
		// Add request
		'friend_request:add:failure' => "对不起，因为系统原因你不能完成请求。请重试。",
		'friend_request:add:successful' => "你已经申请加 %s 为好友，请等待对方的同意",
		'friend_request:add:exists' => "你已经申请过加 %s 为好友。",
		
		// Approve request
		'friend_request:approve' => "同意",
		'friend_request:approve:subject' => "%s 同意加你为好友",
		'friend_request:approve:message' => "亲爱的 %s,
	
	%s 已经同意了你的好友请求.",
		'friend_request:approve:successful' => "%s 成为好友",
		'friend_request:approve:fail' => "同意加 %s 为好友失败",
	
		// Decline request
		'friend_request:decline' => "拒绝",
		'friend_request:decline:subject' => "%s 拒绝了你的好友请求",
		'friend_request:decline:message' => "亲爱的 %s,

%s 拒绝了你的好友请求。",
		'friend_request:decline:success' => "拒绝了好友请求",
		'friend_request:decline:fail' => "拒绝好友请求失败, 请重试",
		
		// Revoke request
		'friend_request:revoke' => "撤回",
		'friend_request:revoke:success' => "好友请求已撤回",
		'friend_request:revoke:fail' => "撤回好友请求失败, 请重试",
	
		// Views
		// Received
		'friend_request:received:title' => "收到的好友请求",
		'friend_request:received:none' => "没有新请求需要批准",
	
		// Sent
		'friend_request:sent:title' => "发送的好友申请",
		'friend_request:sent:none' => "没有为批准的好友请求",
	);
					
	add_translation("zh", $zh);                                  