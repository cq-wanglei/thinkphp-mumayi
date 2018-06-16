<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
</head>
<body class="login">
<div class="login_m">
	<div class="login_boder">
		<div class="login_padding">
                   <form class="mws-form" action="#" method="post">

			<h2>用户名</h2>
			<label>
				<input type="text" name="username"  id="username" class="txt_input txt_input2" onfocus="if (value ==&#39;Your name&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;Your name&#39;}" value="Your name">
			</label>
			<h2>密码</h2>
			<label>
				<input type="password" name="userpass" id="userpass" class="txt_input"  >
			</label>
			<p class="forgot"><a href="javascript:void(0);">忘记密码?</a></p>
			<div class="rem_sub">
				<div class="rem_sub_l">
					<input type="checkbox" name="checkbox" id="save_me">
					<label for="checkbox">记住</label>
				</div>
				<label>
					<input type="button" class="sub_button" name="button" id="button" value="登录" style="opacity: 0.7;">
				</label>
			</div>
                     </form>
		</div>
	</div><!--login_boder end-->
</div><!--login_m end-->


<br />
<br />

<p align="center"> Kylingood © All rights reserved. 2010-2016</p>

</body>
</html>