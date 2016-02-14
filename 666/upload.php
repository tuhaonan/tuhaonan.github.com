<?php
	if (isset($_FILES["s3_file"]) && is_uploaded_file($_FILES["s3_file"]["tmp_name"]) && $_FILES["s3_file"]["error"] == 0) {
		require_once('upyun.class.php');
		require_once('config.php');

		// 获得云空间
		$bucket_name = $_POST['bucket_name'];
        
		// 获得文件
		$file_name = $_FILES["s3_file"]["name"];
		$file_tmp_name = $_FILES["s3_file"]["tmp_name"];
		$fh = fopen($file_tmp_name,'r'); 
        $upyun->writeFile("/".$file_name, $fh);
		// 你的代码
		// 可以加入错误判断 / 写入数据库 / 流程处理等等

		//返回上传后成功的地址
        echo $dl.$file_name;	

	}
?>