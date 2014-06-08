<?php
/**
 * Bookmarks English language file
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "书签",
	'bookmarks:add' => "添加书签",
	'bookmarks:edit' => "编辑书签",
	'bookmarks:owner' => "%s的书签",
	'bookmarks:friends' => "朋友的",
	'bookmarks:everyone' => "所有书签",
	'bookmarks:this' => "将本页加为书签",
	'bookmarks:this:group' => "添加书签到%s",
	'bookmarks:bookmarklet' => "获得书签小程序",
	'bookmarks:bookmarklet:group' => "获得群的书签小程序",
	'bookmarks:inbox' => "书签收件箱",
	'bookmarks:morebookmarks' => "更多书签",
	'bookmarks:more' => "更多",
	'bookmarks:with' => "分享给",
	'bookmarks:new' => "一个新书签",
	'bookmarks:address' => "书签地址",
	'bookmarks:none' => '没有书签',

	'bookmarks:notification' =>
'%s 添加了新书签:

%s - %s
%s

查看并评论这个书签:
%s
',

	'bookmarks:delete:confirm' => "确认删除?",

	'bookmarks:numbertodisplay' => '现实的数千个数',

	'bookmarks:shared' => "加书签",
	'bookmarks:visit' => "浏览",
	'bookmarks:recent' => "最近书签",

	'river:create:object:bookmarks' => '%s 收藏 %s 到书签',
	'river:comment:object:bookmarks' => '%s 评论了书签%s',
	'bookmarks:river:annotate' => '此书签有评论',
	'bookmarks:river:item' => '条',

	'item:object:bookmarks' => '书签',

	'bookmarks:group' => '群书签',
	'bookmarks:enablebookmarks' => '开启群书签',
	'bookmarks:nogroup' => '该群还没有书签',
	'bookmarks:more' => '更多书签',

	'bookmarks:no_title' => '没有标题',

	/**
	 * Widget and bookmarklet
	 */
	'bookmarks:widget:description' => "Display your latest bookmarks.",

	'bookmarks:bookmarklet:description' =>
			"The bookmarks bookmarklet allows you to share any resource you find on the web with your friends, or just bookmark it for yourself. To use it, simply drag the following button to your browser's links bar:",

	'bookmarks:bookmarklet:descriptionie' =>
			"If you are using Internet Explorer, you will need to right click on the bookmarklet icon, select 'add to favorites', and then the Links bar.",

	'bookmarks:bookmarklet:description:conclusion' =>
			"You can then save any page you visit by clicking it at any time.",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "成功添加书签.",
	'bookmarks:delete:success' => "书签被删除.",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "Your bookmark could not be saved. Make sure you've entered a title and address and then try again.",
	'bookmarks:save:invalid' => "The address of the bookmark is invalid and could not be saved.",
	'bookmarks:delete:failed' => "Your bookmark could not be deleted. Please try again.",
);

add_translation('zh', $english);