<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'manage', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'rs_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

	// 配置文件增加设置
	"URL_MODEL"		=>3,
	 'USER_AUTH_MODEL'		=>'Member',	// 默认验证数据表模
	 'RBAC_SUPERADMIN'=>'1106010039',
	 'ADMIN_AUTH_KEY'=>'superadmin',
	 'USER_AUTH_ON'		=>true,//是否需要认证
	 'USER_AUTH_TYPE'=>1, //认证类型1为登录验证，2代表实时验证
	 'USER_AUTH_KEY'=>"uid", //用户认证识别号
	 'REQUIRE_AUTH_MODULE'=>"",  //需要认证模块就
	'NOT_AUTH_MODULE'		=>	'Index',
	 'NOT_AUTH_ACTION'=>"", //无需认证模块是控制器
	 'USER_AUTH_GATEWAY'=>"Public/index", //认证网关
	 'RBAC_DB_DSN'=>"",  //数据库连接DSN
	 'RBAC_ROLE_TABLE'=>"rs_role", //角色表名称
	 'RBAC_USER_TABLE'=>"rs_role_user",//用户表名称
	 'RBAC_ACCESS_TABLE'=>"rs_access",//权限表名称
	 'RBAC_NODE_TABLE'=>"rs_node", //节点表名称



	'URL'			=>"http://localhost/luomanage/",
	"WNAME"			=>"人事工资管理系统",
);