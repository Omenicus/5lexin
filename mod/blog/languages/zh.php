<?php
/**
 * Blog English language file.
 *
 */

$english = array(
	'blog' => '博客',
	'blog:blogs' => '博客',
	'blog:revisions' => '版本',
	'blog:archives' => '归档',
	'blog:blog' => '博客',
	'item:object:blog' => '博客',

	'blog:title:user_blogs' => '%s的博客',                     
	'blog:title:all_blogs' => '所有博客',
	'blog:title:friends' => '好友的博客',

	'blog:group' => '群博客',
	'blog:enableblog' => '启用群博客',
	'blog:write' => '写博客',

	// Editing
	'blog:add' => '新博客',
	'blog:edit' => '编辑',
	'blog:excerpt' => '简介',
	'blog:body' => '内容',
	'blog:save_status' => '最后保存时间：',
	'blog:never' => '从不',

	// Statuses
	'blog:status' => '状态',
	'blog:status:draft' => '草稿',
	'blog:status:published' => '发表',
	'blog:status:unsaved_draft' => '未保存的草稿',

	'blog:revision' => '版本',
	'blog:auto_saved_revision' => '自动保存的版本',

	// messages
	'blog:message:saved' => '博客已保存.',
	'blog:error:cannot_save' => '不能保存.',
	'blog:error:cannot_write_to_container' => '不能保存博客到群.',
	'blog:messages:warning:draft' => '这篇文章有未保存的草稿!',
	'blog:edit_revision_notice' => '(老版本)',
	'blog:message:deleted_post' => '已删除博客.',
	'blog:error:cannot_delete_post' => '不能删除博客.',
	'blog:none' => '没有博客',
	'blog:error:missing:title' => '请输入博客标题!',
	'blog:error:missing:description' => '请输入博客内容!',
	'blog:error:cannot_edit_post' => '博客不存在或你没有权限编辑.',
	'blog:error:revision_not_found' => '找不到这个版本.',

	// river
	'river:create:object:blog' => '%s 发布了博客 %s',
	'river:comment:object:blog' => '%s 在博客 %s 发表了评论',

	// notifications
	'blog:newpost' => '有新博客',
	'blog:notification' =>
'
%s 发表了新博客.

%s
%s

查看并评论该博客:
%s
',

	// widget
	'blog:widget:description' => '显示最新博客',
	'blog:moreblogs' => '更多博客',
	'blog:numbertodisplay' => '显示博客数量',
	'blog:noblogs' => '没有博客'
);

add_translation('zh', $english);
