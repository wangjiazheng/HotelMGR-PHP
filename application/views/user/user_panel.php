<?php $this->load->helper('html');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<base href="<?php echo base_url();?>" />
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="styles/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="styles/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="styles/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="styles/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="styles/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="styles/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="styles/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="styles/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="styles/scripts/jquery.date.js"></script>
</head>
<body>
	<div id="body-wrapper">
		<!-- Wrapper for the radial gradient background -->
<?php
	$this->load->view ( 'user/student/usersidebar' );
	switch ($class) {
		case 'main' : // 比赛日程
			$this->load->view ( 'user/student/userpanel_main' );
			break; 
		case 'myinfo' :{// 查看个人信息
			$this->load->view ( 'user/student/userpanel_myinfo' );
			break;
		}
		case 'uploadzp' : // 上传参赛作品
			$this->load->view ( 'user/student/userpanel_uploadzp' );
			break;
		case 'displayzp' : // 查看参赛作品
			$this->load->view ( 'user/student/userpanel_displayzp' );
			break;
		case 'resetpwd' : // 修改登陆密码
			$this->load->view ( 'user/student/userpanel_resetpwd' );
			break;
	}
	?>
		</div>
<?php
// $this->load->view ( 'footer' );
?>
</body>
</html>
