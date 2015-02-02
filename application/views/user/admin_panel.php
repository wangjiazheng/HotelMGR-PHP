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
	$this->load->view ( 'user/teacher/adminsidebar' );
	switch ($class) {
		case 'main' : // 比赛日程
			$this->load->view ( 'user/teacher/panel_main' );
			break;
		case 'articlepub' :// 发布最新文章
			$this->load->view ( 'user/teacher/panel_articlepub' );
			break;
		case 'articlemgr' :// 管理所有文章
			$this->load->view ( 'user/teacher/panel_articlemgr' );
			break;
		case 'comprelmgr' :// 修改大赛日程
			$this->load->view ( 'user/teacher/panel_comprelmgr' );
			break;
		case 'authrelmgr' :// 修改作者相关
			$this->load->view ( 'user/teacher/panel_authrelmgr' );
			break;
		case 'myrelmgr' :// 修改与我相关
			$this->load->view ( 'user/teacher/panel_myrelmgr' );
			break;
		case 'tipmsgmgr' :// 管理提示消息
			$this->load->view ( 'user/teacher/panel_tipmsgmgr' );
			break;
		case 'classmgr' :// 作品类别管理
			$this->load->view ( 'user/teacher/panel_classmgr' );
			break;
		case 'subjectmgr' :// 作品主题管理
			$this->load->view ( 'user/teacher/panel_subjectmgr' );
			break;
		case 'schoolmgr' :// 参赛学校管理
			$this->load->view ( 'user/teacher/panel_schoolmgr' );
			break;
		case 'exportzp' :// 查看导出作品
			$this->load->view ( 'user/teacher/panel_exportzp' );
			break;
		case 'siteinfo' :// 网站基本信息
			$this->load->view ( 'user/teacher/panel_siteinfo' );
			break;
		case 'siteopen' :// 网站开关设置
			$this->load->view ( 'user/teacher/panel_siteopen' );
			break;
		case 'backup' :// 网站数据备份
			$this->load->view ( 'user/teacher/panel_backup' );
			break;
		case 'resetpwd' :// 修改登陆密码
			$this->load->view ( 'user/teacher/panel_resetpwd' );
			break;
	}
?>
	</div>
<?php
// $this->load->view ( 'footer' );
?>
</body>
</html>
