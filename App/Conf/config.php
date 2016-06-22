<?php
return array(

	/* 项目设定 */
	'APP_DEBUG'             => 1,
	'SHOW_PAGE_TRACE'       => 0,
	'TMPL_CACHE_ON'			=> false,
	'APP_GROUP_LIST'        => 'Home,Admin',
	'DEFAULT_ACTION'        => 'index', // 默认操作名称
	'TMPL_PARSE_STRING'     => array('__ADMIN__'=>__ROOT__.'/'.APP_NAME.'/Tpl/default/Admin',
									'__HOME__'=>__ROOT__.'/',
									),

		//获取配置信息
		'DB_HOST'=>'',
		'DB_NAME'=>'',
		'DB_USER'=>'',
		'DB_PWD'=>'',
		'DB_PORT'=>'',
		'DB_PREFIX'=>'',

	/* URL设置 */
	'URL_ROUTER_ON'         => true,
	'URL_MODEL'             => 1,
	'URL_PATHINFO_DEPR' => '/', 			
	'URL_HTML_SUFFIX'       => '.html',

	/* 语言设置 */
	'LANG_SWITCH_ON'        => true, 
  	'DEFAULT_LANG'          => 'zh-cn',
  	'LANG_AUTO_DETECT'      => true,
	'UPLOAD_FILE_RULE'      => 'Public/',

	'APP_ROOT_PATH' => 'Public/',
	/* RBAC */
    'USER_AUTH_KEY'             =>'admin',	// 用户认证SESSION标记
    
	'KEY_AUTH' => '123ADHKFasdjhkjh1k3#!2',
		
	//短信
	
);
?>