<?php
require_once('upyun.class.php');
require_once('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>文件上传 - 又拍云存储 -  演示测试版 </title>
<script type='text/javascript' src='js/jquery-1.5.2.min.js'></script>
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/swfupload.swfobject.js"></script>
<script type="text/javascript" src="js/fileprogress.js"></script>
<script type="text/javascript" src="js/handlers.js"></script>
<script type='text/javascript' src='js/application.js'></script>
<link rel='stylesheet' href='css/bootstrap-1.2.0.min.css'></link>
<link rel='stylesheet' href='css/app.styles.css'></link>
</head>
<body>
<div id='wrapper'>
<div style="z-index: 5;" class="topbar-wrapper">
<div class="topbar">
      <div class="topbar-inner">
        <div class="container">
          <h3><a href="">又拍云存储_文件上传_演示测试版</a></h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Upload Modal -->
	<div style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1" class="modal">
		<form name="s3_upload_form" id="s3_upload_form" method="post" action="">
		<div class="modal-header">
			<h3>又拍云存储<small>支持所有文件后缀</small></h3>
			<!-- <a class="close" href="#">&times;</a> -->
		</div>
		<div class="modal-body">
		   <p></p>
			<div class="clearfix">
            <label for="normalSelect">选择又拍云存储空间</label>
            <div class="input">
              <select name="bucket_name" id="bucket_name">
							<option value="<? require_once('config.php'); echo YNAME; ?>">云存储</option>
							<!-- <option value="cloudimage">Cloud Image</option> -->
              </select>
            </div>
          </div>
			<div class="clearfix">
				<label for="xlInput">选择需要上传的文件</label>
				<div class="input">
					<input type="text" size="30" name="FileInput" id="FileInput" class="xlarge" disabled="disabled" value="请选择文件"/>
					<span id="spanButtonPlaceholder"></span>
				</div>
          </div>
		  <!--
		  <div class="clearfix">
            <label id="optionsRadio">权限设置</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="radio" value="public" name="perm" checked="checked">
                    <span><strong>公开</strong> <small>所有人可浏览.</small></span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="radio" value="private" name="perm">
                    <span><strong>加密</strong> <small>仅内部浏览. </small></span>
                  </label>
                </li>
              </ul>
            </div>
          </div> -->
			<div class="clearfix">
				<label for="xlInput">下载链接</label>
				<div class="input">
					<input type="text" size="30" name="s3_url" id="s3_url" class="xlarge" value="上传成功后返回链接"/>
				</div>
          </div>
		</div>
		<div class="modal-footer">
			<div class="flash" id="fsUploadProgress"></div>
			<button class="btn primary" id="s3_upload" type="submit">上传</button>
			<a class="btn secondary reload" title="点击刷新可上传更多文件" href="#">刷新</a>
		</div>
		</form>
	</div>
	
	<div class="center">
	Demo<a href="http://www.ushezu.com">美国服务器合租</a>由制作 	
	</div>

</div>
</body>
</html>