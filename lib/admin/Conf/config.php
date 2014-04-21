<?php
$config = array(
	//数据库连接参数
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    );
return array_merge(include './config/config.php',$config);
?>