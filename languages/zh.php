<?php
/**
 * Chinese Elgg Community 
 *
 * @package Elgg
 * @subpackage Core
 */
 
$chinese = array( 
/**
 * Sites
 */                                         
 
	'item:site'  =>  "网站" , 

/**
 * Sessions
 */
 
	'login'  =>  "登录" , 
	'loginok'  =>  "您已登录了." , 
	'loginerror'  =>  "您的登录失败.这也许是因为您还没有激活您的帐户（激活链接已经发到您的邮箱）,或您所填写的登录信息不正确.请确认后再试." , 
	'login:empty'  =>  "需要用户名/邮箱和密码." , 
	'login：baduser'  =>  "不能载入您的用户信息." , 
	'auth:nopams'  =>  "错误.没有安装用户身份验证." , 
	
	'logout'  =>  "注销" , 
	'logoutok'  =>  "您已注销了." , 
	'logouterror'  =>  "您的注销失败,请再试一次." , 

	'loggedinrequired' => "您必须登录后才能查看该页面.",
	'adminrequired' => "您必须是管理人员才能查看该页面.",
	'membershiprequired' => "您必须是该成员才能查看该页面.",


/**
 * Errors
 */
	'exception:title'  =>  "致命错误" , 
	'exception:contact_admin'  =>  "一个不可恢复的错误.请与网站管理员联系,并提供以下信息:",
	
	'actionundefined'  =>  "请求的Action(%s)在系统中没有定义." , 
	'actionnotfound'  =>  "没有在系统中定义(%s)." ,
	'actionloggedout'  =>  "很抱歉，您不能在登出时执行该动作." , 
	'actionunauthorized' => "您的权限不够.",

	'InstallationException:SiteNotInstalled' => "无法处理这个请求.这个网站没有配置或没有数据库",		
	
	'InstallationException:MissingLibrary' => "无法加载%s." , 
	'InstallationException:CannotLoadSettings' => "无法加载设置文件,它不存在或者有权限问题." , 
	
	'SecurityException:Codeblock'  =>  "没有执行该代码的权限." , 
	'DatabaseException:WrongCredentials'  =>  "无法使用指定的配置信息连接到数据库.请检查配置文件." , 
	'DatabaseException:NoConnect'  =>  "不能选择数据库'%s',请检查该数据库是否建立好了并且有权限可以访问." , 
	'SecurityException:FunctionDenied'  =>  "访问特权功能'%s'被拒绝了." , 
	'DatabaseException:DBSetupIssues'  =>  "发生以下问题: " , 
	'DatabaseException:ScriptNotFound'  =>  "找不到位于%s的数据库脚本." , 
    'DatabaseException:InvalidQuery' => "无效查询",
	'DatabaseException:InvalidDBLink' => "丢失数据库连接.",

	'IOException:FailedToLoadGUID'  =>  "从GUID:%d加载新的%s失败" , 
	'InvalidParameterException:NonElggObject'  =>  "传递一个non-ElggObject到另一个ElggObject构造器!" , 
	'InvalidParameterException:UnrecognisedValue'  =>  "传递给构造函数一个不可识别的值." , 

	'InvalidClassException:NotValidElggStar'  =>  "GUID:%d不是一个有效的%s." , 

	'PluginException:MisconfiguredPlugin'  =>  "%s是一个配置错误的插件." , 
    'PluginException:CannotStart' => '%s(GUID:%s)不能开始和已经停用.原因:%s.',
	'PluginException:InvalidID' => "%s是一个无效的插件ID.",
	'PluginException:InvalidPath' => "%s是一个无效的插件路径.",
	'PluginException:InvalidManifest' => '无效的清单文件插件%s',
	'PluginException:InvalidPlugin' => '%s不是一个有效的插件.',
	'PluginException:InvalidPlugin:Details' => '%s不是一个有效的插件:%s',
	'PluginException:NullInstantiated' => 'ElggPlugin实例化不能为空.你必须通过一个GUID,一个插件或者一个完整的路.',

	'ElggPlugin:MissingID' => '丢失的插件ID(GUID:%s)',
	'ElggPlugin:NoPluginPackagePackage' => '丢失的ElggPluginPackage插件ID %s (GUID:%s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => '所需的文件“%s”缺失.',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => '这是清单包含一个无效的依赖类型"%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => '这是清单包含一个无效的提供类型"%s".',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => '有一个无效的%s依赖“%s”在插件%s.插件不能冲突或要求他们提供的东西!',

	'ElggPlugin:Exception:CannotIncludeFile' => '不能包含%s为插件%s(GUID:%s)在%s.',
	'ElggPlugin:Exception:CannotRegisterViews' => '不能打开视图DIT为插件%s(GUID:%s)在%s.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => '语言不能注册为插件%s(GUID:%s)在%s.',
	'ElggPlugin:Exception:NoID' => '没有ID插件 GUID %s!',

	'PluginException:ParserError' => '误差解析清单与API版本%s在插件%s.',
	'PluginException:NoAvailableParser' => '无法找到一个显示API版本的解释器%s在%s中.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "请求'%s'显示插件%s的属性丢失.",

	'ElggPlugin:Dependencies:Requires' => '需要',
	'ElggPlugin:Dependencies:Suggests' => '建议',
	'ElggPlugin:Dependencies:Conflicts' => '冲突',
	'ElggPlugin:Dependencies:Conflicted' => '冲突',
	'ElggPlugin:Dependencies:Provides' => '提供',
	'ElggPlugin:Dependencies:Priority' => '优先',

	'ElggPlugin:Dependencies:Elgg' => '版本',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP扩展:%s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini设置:%s',
	'ElggPlugin:Dependencies:Plugin' => '插件:%s',
	'ElggPlugin:Dependencies:Priority:After' => '在%s之后',
	'ElggPlugin:Dependencies:Priority:Before' => '在%s之前',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s没有安装',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => '丢失',

	'ElggPlugin:InvalidAndDeactivated' => '%s是一个已经停用的无效插件.',
	
	'InvalidParameterException:NonElggUser'  =>  "传递一个非ElggUser到ElggUser构造器!" , 

	'InvalidParameterException:NonElggSite'  =>  "传递一个非ElggSite到ElggSite构造器!" , 

	'InvalidParameterException:NonElggGroup'  =>  "传递一个非ElggGroup到ElggGroup构造器!" , 

	'IOException:UnableToSaveNew'  =>  "无法保存新%s." , 

	'InvalidParameterException:GUIDNotForExport'  =>  "GUID在输出的时没有指定." , 
	'InvalidParameterException:NonArrayReturnValue'  =>  "实体序列化函数传递了一个非数组返回值参." , 

	'ConfigurationException:NoCachePath'  =>  "缓存路径没有设置!" , 
	'IOException:NotDirectory'  =>  "%s不是一个目录." , 

	'IOException:BaseEntitySaveFailed'  =>  "无法保存新对象的基本实体信息." , 
	'InvalidParameterException:UnexpectedODDClass'  =>  "import()传递了一个非预期的ODD类." , 
	'InvalidParameterException:EntityTypeNotSet'  =>  "实体类型必须被设定." , 

	'ClassException:ClassnameNotClass'  =>  "%s不是一个%s." , 
	'ClassNotFoundException:MissingClass'  =>  "类'%s'没有被找到,插件丢失?" , 
	'InstallationException:TypeNotSupported'  =>  "类型%s不被支持.这表明您的安装出错,一般情况是在升级不成功时发生这样的错误." , 

	'ImportException:ImportFailed'  =>  "无法导入元素%d." , 
	'ImportException:ProblemSaving'  =>  "保存%s的过程遇到错误." , 
	'ImportException:NoGUID'  =>  "新的实体建立好了,但是没有 GUID,这不应该发生." , 

	'ImportException:GUIDNotFound'  =>  "实体'%d'没有被找到." , 
	'ImportException:ProblemUpdatingMeta'  =>  "更新'%s'在实体'%d'的时候发生了一个错误." , 

	'ExportException:NoSuchEntity'  =>  "没有实体GUID:%d." , 

	'ImportException:NoODDElements'  =>  "在导入数据的时候没有找到OpenDD元素,导入失败." , 
	'ImportException:NotAllImported'  =>  "没有导入全部的数据." , 

	'InvalidParameterException:UnrecognisedFileMode'  =>  "不可识别的文件模式'%s'." , 
	'InvalidParameterException:MissingOwner' => "文件%s(文件GUID:%d)(所有者 GUID:%d)没有所有者!",
	'IOException:CouldNotMake'  =>  "无法创建%s." , 
	'IOException:MissingFileName'  =>  "在打开一个文件时候，您必须指定文件名." , 
	'ClassNotFoundException:NotFoundNotSavedWithFile'  =>  "文件存储信息无法找到或者类无法保存." , 
	'NotificationException:NoNotificationMethod'  =>  "没有指定通知方式." , 
	'NotificationException:NoHandlerFound'  =>  "没有找到'%s'的处理方法或者他不能被调用." , 
	'NotificationException:ErrorNotifyingGuid'  =>  "在通知%d的时发生了一个错误." , 
	'NotificationException:NoEmailAddress'  =>  "无法获取 GUID:%d 的邮件地址." , 
	'NotificationException:MissingParameter'  =>  "丢失了必须的参数,'%s'." , 

	'DatabaseException:WhereSetNonQuery'  =>  "Where设定里包括了非 WhereQueryComponent." , 
	'DatabaseException:SelectFieldsMissing'  =>  "Select查询方式缺少参数." , 
	'DatabaseException:UnspecifiedQueryType'  =>  "不可识别或未指定的查询类型." , 
	'DatabaseException:NoTablesSpecified'  =>  "查询没有指定数据表." , 
	'DatabaseException:NoACL'  =>  "查询没有权限." , 

	'InvalidParameterException:NoEntityFound'  =>  "没有找到实体,该实体不存在或者您没有权限访问." , 

	'InvalidParameterException:GUIDNotFound'  =>  "GUID:%s 没有找到,也可能您没有权限访问." , 
	'InvalidParameterException:IdNotExistForGUID'  =>  "抱歉,'%s'不存在GUID:%d" , 
	'InvalidParameterException:CanNotExportType'  =>  "抱歉,无法输出'%s'." , 
	'InvalidParameterException:NoDataFound'  =>  "无法找到任何数据." , 
	'InvalidParameterException:DoesNotBelong'  =>  "不属于实体." , 
	'InvalidParameterException:DoesNotBelongOrRefer'  =>  "不属于实体或者指向实体." , 
	'InvalidParameterException:MissingParameter'  =>  "缺少参数,您需要提供GUID." , 
    'InvalidParameterException:LibraryNotRegistered' => '%s不是注册库.',
	'InvalidParameterException:LibraryNotFound' => '无法载入%s从库%s.',
	
	'APIException:ApiResultUnknown' => "API结果未知类型.",
	'ConfigurationException:NoSiteID' => "没有指定站点ID.",
	'SecurityException:APIAccessDenied'  =>  "对不起,API访问被管理员关闭了." , 
	'SecurityException:NoAuthMethods'  =>  "没有找到验证方式可以验证该API请求." , 
	'SecurityException:UnexpectedOutputInGatekeeper' => '输出错误,已经停止执行页面.请上http://docs.elgg.org/搜索更多的信息.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "方式或者函数在 expose_method() 的调用中没有被设置.",
	'InvalidParameterException:APIParametersArrayStructure' => "曝光方式'%s'的参数数组结构不正确.",
	'InvalidParameterException:UnrecognisedHttpMethod' => "无法识别的HTTP方式%s对于API方式'%s'.",
	'APIException:MissingParameterInMethod'  =>  "方法%s缺少参数%s." , 
	'APIException:ParameterNotArray'  =>  "%s不是数组." , 
	'APIException:UnrecognisedTypeCast'  =>  "广播%s的变量'%s'(被方法'%s'调用)是无法识别的类型." , 
	'APIException:InvalidParameter'  =>  "方法'%s'里有无效的参数'%s'." , 
	'APIException:FunctionParseError'  =>  "%s(%s)解析错误." , 
	'APIException:FunctionNoReturn'  =>  "%s(%s)没有返回值." , 
	'APIException:APIAuthenticationFailed' => "API验证的调用方式错误.",
	'APIException:UserAuthenticationFailed' => "用户验证的调用方式错误.",	
	'SecurityException:AuthTokenExpired'  =>  "验证令牌丢失,无效或者过期." , 
	'CallException:InvalidCallMethod'  =>  "%s被调用时候必须使用'%s'." , 
	'APIException:MethodCallNotImplemented'  =>  "方法调用'%s'没有被实现." , 
	'APIException:FunctionDoesNotExist' => "方式'%s'的函数不可调用.",	
	'APIException:AlgorithmNotSupported'  =>  "算法'%s'不支持或者被禁用了." , 
	'ConfigurationException:CacheDirNotSet'  =>  "缓存目录'cache_path'没有被设定." , 
	'APIException:NotGetOrPost'  =>  "返回方式必须是GET或者POST." , 
	'APIException:MissingAPIKey'  =>  "丢失了API密钥." , 
	'APIException:BadAPIKey' => "错误的API密钥.",
	'APIException:MissingHmac'  =>  "丢失了X-Elgg-hmac报头." , 
	'APIException:MissingHmacAlgo'  =>  "丢失了X-Elgg-hmac-algo报头." , 
	'APIException:MissingTime'  =>  "丢失了X-Elgg-time报头." , 
	'APIException:MissingNonce' => "丢失了X-Elgg-nonce报头.",
	'APIException:TemporalDrift'  =>  "X-Elgg-time报错." , 
	'APIException:NoQueryString'  =>  "查询字符里没有数据." , 
	'APIException:MissingPOSTHash'  =>  "丢失了X-Elgg-posthash报头." , 
	'APIException:MissingPOSTAlgo'  =>  "丢失了X-Elgg-posthash_algo报头." , 
	'APIException:MissingContentType'  =>  "传递数据时候丢失了内容类型." , 
	'SecurityException:InvalidPostHash'  =>  "POST数据的HASH无效 - 预期:%s 实际:%s." , 
	'SecurityException:DupePacket'  =>  "签名已经被通过." , 
	'SecurityException:InvalidAPIKey'  =>  "无效或者缺少API Key." , 
	'NotImplementedException:CallMethodNotImplemented'  =>  "调用方法'%s'不被支持." , 

	'NotImplementedException:XMLRPCMethodNotImplemented'  =>  "XML-RPC 方法调用'%s'没有被实现." , 
	'InvalidParameterException:UnexpectedReturnFormat'  =>  "调用方法'%s'返回了非预期结果." , 
	'CallException:NotRPCCall'  =>  "不是一个有效的XML-RPC调用." , 

	'PluginException:NoPluginName'  =>  "没有找到插件的名字." , 

    'SecurityException:authenticationfailed' => "用户不能进行身份认证.",
	
	'CronException:unknownperiod' => '%s 不是一个公认的时期.',
	
	'SecurityException:deletedisablecurrentsite'  =>  "您无法删除或者禁用目前正在查看的网站" , 

	'RegistrationException:EmptyPassword' => '密码不能为空.',
	'RegistrationException:PasswordMismatch' => '密码必须相同.',
    'LoginException:BannedUser' => '您已被禁止登录这个网站.',
	'LoginException:UsernameFailure' => '登录失败,请检查您的用户名/电子邮件和密码.',
	'LoginException:PasswordFailure' => '登录失败,请检查您的用户名/电子邮件和密码.',
	'LoginException:AccountLocked' => '登录失败次数过多,您的账号已被锁定.',
	'LoginException:ChangePasswordFailure' => '当前密码校验失败.',
	'LoginException:Unknown' => '由于位置错误我们不能让您登录.',

	'deprecatedfunction'  =>  "警告: 该代码使用了不再支持的函数 \'%s\' 并且不兼容当前的Elgg版本" , 

	'pageownerunavailable' => '警告: 该页面的所有者 %d 不可访问!',
	'viewfailure' => '在视图中有一个内部错误%s.',
	'changebookmark' => '请更改此页的书签.',
	'noaccess' => '你需要登录后才能查看此内容,或内容已经被删除,或您无权查看它.',
	'error:missing_data' => '你的请求一些数据丢失.',

	'error:default' => 'Oops...发生了一些错误.',
	'error:404' => '对不起。我们找不到您所请求的这个页面.',

/**
 * API
 */
	'system.api.list' => "列出系统所有可调用的API.",
	'auth.gettoken' => "本API调用支持用户登录,返回一个验证令牌,从而保证以后用户名和密码的验证.",

/**
 * User details
 */

	'name'  =>  "姓名" , 
	'email'  =>  "邮箱地址" , 
	'username'  =>  "用户名" , 
	'loginusername'  =>  "用户名或邮箱" ,
	'password'  =>  "密码" , 
	'passwordagain'  =>  "确认密码" , 
	'admin_option'  =>  " 任命为管理员?" , 

/**
 * Access
 */
 
	'PRIVATE'  =>  "自己" , 
	'LOGGED_IN'  =>  "登录的用户" , 
	'PUBLIC'  =>  "公开" , 
	'access:friends:label' => "好友",
	'access' => "访问", 
	'access'  =>  "访问权限" , 

/**
 * Dashboard and widgets
 */
 
	'dashboard'  =>  "控制面板" , 
	'dashboard:nowidgets'  =>  "控制面板对您很重要,可以让您跟踪在网站上的动态和内容." , 
	
	'widgets:add'  =>  "添加部件" , 
	'widgets:add:description'  =>  "点击下面的任何部件按钮将它添加到页面." , 
	'widgets:position:fixed'  =>  "(定位在页面上)" , 
	'widget:unavailable' => '您已经添加了此插件.',
	'widget:numbertodisplay' => '显示的项目数量.',

	'widget:delete' => '删除%s',
	'widget:edit' => '定制这个插件.',

	'widgets'  =>  "部件" , 
	'widget'  =>  "部件" , 
	'item:object:widget'  =>  "部件" , 
	'widgets:save:success'  =>  "部件配置信息保存好了." , 
	'widgets:save:failure'  =>  "我们不能保存您的部件." , 
	'widgets:add:success' => "部件添加成功.",
	'widgets:add:failure' => "部件添加失败.",
	'widgets:move:failure' => "我们不能保存这个新窗口部件的位置.",
	'widgets:remove:failure' => "无法删除这个窗口部件.",
	
/**
 * Groups
 */

	'group'  =>  "团队" , 
	'item:group'  =>  "团队" , 

/**
 * Users
 */

	'user' => "用户",
	'item:user' => "用户",

/**
 * Friends
 */
 
	'friends'  =>  "好友" , 
	'friends:yours'  =>  "您的好友" , 
	'friends:owned'  =>  "%s的好友" , 
	'friend:add'  =>  "添加好友" , 
	'friend:remove'  =>  "删除好友" , 

	'friends:add:successful'  =>  "您已经成功的添加%s为好友." , 
	'friends:add:failure'  =>  "我们无法添加%s为您的好友." , 

	'friends:remove:successful'  =>  "您成功的将%s从您的好友中移除了." , 
	'friends:remove:failure'  =>  "我们无法从您的好友中移除%s." ,

	'friends:none' => "还没有好友.",
	'friends:none:you' => "您还没有任何好友.",

	'friends:none:found' => "没有发现好友.",
	
	'friends:none'  =>  "这个用户还没有添加任何好友." , 
	'friends:none:you'  =>  "您还未添加任何好友,开始添加内容和填写您的资料,让志同道合的朋友可以找到你!" , 

	'friends:none:owned'  =>  "和%s成为好友" , 
	
	'friends:of'  =>  "关注" , 
	'friends:collections'  =>  "好友圈" , 
	'collections:add' => "新圈子",
	'friends:collections:add'  =>  "新好友圈" , 
	'friends:addfriends'  =>  "选择好友" , 
	'friends:collectionname'  =>  "圈子名称" , 
	'friends:collectionfriends'  =>  "圈内好友" , 
	'friends:collectionedit'  =>  "编辑圈子" , 
	'friends:nocollections'  =>  "您还没有任何好友圈." , 
	'friends:collectiondeleted'  =>  "您的好友圈已经删除了." , 
	'friends:collectiondeletefailed'  =>  "我们无法删除好友圈.您没有权限执行操作,或存在问题." , 
	'friends:collectionadded'  =>  "您的圈子已成功创建." , 
	'friends:nocollectionname'  =>  "在创建前，需先给圈子命名." , 
	'friends:collections:members'  =>  "圈子成员" , 
	'friends:collections:edit'  =>  "编辑圈子" , 
 	'friends:collections:edited' => "保存圈子",
	'friends:collection:edit_failed' => '保存圈子失败.',
	
	'friendspicker:chararray'  =>  "ABCDEFGHIJKLMNOPQRSTUVWXYZ" , 

    'avatar' => '头像',
	'avatar:noaccess' => "您不允许编辑该用户的头像",
	'avatar:create' => '创建头像',
	'avatar:edit' => '编辑头像',
	'avatar:preview' => '预览',
	'avatar:upload' => '上传一个新头像',
	'avatar:current' => '当前头像',
	'avatar:remove' => '删除您的头像,设置默认图标.',
	'avatar:crop:title' => '头像裁剪工具',
	'avatar:upload:instructions' => "请编辑头像完成注册\n. 你的头像会显示在整个网站.(接受文件格式: GIF, JPG or PNG)",
	'avatar:create:instructions' => '单击并拖动下面的区域，可以按照你的想法裁剪头像.预览效果会在右侧显示.如果你对预览效果满意,点击\'创建头像\'.这个裁剪后的头像将成为你的头像.',
	'avatar:upload:success' => '头像上传成功.',
	'avatar:upload:fail' => '头像上传失败.',
	'avatar:resize:fail' => '头像大小调整失败.',
	'avatar:crop:success' => '头像裁剪成功.',
	'avatar:crop:fail' => '头像裁剪失败.',
	'avatar:remove:success' => '删除头像成功.',
	'avatar:remove:fail' => '删除头像失败.',

	'profile:edit' => '编辑个人资料',
	'profile:aboutme' => "关于我",
	'profile:description' => "关于我",
	'profile:briefdescription' => "简介",
	'profile:location' => "位置",
	'profile:skills' => "专业特长",
	'profile:interests' => "兴趣爱好",
	'profile:contactemail' => "电子邮件",
	'profile:phone' => "电话",
	'profile:mobile' => "手机",
	'profile:website' => "个人网站",
	'profile:twitter' => "Twitter用户名",
	'profile:saved' => "已成功保存您的个人资料.",

	'profile:field:text' => '短文本',
	'profile:field:longtext' => '大文本区域',
	'profile:field:tags' => '标签',
	'profile:field:url' => '网址',
	'profile:field:email' => '电子邮件地址',
	'profile:field:location' => '地址',
	'profile:field:date' => '日期',

	'admin:appearance:profile_fields' => '编辑个人资料',
	'profile:edit:default' => '编辑个人资料',
	'profile:label' => "个人资料标签",
	'profile:type' => "个人资料类型",
	'profile:editdefault:delete:fail' => '删除默认个人资料失败.',
	'profile:editdefault:delete:success' => '成功删除个人资料.',
	'profile:defaultprofile:reset' => '重置个人资料为系统默认.',
	'profile:resetdefault' => '重置个人资料为系统默认.',
	'profile:resetdefault:confirm' => '确定要删除自定义的个人资料吗?',
	'profile:explainchangefields' => "您可以用下面的表格替换现有的个人资料. \n\n 单击'添加' 按钮可标注个人资料标签,例如,'喜爱的球队',选择字段类型(如文本,URL,标签).重排拖动处理标签.点击标签文本可以编辑标签.您可以随时恢复默认配置设置,但您将会但丢失已经输入在个人资料页面里的所有信息.",
	'profile:editdefault:success' => '添加新个人资料成功.',
	'profile:editdefault:fail' => '默认配置保存失败.',
	'profile:field_too_long' => '因"%s"太长,无法保存您的个人资料.',
	'profile:noaccess' => "您没有权限编辑该个人资料.",


/**
 * Feeds
 */
	'feed:rss'  =>  "订阅RSS" , 
/**
 * links
 **/
	'link:view'  =>  "查看链接" , 
	'link:view:all' => '查看所有',


/**
 * River
 */
	'river'  =>  "活动板" , 
	'river:friend:user:default' => "%s加%s为好友",
	'river:update:user:avatar' => '%s创建了新头像',
	'river:update:user:profile' => '%s上传了个人资料',
	'river:noaccess'  =>  "您没有权限查看该内容." , 
	'river:posted:generic'  =>  "发布了%s" ,
	'riveritem:single:user' =>	'用户',
	'riveritem:plural:user'	=>	'用户',
	'river:ingroup' => '发布到群组%s',
	'river:none' => '没有动态',
	'river:update' => '%s更新',
	'river:delete:success' => '项目已被删除.',
	'river:delete:fail' => '项目不能被删除.',

	'river:widget:title' => "动态",
	'river:widget:description' => "显示最新动态",
	'river:widget:type' => "动态类型",
	'river:widgets:friends' => '好友动态',
	'river:widgets:all' => '全网站动态',

/**
 * Notifications
 */
	'notifications:usersettings'  =>  "通知设置" , 
	'notifications:methods'  =>  "选择你的通知方式." , 
	'notification:method:email' => '电子邮件',
	
	'notifications:usersettings:save:ok'  =>  "你的通知设置保存成功." , 
	'notifications:usersettings:save:fail'  =>  "保存您的通知设置时遇到了问题." , 
	
	'user.notification.get'  =>  "返回通知设置为给指定的用户." , 
	'user.notification.set'  =>  "设置通知设置为给指定的用户." , 
/**
 * Search
 */

	'search'  =>  "搜索" , 
	'searchtitle'  =>  "搜索：%s" , 
	'users:searchtitle'  =>  "搜索用户:%s" , 
	'groups:searchtitle' => "搜索团队:%s",
	'advancedsearchtitle'  =>  "%s的搜索结果中匹配的有%s" , 
	'notfound' => "没有找到结果..",
	'next'  =>  "下一页" , 
	'previous'  =>  "上一页" , 

	'viewtype:change'  =>  "修改列表类型" , 
	'viewtype:list'  =>  "列表视图" , 
	'viewtype:gallery'  =>  "相册" , 

	'tag:search:startblurb'  =>  "标签匹配的有'%s':" , 
	
	'user:search:startblurb'  =>  "用户匹配的有'%s':" , 
	'user:search:finishblurb'  =>  "点击查看更多." , 

	'group:search:startblurb' => "小组匹配的有'%s':",
	'group:search:finishblurb' => "点击查看更多.",
	'search:go' => '搜索GO',
	'userpicker:only_friends' => '仅好友',
		
/**
 * Account
 */
 
	'account'  =>  "帐户" , 
	'settings'  =>  "设置" , 
	'tools'  =>  "工具" , 
	'settings:edit' => '编辑设置',

	'register'  =>  "注册" , 
	'registerok'  =>  "您已经成功注册%s." , 
	'registerbad'  =>  "您的注册未成功.因为一个未知错误." , 
	'registerdisabled'  =>  "注册功能已经被管理员关闭了." , 
	'register:fields' => '所有字段必须填写.',
	
	'registration:notemail'  =>  "您提供的邮件地址似乎不是一个有效的电子邮件地址." , 
	'registration:userexists'  =>  "该用户名已存在." , 
	'registration:usernametooshort'  =>  "您的用户名必须至少 %u 个字符." , 
	'registration:usernametoolong' => '您的用户名太长.最长限度为 %u 个字符.',
	'registration:passwordtooshort'  =>  "密码至少 %u 个字符." , 
	'registration:dupeemail'  =>  "这个电子邮件地址已经被注册." , 
	'registration:invalidchars'  =>  "对不起,您的用户名包含字符 %s 这是无效的。以下字符无效:%s" , 
	'registration:emailnotvalid'  =>  "对不起,您输入的电子邮件地址在这个系统是无效的." , 
	'registration:passwordnotvalid'  =>  "对不起,您输入的密码在这个系统是无效的." , 
	'registration:usernamenotvalid'  =>  "对不起,您输入的用户名在这个系统是无效的." , 

	'adduser'  =>  "添加用户" , 
	'adduser:ok'  =>  "您已经成功添加一个新用户." , 
	'adduser:bad'  =>  "无法创建新用户." , 

	'user:set:name'  =>  "帐户名字设置" ,
	'user:name:label'  =>  "显示名字" ,
	'user:name:success'  =>  "已成功修改了您在系统中的名字." ,
	'user:name:fail'  =>  "无法改变你在系统的名字.请确保你的名字长度后,再试一次." ,
	
	'user:set:password'  =>  "帐户密码" ,
	'user:current_password:label' => '当前密码',
	'user:password:label'  =>  "新密码" ,
	'user:password2:label'  =>  "确认新密码" , 
	'user:password:success'  =>  "密码已修改" , 
	'user:password:fail'  =>  "无法修改您在系统中的密码." ,
	'user:password:fail:notsame'  =>  "两个密码不匹配!" ,
	'user:password:fail:tooshort'  =>  "密码太短!" ,
	'user:password:fail:incorrect_current_password' => '当前密码输入错误.',
	'user:resetpassword:unknown_user'	=> "无效的用户.",
	'user:resetpassword:reset_password_confirm'	=> "重置密码将会发送新密码到您的注册邮箱中.",
	
	'user:set:language'  =>  "语言设定" ,
	'user:language:label'  =>  "您的语言" ,
	'user:language:success'  =>  "您的语言设置已经生效." ,
	'user:language:fail'  =>  "您的语言设置无法保存." ,
	
	'user:username:notfound'  =>  "用户名 %s 未找到." ,
	
	'user:password:lost'  =>  "丢失密码" ,
	'user:password:resetreq:success'  =>  "成功请求一个新密码,已经发送到您的邮箱." ,
	'user:password:resetreq:fail'  =>  "无法请求生成一个新密码." ,
	
	'user:password:text'  =>  "请求一个新密码,输入您的用户名或电子邮件地址并单击请求按钮下方." ,
	
	'user:persistent'  =>  "记住" ,
	
	'walled_garden:welcome' => '欢迎',

/**
 * Administration
 */
	'menu:page:header:administer' => '管理',
	'menu:page:header:configure' => '配置',
	'menu:page:header:develop' => '开发',
	'menu:page:header:default' => '其他',

	'admin:view_site' => '查看网站',
	'admin:loggedin' => '登录者:%s',
	'admin:menu' => '菜单',
	
	'admin:configuration:success'  =>  "您的设置已保存." , 
	'admin:configuration:fail'  =>  "您的设置无法保存." , 
	'admin:configuration:dataroot:relative_path' => '无法把"%s"设置为dataroot,因为它不是一个绝对路径.',

	'admin:unknown_section' => '无效的管理部分.',

	'admin'  =>  "管理" , 
	'admin:description'  =>  "管理员面板允许您控制用户系统的所有方面，从用户管理到插件的配置.选择一个下面选项开始设置." , 
	
	'admin:statistics' => "统计",
	'admin:statistics:overview' => '概述',
	'admin:statistics:server' => '服务器信息',

	'admin:appearance' => '外观',
	'admin:administer_utilities' => '管理系统',
	'admin:develop_utilities' => '开发系统',
	
	'admin:users'  =>  "用户" , 
	'admin:users:online' => '当前在线',
	'admin:users:newest' => '最新',
	'admin:users:admins' => '管理员',
	'admin:users:add' => '添加新用户',
	'admin:user:description'  =>  "这个管理员面板允许你控制网站用户设置.选择一个下面选项开始设置." , 
	'admin:user:adduser:label'  =>  "点击这里添加一个新用户..." , 
	'admin:user:opt:linktext'  =>  "配置用户..." , 
	'admin:user:opt:description'  =>  "配置用户和账户信息." , 
	'admin:users:find' => '查找',

	'admin:settings' => '设置',
	'admin:settings:basic' => '基本设置',
	'admin:settings:advanced' => '高级设置',
	'admin:site:description'  =>  "这个管理员面板允许你控制网站全局设置.选择一个下面选项开始设置." , 
	'admin:site:opt:linktext'  =>  "配置网站..." , 
	'admin:site:access:warning'  =>  "改变访问的权限设置只影响在未来创建的内容." , 
	
	'admin:dashboard' => '控制面板',
	'admin:widget:online_users' => '在线用户',
	'admin:widget:online_users:help' => '网站上列出目前用户.',
	'admin:widget:new_users' => '新的用户',
	'admin:widget:new_users:help' => '列出最新用户.',
	'admin:widget:content_stats' => '统计内容',
	'admin:widget:content_stats:help' => '跟踪您的用户创建的内容.',
	'widget:content_stats:type' => '内容类型',
	'widget:content_stats:number' => '数量',

	'admin:widget:admin_welcome' => '欢迎',
	'admin:widget:admin_welcome:help' => "管理区域的简短介绍.",
	'admin:widget:admin_welcome:intro' =>
	'欢迎进入管理界面!你现在看到的是管理面板.它用于跟踪发生在网站上的事件.',
	
	'admin:widget:admin_welcome:admin_overview' =>
	"导航管理区域在右侧提供的菜单"
	."它由三部分组成:
	<dl>
		<dt>管理ADMINISTER</dt><dd>日常的任务:监测报告内容,查看在线用户,查看统计数据.</dd>
		<dt>配置CONFIGURE</dt><dd>偶尔的任务:像设置站点名称或激活插件.</dd>
		<dt>开发DEVELOP</dt><dd>对于开发人员构建插件或设计主题.(需要开发人员插件).</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />请确认通过页脚的链接检查可用资源!',

	'admin:widget:control_panel' => '控制面板',
	'admin:widget:control_panel:help' => "为通用控件提供简单访问.",

	'admin:cache:flush' => '刷新缓存',
	'admin:cache:flushed' => "网站缓存已刷新.",

	'admin:footer:faq' => '管理常见问题解答',
	'admin:footer:manual' => '管理手册',
	'admin:footer:community_forums' => 'ELGG社区论坛',
	'admin:footer:blog' => 'ELGG博客',

	'admin:plugins:category:all' => '所有插件',
	'admin:plugins:category:active' => '活跃插件',
	'admin:plugins:category:inactive' => '暂无插件',
	'admin:plugins:category:admin' => '管理',
	'admin:plugins:category:bundled' => '捆绑',
	'admin:plugins:category:nonbundled' => '无捆绑',
	'admin:plugins:category:content' => '内容',
	'admin:plugins:category:development' => '发展',
	'admin:plugins:category:enhancement' => '增强',
	'admin:plugins:category:api' => '服务/API',
	'admin:plugins:category:communication' => '通信',
	'admin:plugins:category:security' => '安全和垃圾邮件',
	'admin:plugins:category:social' => '社交',
	'admin:plugins:category:multimedia' => '多媒体',
	'admin:plugins:category:theme' => '主题',
	'admin:plugins:category:widget' => '小部件',
	'admin:plugins:category:utility' => '系统',

	'admin:plugins:sort:priority' => '优先',
	'admin:plugins:sort:alpha' => '字母',
	'admin:plugins:sort:date' => '最新',

	'admin:plugins:markdown:unknown_plugin' => '未知插件',
	'admin:plugins:markdown:unknown_file' => '未知文件',


	'admin:notices:could_not_delete' => '无法删除通知.',
	'item:object:admin_notice' => '管理通知',

	'admin:options' => '管理选项',
	
	
/**
 * Plugins
 */
	'plugins:disabled' => '插件没有被加载,因为一个文件命名为“禁用”mod目录.',
	'plugins:settings:save:ok' => "插件保存成功.",
	'plugins:settings:save:fail' => "保存插件有问题.",
	'plugins:usersettings:save:ok' => "插件保存成功.",
	'plugins:usersettings:save:fail' => "保存插件有问题.",
	'item:object:plugin' => '插件',

	'admin:plugins'  =>  "插件" , 
	'admin:plugins:activate_all' => '全部激活',
	'admin:plugins:deactivate_all' => '全部停用',
	'admin:plugins:activate' => '激活',
	'admin:plugins:deactivate' => '停用',
	'admin:plugins:description' => "这个管理员面板允许您控制和配置工具安装在您的网站.",
	'admin:plugins:opt:linktext' => "配置插件...",
	'admin:plugins:opt:description' => "配置网站工具安装.",
	'admin:plugins:label:author'  =>  "作者" , 
	'admin:plugins:label:copyright'  =>  "版权" , 
	'admin:plugins:label:categories' => '分类',
	'admin:plugins:label:licence'  =>  "协议" , 
	'admin:plugins:label:website'  =>  "地址" , 
	'admin:plugins:label:repository' => "代码",
	'admin:plugins:label:bugtracker' => "报告问题",
	'admin:plugins:label:donate' => "捐赠",
	'admin:plugins:label:moreinfo'  =>  "更多信息" , 
	'admin:plugins:label:version' => '版本',
	'admin:plugins:label:location' => '位置',
	'admin:plugins:label:dependencies' => '依赖关系',
	
	'admin:plugins:warning:elgg_version_unknown' => '这个插件使用一个遗产清单文件并没有指定一个兼容的版本.它可能不会工作!',
	'admin:plugins:warning:unmet_dependencies' => '这个插件有未满足的依赖和不能被激活.在更多的信息中检查依赖关系.',
	'admin:plugins:warning:invalid' => '无效插件: %s',
	'admin:plugins:warning:invalid:check_docs' => '点击<a href="http://docs.elgg.org/Invalid_Plugin">文档</a>故障提示.',
	'admin:plugins:cannot_activate' => '不能激活',

	'admin:plugins:set_priority:yes' => "重新排序%s.",
	'admin:plugins:set_priority:no' => "无法重新排序%s.",
	'admin:plugins:set_priority:no_with_msg' => "无法重新排序%s.错误: %s",
	'admin:plugins:deactivate:yes' => "停用%s.",
	'admin:plugins:deactivate:no' => "无法停用%s.",
	'admin:plugins:deactivate:no_with_msg' => "无法停用%s.错误: %s",
	'admin:plugins:activate:yes' => "激活%s.",
	'admin:plugins:activate:no' => "无法激活%s.",
	'admin:plugins:activate:no_with_msg' => "无法激活%s.错误:%s.",
	'admin:plugins:categories:all' => '所有类别',
	'admin:plugins:plugin_website' => '插件网站',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => '版本%s',
	'admin:plugin_settings' => '插件设置',
	'admin:plugins:warning:unmet_dependencies_active' => '这个插件是活跃但未满足依赖关系.你可能会遇到的问题.查看“更多信息”下面的细节.',

	'admin:plugins:dependencies:type' => '类型',
	'admin:plugins:dependencies:name' => '名称',
	'admin:plugins:dependencies:expected_value' => '预计值',
	'admin:plugins:dependencies:local_value' => '实际值',
	'admin:plugins:dependencies:comment' => '评论',

	'admin:statistics:description' => "这是你的网站统计数据的概述。如果你需要更详细的统计,一个专业的管理功能是可用的.",
	'admin:statistics:opt:description' => "查看统计你网站上用户和对象的信息.",
	'admin:statistics:opt:linktext' => "查看统计...",
	'admin:statistics:label:basic' => "基本网站统计",
	'admin:statistics:label:numentities' => "网站实体",
	'admin:statistics:label:numusers' => "用户数量",
	'admin:statistics:label:numonline' => "在线用户数量",
	'admin:statistics:label:onlineusers' => "目前在线用户",
	'admin:statistics:label:admins'=>"管理员",
	'admin:statistics:label:version' => "版本",
	'admin:statistics:label:version:release' => "释放",
	'admin:statistics:label:version:version' => "版本",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Web服务器',
	'admin:server:label:server' => '服务器',
	'admin:server:label:log_location' => '日志位置',
	'admin:server:label:php_version' => 'PHP版本',
	'admin:server:label:php_ini' => 'PHP ini 文件位置',
	'admin:server:label:php_log' => 'PHP 日志',
	'admin:server:label:mem_avail' => '可用内存',
	'admin:server:label:mem_used' => '使用内存',
	'admin:server:error_log' => "Web 服务器错误日志",
	'admin:server:label:post_max_size' => '最大帖子大小',
	'admin:server:label:upload_max_filesize' => '最大上传大小',
	'admin:server:warning:post_max_too_small' => '(注:post_max_size必须大于这个值,才是支持上传的大小.)',

	'admin:user:label:search' => "查找用户:",
	'admin:user:label:searchbutton' => "搜索",

	'admin:user:ban:no' => "不能禁止用户.",
	'admin:user:ban:yes' => "用户已被禁止.",
	'admin:user:self:ban:no' => "无法禁止自己.",
	'admin:user:unban:no' => "无法解禁用户.",
	'admin:user:unban:yes' => "用户已被解禁.",
	'admin:user:delete:no' => "无法删除用户.",
	'admin:user:delete:yes' => "用户%s已被删除",
	'admin:user:self:delete:no' => "无法删除自己.",

	'admin:user:resetpassword:yes' => "密码重置,用户通知.",
	'admin:user:resetpassword:no' => "密码无法重设.",

	'admin:user:makeadmin:yes' => "用户现在是管理员.",
	'admin:user:makeadmin:no' => "这个用户无法成为管理员.",

	'admin:user:removeadmin:yes' => "用户不再是管理员.",
	'admin:user:removeadmin:no' => "无法删除该用户的管理员权限.",
	'admin:user:self:removeadmin:no' => "你无法删除自己的管理员权限.",

	'admin:appearance:menu_items' => '菜单项目',
	'admin:menu_items:configure' => '配置主菜单项',
	'admin:menu_items:description' => '选择你想要显示的菜单项作为特色链接.未使用项将被添加到“更多”末尾的列表.',
	'admin:menu_items:hide_toolbar_entries' => '移除工具栏菜单中的连接?',
	'admin:menu_items:saved' => '保存菜单项目',
	'admin:add_menu_item' => '添加自定义菜单项目',
	'admin:add_menu_item:description' => '填写显示名称和URL,添加自定义项目到你的导航菜单.',

	'admin:appearance:default_widgets' => '默认小部件',
	'admin:default_widgets:unknown_type' => '未知小部件种类',
	'admin:default_widgets:instructions' => '添加、删除、位置,并为部件页面配置默认的选中小部件.'
		. '这些变化只会影响网站上的新用户.',

/**
 * User settings
 */
	'usersettings:description'  =>  "用户设置面板允许你控制你所有的个人设置,从用户管理到插件行为.选择一个下面的选项开始." , 
	
	'usersettings:statistics'  =>  "你的统计" , 
	'usersettings:statistics:opt:description'  =>  "在网站上查看用户和对象统计信息." , 
	'usersettings:statistics:opt:linktext'  =>  "账户统计" , 
	
	'usersettings:user'  =>  "您的设定" , 
	'usersettings:user:opt:description'  =>  "这允许您控制用户设置." , 
	'usersettings:user:opt:linktext'  =>  "修改你的设定" , 

	'usersettings:plugins'  =>  "工具" , 
	'usersettings:plugins:opt:description'  =>  "为你的活动工具配置设置(如果有的话)." , 
	'usersettings:plugins:opt:linktext'  =>  "配置插件" , 
	
	'usersettings:plugins:description'  =>  "这个面板允许您通过系统管理员安装的工具控制和配置个人设置." , 
	'usersettings:statistics:label:numentities'  =>  "你的内容" , 
	
	'usersettings:statistics:yourdetails'  =>  "详细信息" , 
	'usersettings:statistics:label:name'  =>  "全名" , 
	'usersettings:statistics:label:email'  =>  "电子邮件" , 
	'usersettings:statistics:label:membersince'  =>  "注册自" , 
	'usersettings:statistics:label:lastlogin'  =>  "最后登陆" , 

/**
 * Activity river
 */
	'river:all' => '所有网站的活动',
	'river:mine' => '我的活动',
	'river:friends' => '好友活动',
	'river:select' => '显示%s',
	'river:comments:more' => '+%u更多',
	'river:generic_comment' => '评论%s %s',

	'friends:widget:description' => "显示你的一些好友.",
	'friends:num_display' => "好友数量显示",
	'friends:icon_size' => "图标大小",
	'friends:tiny' => "微小",
	'friends:small' => "小的",
	
/**
 * Generic action words
 */
	
	'save'  =>  "保存" , 
	'reset' => '复位',
	'publish'  =>  "发布" , 
	'cancel'  =>  "取消" , 
	'saving'  =>  "保存中..." , 
	'update'  =>  "更新" , 
	'preview' => "预览",
	'edit'  =>  "编辑" , 
	'delete'  =>  "删除" , 
	'accept'  =>  "接受" , 
	'load'  =>  "加载" , 
	'upload'  =>  "上传" , 
	'ban'  =>  "屏蔽" , 
	'unban'  =>  "取消屏蔽" , 
	'banned' => "禁止",
	'enable'  =>  "激活" , 
	'disable'  =>  "取消激活" , 
	'request'  =>  "请求" , 
	'complete'  =>  "完成" , 
	'open'  =>  "打开" , 
	'close'  =>  "关闭" , 
  'hide' => '隐藏',
	'show' => '显示',
	'reply'  =>  "回复" , 
	'more'  =>  "更多" , 
	'comments'  =>  "评论" , 
	'import'  =>  "导入" , 
	'export'  =>  "导出" , 
	'untitled' => '无标题',
	'help' => '帮助',
	'send' => '发送',
	'post' => '发布',
	'submit' => '提交',
	'comment' => '评论',
	'upgrade' => '升级',
	'sort' => '排序',
	'filter' => '过滤器',
	'new' => '新',
	'add' => '添加',
	'create' => '创建',
	'remove' => '删除',
	'revert' => '恢复',
	
	'site' => '网站',
	'activity' => '动态',
	'members' => '成员',

	'up'  =>  "提高" , 
	'down'  =>  "降低" , 
	'top'  =>  "置顶" , 
	'bottom'  =>  "置底" , 
	'back' => '后退',

	'invite'  =>  "邀请" , 

	'resetpassword'  =>  "重置密码" , 
	'makeadmin'  =>  "设为管理员" , 
	'removeadmin'  =>  "删除管理员" , 

	'option:yes'  =>  "是" , 
	'option:no'  =>  "否" , 

	'unknown'  =>  "未知" , 

	'active'  =>  "激活" , 
	'total'  =>  "总共" , 

	'learnmore'  =>  "点击这里了解更多." , 

	'content'  =>  "内容" , 
	'content:latest'  =>  "最新动态", 
	'content:latest:blurb'  =>  "或者,点击这里查看网站最新内容." , 

	'link:text'  =>  "查看链接" , 
/**
 * Generic questions
 */
 
	'question:areyousure'  =>  "你确定吗?" ,

/**
 * Status
 */

	'status' => '状态',
	'status:unsaved_draft' => '未保存草稿',
	'status:draft' => '草稿',
	'status:unpublished' => '未发布',
	'status:published' => '已发布',
	'status:featured' => '推荐',
	'status:open' => '开放',
	'status:closed' => '关闭',

/**
 * Generic sorts
 */

	'sort:newest' => '最新',
	'sort:popular' => '最活跃',
	'sort:alpha' => '字母',
	'sort:priority' => '优先级',

/**
 * Generic data words
 */

	'title'  =>  "标题" , 
	'description'  =>  "描述" , 
	'tags'  =>  "标签" , 
	'spotlight'  =>  "关注" , 
	'all'  =>  "所有" , 
	'mine' => "我的",

	'by'  =>  "由" , 
	'none' => '无',

	'annotations'  =>  "注释" , 
	'relationships'  =>  "关系" , 
	'metadata'  =>  "元数据" , 
	'tagcloud' => "标签",
	'tagcloud:allsitetags' => "所有网站标签",

	'on' => '打开',
	'off' => '关闭',

/**
 * Entity actions
 */
	'edit:this' => '编辑',
	'delete:this' => '删除',
	'comment:this' => '评论',

/**
 * Input / output strings
 */
 
	'deleteconfirm'  =>  "你确定你要删除这个项目吗?" , 
	'deleteconfirm:plural' => "你确定要删除这些项目吗?",
	'fileexists'  =>  "文件已经被上传.要替换该文件,选择下方:" , 

/**
 * User add
 */

	'useradd:subject'  =>  "用户帐户已创建" , 
	'useradd:body'  =>  "%s 您好,

	您在%s的用户帐户已经为您创建.登录请访问:

	%s

	以下是用户登录凭证:

	用户名: %s
	密码: %s

	一旦您登录,我们强烈建议您更改您的密码." , 



/**
 * System messages
 **/

	'systemmessages:dismiss'  =>  "点击关闭" , 


/**
 * Import / export
 */
	'importsuccess'  =>  "导入数据成功." , 
	'importfail'  =>  "OpenDD 导入数据失败." , 

/**
 * Time
 */
 
	'friendlytime:justnow'  =>  "刚刚" , 
	'friendlytime:minutes'  =>  "%s 分钟前" , 
	'friendlytime:minutes:singular'  =>  "一分钟前" , 
	'friendlytime:hours'  =>  "%s 小时前" , 
	'friendlytime:hours:singular'  =>  "一小时前" , 
	'friendlytime:days'  =>  "%s 天前" , 
	'friendlytime:days:singular'  =>  "昨天" , 
	'friendlytime:date_format' => 'j F Y @ g:ia',
	
	'date:month:01'  =>  "1月 %s" , 
	'date:month:02'  =>  "2月 %s" , 
	'date:month:03'  =>  "3月 %s" , 
	'date:month:04'  =>  "4月 %s" , 
	'date:month:05'  =>  "5月 %s" , 
	'date:month:06'  =>  "6月 %s" , 
	'date:month:07'  =>  "7月 %s" , 
	'date:month:08'  =>  "8月 %s" , 
	'date:month:09'  =>  "9月 %s" , 
	'date:month:10'  =>  "10月 %s" , 
	'date:month:11'  =>  "11月 %s" , 
	'date:month:12'  =>  "12月 %s" , 


/**
 * System settings
 */

	'installation:sitename'  =>  "网站名称:" , 
	'installation:sitedescription'  =>  "你网站的简短描述(可选):" , 
	'installation:wwwroot'  =>  "网站URL(最后包括反斜杠):" , 
	'installation:path'  =>  "完整的晚装路径(最后包括反斜杠):" , 
	'installation:dataroot'  =>  "完整的数据库目录路径(最后包括反斜杠):" , 
	'installation:dataroot:warning'  =>  "你必须手动创建此目录. 它必须是和安装目录在不同的位置." , 
	'installation:sitepermissions'  =>  "默认访问权限:" , 
	'installation:language'  =>  "默认网站语言:" , 
	'installation:debug'  =>  "Debug调试提供了额外的信息可以用来诊断错误.这会让系统变慢,因此仅在有错误时才建议开启:" , 
	'installation:debug:none' => '关闭调试模式(推荐)',
	'installation:debug:error' => '只显示关键错误',
	'installation:debug:warning' => '显示错误和警告',
	'installation:debug:notice' => '记录所有错误、警告和提醒',	

	// Walled Garden support
	'installation:registration:description' => '用户注册是默认启用的.如果你不希望新用户自己能够注册,把这个关掉.',
	'installation:registration:label' => '允许新用户注册',
	'installation:walled_garden:description' => '使网站运行作为一个私人网络.这将不允许非登录用户查看除专门标记为公开的任何网站页面.',
	'installation:walled_garden:label' => '限制页面登陆用户',

	'installation:httpslogin' => "启用这个使有用户通过HTTPS完成登录.你需要在服务器上启用HTTPS这项工作.",
	'installation:httpslogin:label' => "启用HTTPS登录",
	'installation:view' => "输入视图默认为你的网站或者默认视图离开这个空白页(如果有疑问,离开作为默认):",

	'installation:siteemail' => "网站的电子邮件地址(发送系统邮件时使用):",

	'installation:disableapi' => "提供一个API来构建web服务,以便远程应用程序可以与你的网站相互配合.",
	'installation:disableapi:label' => "启用WEB服务API",

	'installation:allow_user_default_access:description' => "如果勾选此项,个人用户可以设置自己的默认访问级别,可以搁置系统默认的访问级别.",
	'installation:allow_user_default_access:label' => "允许用户默认访问",

	'installation:simplecache:description' => "简单缓存通过缓存静态内容包括一些CSS和JavaScript文件提高性能.通常你会需要这个.",
	'installation:simplecache:label' => "使用简单缓存(推荐)",

	'installation:systemcache:description' => "系统缓存通过缓存数据文件减少引擎加载时间.",
	'installation:systemcache:label' => "使用系统缓存(推荐)",

	'upgrading' => '升级...',
	'upgrade:db' => '你的数据库已升级.',
	'upgrade:core' => '你已安装升级.',
	'upgrade:unlock' => '解锁升级',
	'upgrade:unlock:confirm' => "数据库锁定当另一个数据库升级时.并发运行升级是危险的。如果你知道另一个没有运行升级你可以继续.解锁吗?",
	'upgrade:locked' => "不能升级.另一个升级正在运行.清除升级锁定,访问管理部分.",
	'upgrade:unlock:success' => "升级解锁成功.",
	'upgrade:unable_to_upgrade' => '无法升级.',
	'upgrade:unable_to_upgrade_info' =>
		'This installation cannot be upgraded because legacy views
		were detected in the Elgg core views directory. These views have been deprecated and need to be
		removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
		simply delete the views directory and replace it with the one from the latest
		package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

		If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Upgrading Elgg documentation</a>.  If you require assistance, please post to the
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',

	'update:twitter_api:deactivated' => 'Twitter API(Twitter Service派生)在升级时被释放.如果需要请手动激活它.',
	'update:oauth_api:deactivated' => 'OAuth API(OAuth Lib派生)在升级被释放.如果需要请手动激活它.',

	'deprecated:function' => '%s()被%s()弃用',
	
/**
 * Welcome
 */
 
	'welcome'  =>  "欢迎", 
	'welcome:user' => '欢迎%s',
	
/**
 * Emails
 */
	'email:settings'  =>  "电子邮件设置" , 
	'email:address:label'  =>  "你的电子邮件地址" , 

	'email:save:success'  =>  "新的电子邮件地址已保存." , 
	'email:save:fail'  =>  "你新的电子邮件地址无法保存." , 

	'friend:newfriend:subject'  =>  "%s加你为好友!" , 
	'friend:newfriend:body'  =>  "%s加你为好友!

	查看他们的个人资料,请点击这里:

	%s

	你不能回复这封邮件." , 



	'email:resetpassword:subject'  =>  "密码重置!" , 
	'email:resetpassword:body'  =>  "您好 %s,
		
	您的密码已经重置为:%s" , 
	
	
	'email:resetreq:subject'  =>  "请求新密码." , 
	'email:resetreq:body'  =>  "你好 %s,
		
	有人(IP地址为%s)已请求一个新的账户密码设置。

	如果你要求这个,点击下面的链接.否则忽略此邮件.

	%s
	" , 

/**
 * user default access
 */
 
	'default_access:settings' => "你的默认访问级别",
	'default_access:label'  =>  "默认访问" , 
	'user:default_access:success'  =>  "你新的默认访问级别已设定." , 
	'user:default_access:failure'  =>  "你新的默认访问级别无法设定." , 

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'  =>  "输入数据丢失" , 

/**
 * Comments
 */
 
	'comments:count'  =>  "%s评论" , 

	'riveraction:annotation:generic_comment'  =>  "%s评论了%s" , 

	'generic_comments:add'  =>  "添加评论" , 
	'generic_comments:post' => "发表评论",
	'generic_comments:text'  =>  "评论" , 
    'generic_comments:latest' => "最新评论",
	'generic_comment:posted'  =>  "评论已成功发布." , 
	'generic_comment:deleted'  =>  "评论被成功删除." , 
	'generic_comment:blank'  =>  "对不起,你需要在你的评论中输入内容,才可以保存." , 
	'generic_comment:notfound'  =>  "对不起,我们找不到指定的项." , 
	'generic_comment:notdeleted'  =>  "对不起，我们不能删除这个评论." , 
	'generic_comment:failure'  =>  "当添加你的评论时发生意外错误." ,
	'generic_comment:none' => '没有评论',
	'generic_comment:title' => '%s评论',
	'generic_comment:on' => '%s on %s',
	
	'generic_comment:email:subject'  =>  '您有一个新评论!', 
	'generic_comment:email:body'  =>  "您的\"%s\"有一个新的评论,来自%s.内容是:

		
	%s


	回复或者查看原始的项目,请点击这里:

	%s

	查看%s的概要,请点击这里:

	%s

	你不能回复这封邮件." , 

/**
 * Entities
 */
    'byline' => '由%s',
	'entity:default:strapline'  =>  "%s由%s创建" , 
	'entity:default:missingsupport:popup'  =>  "这个实体不能正确显示.这可能是因为它需要一个插件提供支持,现插件可能不兼容或需要升级." , 

	'entity:delete:success'  =>  "%s已经被删除." , 
	'entity:delete:fail'  =>  "%s删除失败." , 


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields'  =>  "表单缺少__token或者__ts域." , 
	'actiongatekeeper:tokeninvalid'  =>  "你正在使用的页面已经过期了.请再试一次." , 
	'actiongatekeeper:timeerror'  =>  "你正在使用的页面已经过期了.请刷新并再次尝试." , 
	'actiongatekeeper:pluginprevents'  =>  "一个扩展阻止了这个表单被提交." , 
    'actiongatekeeper:uploadexceeded' => '文件的大小超过网站管理员所设限额.',
	'actiongatekeeper:crosssitelogin' => "对不起,登录从不同的领域是不允许的.请再试一次.",


/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => '标签',
	'tags:site_cloud' => '网站云标签',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => '连接%s失败.你保存内容可能遇到问题.请刷新此页面.',
	'js:security:token_refreshed' => '连接%s恢复!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "阿拉伯语",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "捷克语",
	"cy" => "威尔士语",
	"da" => "丹麦语",
	"de" => "德语",
	"dz" => "Bhutani",
	"el" => "希腊语",
	"en" => "英语",
	"eo" => "Esperanto",
	"es" => "西班牙语",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "芬兰语",
	"fj" => "斐济语",
	"fo" => "Faeroese",
	"fr" => "法语",
	"fy" => "Frisian",
	"ga" => "爱尔兰语",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "印度尼西亚语",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "日语",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "韩语",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "拉丁语",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "拉脱维亚语",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "蒙古语",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "荷兰语",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "葡萄牙语",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "罗马尼亚语",
	"ru" => "俄语",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "斯洛伐克语",
	"sl" => "斯洛文尼亚语",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "阿尔巴尼亚语",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "瑞典语",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "泰语",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "乌兹别克语",
	"vi" => "越南语",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "中文",
	"zu" => "Zulu",
); 

add_translation('zh', $chinese); 

