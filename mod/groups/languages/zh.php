<?php
/**
 * Elgg groups plugin language pack
 *
 * @package ElggGroups
 */

return array(

	/**
	 * Menu items and titles
	 */
	'groups' => "群组",
	'groups:owned' => "拥有的群组",
	'groups:owned:user' => '%s拥有的群组',
	'groups:yours' => "我加入的群组",
	'groups:user' => "%s加入的群组",
	'groups:all' => "所有群组",
	'groups:add' => "创建一个群",
	'groups:edit' => "编辑",
	'groups:delete' => '删除',
	'groups:membershiprequests' => '管理加入申请',
	'groups:membershiprequests:pending' => '管理加入申请 (%s)',
	'groups:invitations' => '群邀请',
	'groups:invitations:pending' => '群邀请(%s)',
  

	'groups:icon' => '群图标(空白表示不改变)',
	'groups:name' => '群名称',
	'groups:username' => '群短名称(显示为URL, 由数字字母组成)',
	'groups:description' => '描述',
	'groups:briefdescription' => '简介',
	'groups:interests' => '标签',
	'groups:website' => '网站',
	'groups:members' => '群成员',
	'groups:my_status' => '我的状态',
	'groups:my_status:group_owner' => '你拥有该群',
	'groups:my_status:group_member' => '你是该群成员',
	'groups:subscribed' => '群通知开启',
	'groups:unsubscribed' => '群通知关闭',

	'groups:members:title' => '群组 %s 的成员',
	'groups:members:more' => "所有成员",
	'groups:membership' => "加群权限",
	'groups:content_access_mode' => "群内容访问",
	'groups:content_access_mode:warning' => "警告：改变这个设置不会改变已有内容的访问权限",
	'groups:content_access_mode:unrestricted' => "无限制 - 由群内容决定",
	'groups:content_access_mode:membersonly' => "仅允许成员 - 非群成员不能访问群内容",
	'groups:access' => "访问权限",
	'groups:owner' => "所有者",
	'groups:owner:warning' => "警告: 如果改变该值，你将不再是该群的所有者。",
	'groups:widget:num_display' => '显示的群数量',
	'groups:widget:membership' => '加入的群',
	'groups:widgets:description' => '在主页现实你加入的群',

	'groups:widget:group_activity:title' => '群动态',
	'groups:widget:group_activity:description' => '现实群的动态',
	'groups:widget:group_activity:edit:select' => '选择群',
	'groups:widget:group_activity:content:noactivity' => '该群没有动态',
	'groups:widget:group_activity:content:noselect' => '选择一个群',

	'groups:noaccess' => '不能访问',
	'groups:permissions:error' => '你没有访问权限',
	'groups:ingroup' => '在群里',
	'groups:cantcreate' => '你不能创建群。只有管理员可以创建。',
	'groups:cantedit' => '不能编辑',
	'groups:saved' => '已保存',
	'groups:featured' => '推荐群',
	'groups:makeunfeatured' => '取消推荐',
	'groups:makefeatured' => '设为推荐',
	'groups:featuredon' => '%s 现在是一个推荐群',
	'groups:unfeatured' => '%s 被取消推荐',
	'groups:featured_error' => '无效的群',
	'groups:joinrequest' => '申请加入',
	'groups:join' => '加入群',
	'groups:leave' => '离开群',
	'groups:invite' => '邀请好友',
	'groups:invite:title' => '邀请好友加入群',
	'groups:inviteto' => "邀请好友加入'%s'",
	'groups:nofriends' => "你没有未被邀请加入该群的好友了",
	'groups:nofriendsatall' => '你没有好友可以邀请!',
	'groups:viagroups' => "通过群",
	'groups:group' => "群组",
	'groups:search:tags' => "标签",
	'groups:search:title' => "搜索标签含 '%s' 的群",
	'groups:search:none' => "未找到群",
	'groups:search_in_group' => "在群内搜索",
	'groups:acl' => "群组",

	'discussion:topic:notify:summary' => '新的讨论主题 %s ',
	'discussion:topic:notify:subject' => '新讨论主题: %s',
	'discussion:topic:notify:body' =>
'%s 在%s创建了新的讨论主题:

标题: %s

%s

查看并回复:
%s
',

	'discussion:reply:notify:summary' => '新的回复: %s',
	'discussion:reply:notify:subject' => '新的回复 %s',
	'discussion:reply:notify:body' =>
'%s 回复了主题 %s 来自群 %s:

%s

查看并回复:
%s
',

	'groups:activity' => '群动态',
	'groups:enableactivity' => '启用群动态',
	'groups:activity:none' => '还没有群动态',

	'groups:notfound' => '没有找到',
	'groups:notfound:details' => '群不存在或你没有权限访问该群',

	'groups:requests:none' => '没有申请.',

	'groups:invitations:none' => '没有邀请.',

	'item:object:groupforumtopic' => '讨论主题',
	'item:object:discussion_reply' => '回复',

	'groupforumtopic:new' => '新建讨论',

	'groups:count' => '创建群',
	'groups:open' => '开放的群',
	'groups:closed' => '封闭的群',
	'groups:member' => '成员',
	'groups:searchtag' => '按标签搜索群',

	'groups:more' => '更多',
	'groups:none' => '没有',

	/**
	 * Access
	 */
	'groups:access:private' => '关闭 - 成员必须被邀请',
	'groups:access:public' => '开放 - 任何人可以加入',
	'groups:access:group' => '仅群成员',
	'groups:closedgroup' => '该群是封闭的.',
	'groups:closedgroup:request' => '要请求加入, 点击 "申请加入" ',
	'groups:closedgroup:membersonly' => '该群是封闭的并且只有成员可以访问',
	'groups:opengroup:membersonly' => '该群只有成员可以访问',
	'groups:opengroup:membersonly:join' => '要加入, 点击 "加入群"',
	'groups:visibility' => '谁能看到该群?',

	/**
	 * Group tools
	 */
	'groups:enableforum' => '启用群论坛',
	'groups:lastupdated' => '最后更新于 %s 来自 %s',
	'groups:lastcomment' => '最后评论与 %s 来自 %s',

	/**
	 * Group discussion
	 */
	'discussion' => '讨论',
	'discussion:add' => '新建主题',
	'discussion:latest' => '最新讨论',
	'discussion:group' => '群讨论',
	'discussion:none' => '没有讨论',
  'thewire:none' => '没有微博',
	'discussion:reply:title' => '%s回复',

	'discussion:topic:created' => '讨论主题已创建',
	'discussion:topic:updated' => '讨论主题已更新',
	'discussion:topic:deleted' => '讨论主题已删除',

	'discussion:topic:notfound' => '未找到主题',
	'discussion:error:notsaved' => '不能保存',
	'discussion:error:missing' => '标题和内容都需要填写',
	'discussion:error:permissions' => '你没有权限进行该操作',
	'discussion:error:notdeleted' => '不能删除该讨论',

	'discussion:reply:edit' => '编辑',
	'discussion:reply:deleted' => '回复已删除',
	'discussion:reply:error:notfound' => '未找到回复',
	'discussion:reply:error:notdeleted' => '不能删除该回复',

	'admin:groups' => 'Groups',
	'admin:groups:upgrades:2013100401' => 'Discussion reply upgrade',
	'discussion:upgrade:replies:status' => 'There are <b>%s</b> discussion replies that need to be upgraded.',
	'discussion:upgrade:replies:warning' => '<b>Warning:</b> on a large site this upgrade may take a significantly long time!',
	'discussion:upgrade:replies:success_count' => 'Discussion replies upgraded:',
	'discussion:upgrade:replies:error_count' => 'Errors:',
	'discussion:upgrade:replies:river_update_failed' => 'Failed to update the river entry for discussion reply id %s',
	'discussion:upgrade:replies:timestamp_update_failed' => 'Failed to update the timestamp for discussion reply id %s',
	'discussion:upgrade:replies:create_failed' => 'Failed to convert discussion reply id %s to an entity.',
	'discussion:upgrade:replies:finished' => 'Upgrade finished',

	'reply:this' => '回复',

	'group:replies' => '回复',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => '论坛',
	'groups:addtopic' => '新建主题',
	'groups:forumlatest' => '最新主题',
	'groups:latestdiscussion' => '最新主题',
	'groupspost:success' => '回复成功',
	'groupspost:failure' => '回复失败',
	'groups:alldiscussion' => '最新主题',
	'groups:edittopic' => '编辑主题',
	'groups:topicmessage' => '主题消息',
	'groups:topicstatus' => '主题状态',
	'groups:reply' => '发表留言',
	'groups:topic' => '主题',
	'groups:posts' => '帖子',
	'groups:lastperson' => '最近',
	'groups:when' => '时间',
	'grouptopic:notcreated' => '没有主题',
	'groups:topicclosed' => '主题已关闭',
	'grouptopic:created' => '主题以创建',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => '主题已关闭',
	'groups:topiccloseddesc' => '主题已关闭,不能发表留言.',
	'grouptopic:error' => '主题创建失败，重新尝试或联系网站管理员',
	'groups:forumpost:edited' => '已成功编辑',
	'groups:forumpost:error' => '编辑失败',

	'groups:privategroup' => '该群是封闭群. 需申请成员资格.',
	'groups:notitle' => '没有标题',
	'groups:cantjoin' => '不能加入群',
	'groups:cantleave' => '不能离开群',
	'groups:removeuser' => '删除用户',
	'groups:cantremove' => '不能删除用户',
	'groups:removed' => '已从群里删除 %s ',
	'groups:addedtogroup' => '已成功将用户加入群',
	'groups:joinrequestnotmade' => '不能申请加入群',
	'groups:joinrequestmade' => '已申请入群',
	'groups:joined' => '成功加入群!',
	'groups:left' => '成功离开群',
	'groups:notowner' => '对不起，你不是该群管理员.',
	'groups:notmember' => '对不起，你不是该群成员',
	'groups:alreadymember' => '你已经是该群成员',
	'groups:userinvited' => '已邀请用户',
	'groups:usernotinvited' => '用户不恩能够被邀请',
	'groups:useralreadyinvited' => '用户已被邀请',
	'groups:invite:subject' => '%s 你被邀请加入群 %s!',
	'groups:updated' => '最近回复来自 %s %s',
	'groups:started' => '开始于 %s',
	'groups:joinrequest:remove:check' => '确认删除该加入申请?',
	'groups:invite:remove:check' => '确认删除该邀请?',
	'groups:invite:body' => 
'Hi %s,

%s 邀请你加入群 "%s" . 点击下面的链接查看详情:

%s',

	'groups:welcome:subject' => '欢迎加入群 %s !',
	'groups:welcome:body' => 
'Hi %s!

你已经是群 "%s" 的成员! 点击该链接发表主题!

%s',

	'groups:request:subject' => '%s 申请加入 %s',
	'groups:request:body' => 
'Hi %s,

%s 申请加入群 "%s" . 点击该链接查看他们的首页:

%s

或点击该链接查看群的加入申请:

%s',

	/**
	 * Forum river items
	 */

	'river:create:group:default' => '%s 创建群 %s',
	'river:join:group:default' => '%s 加入群 %s',
	'river:create:object:groupforumtopic' => '%s 创建了新主题 %s',
	'river:reply:object:groupforumtopic' => '%s 回复了主题 %s',

	'groups:nowidgets' => '该群没有小工具',


	'groups:widgets:members:title' => 'Group members',
	'groups:widgets:members:description' => 'List the members of a group.',
	'groups:widgets:members:label:displaynum' => 'List the members of a group.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => 'Objects in group',
	'groups:widgets:entities:description' => 'List the objects saved in this group',
	'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Forum topic successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) groups?',
	'groups:whocancreate' => 'Who can create new groups?',

	/**
	 * Action messages
	 */
	'group:deleted' => '群和内容被删除',
	'group:notdeleted' => '群不能被删除',

	'group:notfound' => '不能找到群',
	'grouppost:deleted' => '群主题被删除',
	'grouppost:notdeleted' => '群主题不能被删除',
	'groupstopic:deleted' => '群主题被删除',
	'groupstopic:notdeleted' => '群主题不能被删除',
	'grouptopic:blank' => '没有主题',
	'grouptopic:notfound' => '没有找到主题',
	'grouppost:nopost' => '空的主题',
	'groups:deletewarning' => '确认删除群? 没有后悔药的!',

	'groups:invitekilled' => '邀请已删除.',
	'groups:joinrequestkilled' => '是很年轻已删除.',

	/**
	 * ecml
	 */
	'groups:ecml:discussion' => '群主题',
	'groups:ecml:groupprofile' => '群首页',   
  
);
