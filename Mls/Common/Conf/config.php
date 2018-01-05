<?php
return array(
	

    //'配置项'=>'配置值'
	'DB_FIELDS_CACHE' => false,
	//数据库配置信息
         'DB_TYPE'   => 'mysqli', // 数据库类型
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '123456', // 密码
        'DB_PREFIX' => 'mls_', // 数据库表前缀 
//        'DB_DSN'    => 'mysql:host=172.18.61.145;dbname=mls;charset=UTF8',
//       'DB_TYPE'   => 'mysqli', // 数据库类型
       'DB_HOST'   => '127.0.0.1', // 服务器地址
       'DB_NAME'   => 'mls', // 数据库名
       'DB_PORT'   => 3306, // 端口
       'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

	//开启调试
	'SHOW_PAGE_TRACE' => true,
	'URL_HTML_SUFFIX' => '',				//伪静态

    'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记
    'DEFAULT_TIMEZONE'      =>  'PRC',	// 默认时区
    'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码


);
