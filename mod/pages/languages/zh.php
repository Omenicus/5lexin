<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$zh = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "小百科",
	'pages:owner' => "%s的小百科",
	'pages:friends' => "朋友的小百科",
	'pages:all' => "所有小百科",
	'pages:add' => "添加百科页面",

	'pages:group' => "群百科",
	'groups:enablepages' => '启用群百科',

	'pages:edit' => "编辑页面",
	'pages:delete' => "删除页面",
	'pages:history' => "历史",
	'pages:view' => "浏览",
	'pages:revision' => "版本",
	'pages:current_revision' => "当前版本",
	'pages:revert' => "恢复",

	'pages:navigation' => "导航",
	'pages:new' => "新页面",
	'pages:notification' =>
'%s added a new page:

%s
%s

View and comment on the new page:
%s
',
	'item:object:page_top' => '顶级页面',
	'item:object:page' => '页面',
	'pages:nogroup' => '该群没有百科页面',
	'pages:more' => '更多百科页面',
	'pages:none' => '没有百科页面',

	/**
	* River
	**/

	'river:create:object:page' => '%s百科页面%s',
	'river:create:object:page_top' => '%s百科页面%s',
	'river:update:object:page' => '%s更新了百科页面%s',
	'river:update:object:page_top' => '%s更新了百科页面%s',
	'river:comment:object:page' => '%s评论了百科页面%s',
	'river:comment:object:page_top' => '%s评论了百科页面%s',

	/**
	 * Form fields
	 */

	'pages:title' => '标题',
	'pages:description' => '内容',
	'pages:tags' => '标签',
	'pages:parent_guid' => '父页面',
	'pages:access_id' => '读权限',
	'pages:write_access_id' => '写权限',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No access to page',
	'pages:cantedit' => 'You cannot edit this page',
	'pages:saved' => 'Page saved',
	'pages:notsaved' => 'Page could not be saved',
	'pages:error:no_title' => 'You must specify a title for this page.',
	'pages:delete:success' => 'The page was successfully deleted.',
	'pages:delete:failure' => 'The page could not be deleted.',
	'pages:revision:delete:success' => 'The page revision was successfully deleted.',
	'pages:revision:delete:failure' => 'The page revision could not be deleted.',
	'pages:revision:not_found' => 'Cannot find this revision.',

	/**
	 * Page
	 */
	'pages:strapline' => '最后更新于 %s 来自 %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => '版本创建于 %s 来自 %s',

	/**
	 * Widget
	 **/

	'pages:num' => '现实的百科页面数量',
	'pages:widget:description' => "你的百科页面列表.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "查看页面",
	'pages:label:edit' => "编辑页面",
	'pages:label:history' => "页面历史",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "本页",
	'pages:sidebar:children' => "子页面",
	'pages:sidebar:parent' => "父页面",

	'pages:newchild' => "创建子页面",
	'pages:backtoparent' => "返回'%s'",
);

add_translation("zh", $zh);
