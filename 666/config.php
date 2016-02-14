<?php
	define('YUSER','tuhaonan');   // 又拍授权用户
	define('YPASS','525945tu');    // 又拍授权密码
	define('YNAME','thn666');     // 又拍存储空间

	$upyun = new UpYun(YNAME, YUSER, YPASS);
	$dl = "http://".YNAME.".b0.upaiyun.com/";
	$upyun->setApiDomain('v0.api.upyun.com');
	$bytes = $upyun->getBucketUsage();
	$kb = $bytes / 1024;
?>