<?php
$zh = array(
             
  'image:agree' => "请输入左边图片中的字母 (如果难以辨认, 点击发音或获取新图片)",
	'sirikinasa:isblank' => "请输入图片中的字母.",

	'gutwacaptcha:required' => "验证码输入不正确.",
	
	/**
	* Account 
	*/
	
	'registerok' => "你成功注册 %s.",
	'uservalidationbyemail:registerok' => "请去邮箱中点击激活链接，以确认你的注册",
	
  'uservalidationbyemail:emailsent' => "激活邮件已发送到 <em>%s</em>",
	'uservalidationbyemail:registerok' => "激活账号, 请点击邮件中的激活链接。",
	
	// catch the automated machines
	
	'gutwacaptcha:colour' => 'Background color of the register from',
        'gutwacaptcha:emailsiteowner' => 'Email me spammers address',
        'gutwacaptcha:myemailaddress' => 'Email address to send spammers addresses to',
        'gutwacaptcha:spammercaught' => 'Spammer caught',
        'gutwacaptcha:spammerdetails' => 'The email address of the spammer is %s',

	// the language selection part 
	'gutwacaptcha:admin:settings:min_completeness' => 'Minimum language completeness (e.g. 1)',
	'gutwacaptcha:admin:settings:show_in_header' => 'Show language selector in Captcha section?',
	'gutwacaptcha:admin:settings:autodetect' => 'Enable autodetect of captcha language (for non-logged in users)',
	'gutwacaptcha:admin:settings:show_images' => 'Show images of language/country (if available)',
	
	
	
);

add_translation("zh",$zh);