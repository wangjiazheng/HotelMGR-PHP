<?php $this->load->helper('html');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title. " - 用户注册"?></title>
<base href="<?php echo base_url();?>" />
</head>
<body>
	<a href="./login">登陆</a>
	<br />
	<?php echo validation_errors(); ?>
	<?php echo form_open('user/login'); ?>
	
	<h5>
		登陆用户名
		<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
	</h5>

	<h5>
		登陆密码
		<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
	</h5>

	<h5>
		确认密码
		<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
	</h5>

	<h5>
		作者姓名
		<input type="text" name="authorname" value="<?php echo set_value('authorname'); ?>" size="50" />
	</h5>

	<h5>
		身份证号码
		<input type="text" name="sfzid" value="<?php echo set_value('"sfzid"'); ?>" size="50" />
	</h5>

	<h5>
		所属学校
		<input type="text" name="school" value="<?php echo set_value('school'); ?>" size="50" />
	</h5>

	<h5>
		联系电话
		<input type="text" name="telephone" value="<?php echo set_value('telephone'); ?>" size="50" />
	</h5>

	<h5>
		联系邮箱
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
	</h5>

	<h5>
		联系QQ号
		<input type="text" name="qq" value="<?php echo set_value('qq'); ?>" size="50" />
	</h5>

	<h5>
		邮寄地址
		<input type="text" name="address" value="<?php echo set_value('address'); ?>" size="50" />
	</h5>

	<div>
		<input type="submit" value="Submit" />
	</div>

	</form>
<?php
$this->load->view ( 'footer' );
?>
</body>
</html>
