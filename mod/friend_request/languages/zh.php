<?php
	$english = array(
		'friend_request' => "好友请求",
		'friend_request:menu' => "好友请求",
		'friend_request:title' => "加 %s 的好友请求",
	
		'friend_request:new' => "新好友请求",
		
		'friend_request:friend:add:pending' => "未被接受的好友请求",
		
		'friend_request:newfriend:subject' => "%s 想加你为好友!",
		'friend_request:newfriend:body' => "%s 想加你为好友! 他们等待你的批准...你可以登录并审批!

你可以查看发送给你的 好友请求:
%s

请确认你点击下面的连接前已经登录到网站，否则你会被引导到登录页面。

(请不要回复此邮件.)",
		
		// Actions
		// Add request
		'friend_request:add:failure' => "Sorry, because of a system error we were unable to complete your request. Please try again.",
		'friend_request:add:successful' => "You have requested to be friends with %s. They must approve your request before they will show on your friends list.",
		'friend_request:add:exists' => "You've already requested to be friends with %s.",
		
		// Approve request
		'friend_request:approve' => "同意",
		'friend_request:approve:subject' => "%s has accepted your friend request",
		'friend_request:approve:message' => "Dear %s,
	
	%s has accepted your request to become a friend.",
		'friend_request:approve:successful' => "%s is now a friend",
		'friend_request:approve:fail' => "Error while creating friend relation with %s",
	
		// Decline request
		'friend_request:decline' => "拒绝",
		'friend_request:decline:subject' => "%s has declined your friend request",
		'friend_request:decline:message' => "Dear %s,

%s has declined your request to become a friend.",
		'friend_request:decline:success' => "Friend request successfully declined",
		'friend_request:decline:fail' => "Error while declining Friend request, please try again",
		
		// Revoke request
		'friend_request:revoke' => "撤回",
		'friend_request:revoke:success' => "Friend request successfully revoked",
		'friend_request:revoke:fail' => "Error while revoking Friend request, please try again",
	
		// Views
		// Received
		'friend_request:received:title' => "收到的好友请求",
		'friend_request:received:none' => "没有新请求需要批准",
	
		// Sent
		'friend_request:sent:title' => "发送的好友申请",
		'friend_request:sent:none' => "没有为批准的好友请求",
	);
					
	add_translation("en", $english);