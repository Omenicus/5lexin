<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'file' => "文件",
	'file:user' => "%s的文件",
	'file:friends' => "朋友的文件",
	'file:all' => "所有文件",
	'file:edit' => "编辑文件",
	'file:more' => "更多文件",
	'file:list' => "列表",
	'file:group' => "群文件",
	'file:gallery' => "库模式",
	'file:gallery_list' => "库或列表模式",
	'file:num_files' => "显示的文件数量",
	'file:user:gallery'=>'查看 %s 文件库',
	'file:upload' => "上传文件",
	'file:replace' => '替换文件内容(为空表示不改变文件)',
	'file:list:title' => "%s的 %s %s",
	'file:title:friends' => "朋友的",

	'file:add' => '上传',

	'file:file' => "文件",
	'file:title' => "标题",
	'file:desc' => "描述",
	'file:tags' => "标签",

	'file:list:list' => 'Switch to the list view',
	'file:list:gallery' => 'Switch to the gallery view',

	'file:types' => "上传的文件类型",

	'file:type:' => '文件',
	'file:type:all' => "所有文件",
	'file:type:video' => "视频",
	'file:type:document' => "文档",
	'file:type:audio' => "音乐",
	'file:type:image' => "图片",
	'file:type:general' => "其它",

	'file:user:type:video' => "%s的视频",
	'file:user:type:document' => "%s的文档",
	'file:user:type:audio' => "%s的音乐",
	'file:user:type:image' => "%s的图片",
	'file:user:type:general' => "%s的其它文件",

	'file:friends:type:video' => "朋友的视频",
	'file:friends:type:document' => "朋友的文档",
	'file:friends:type:audio' => "朋友的音乐",
	'file:friends:type:image' => "朋友的图片",
	'file:friends:type:general' => "朋友的其他文件",

	'file:widget' => "File widget",
	'file:widget:description' => "Showcase your latest files",

	'groups:enablefiles' => '启用群文件',

	'file:download' => "下载",

	'file:delete:confirm' => "确认你要删除?",

	'file:tagcloud' => "标签云",

	'file:display:number' => "Number of files to display",

	'river:create:object:file' => '%s 上传了文件 %s',
	'river:comment:object:file' => '%s 评论了文件 %s',

	'item:object:file' => 'Files',

	'file:newupload' => 'A new file has been uploaded',
	'file:notification' =>
'%s uploaded a new file:

%s
%s

View and comment on the new file:
%s
',

	/**
	 * Embed media
	 **/

		'file:embed' => "Embed media",
		'file:embedall' => "All",

	/**
	 * Status messages
	 */

		'file:saved' => "文件成功保存.",
		'file:deleted' => "文件成功删除.",

	/**
	 * Error messages
	 */

		'file:none' => "没有文件.",
		'file:uploadfailed' => "Sorry; we could not save your file.",
		'file:downloadfailed' => "Sorry; this file is not available at this time.",
		'file:deletefailed' => "Your file could not be deleted at this time.",
		'file:noaccess' => "You do not have permissions to change this file",
		'file:cannotload' => "There was an error uploading the file",
		'file:nofile' => "You must select a file",
);

add_translation("en", $english);