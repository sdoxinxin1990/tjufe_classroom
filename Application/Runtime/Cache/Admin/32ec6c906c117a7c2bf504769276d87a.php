<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Simpla Admin</title>
		<!--                       CSS                       -->
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/reset.css" type="text/css" media="screen" />
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/style.css" type="text/css" media="screen" />
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="/app_tjufe/SimplaAdmin/resources/css/invalid.css" type="text/css" media="screen" />
		<!--                       Javascripts                       -->
		<!-- jQuery -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery-1.3.2.min.js"></script>
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/simpla.jquery.configuration.js"></script>
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/facebox.js"></script>
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="/app_tjufe/SimplaAdmin/resources/scripts/jquery.wysiwyg.js"></script>
	</head>

	<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<a href="#"><img id="logo" src="/app_tjufe/image/logo.png" alt="Simpla Admin logo" style="width: 130px" /></a>
			</div>
			<!-- End #logn-top -->
			<div id="login-content">
				<form action="/app_tjufe/index.php/Admin/Login/login">
					<div class="notification information png_bg">
						<div>帐号登录（只限系统管理员）</div>
					</div>
					<p>
						<label style="line-height: 28px;">账号</label>
						<input class="text-input" type="text" name="id" required/>
					</p>
					<div class="clear"></div>
					<p>
						<label style="line-height: 28px;">密码</label>
						<input class="text-input" type="password" name="password" required/>
					</p>
					<div class="clear"></div>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="登录" />
					</p>
				</form>
			</div>
			<!-- End #login-content -->
		</div>
		<!-- End #login-wrapper -->
	</body>

</html>