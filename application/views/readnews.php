<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$news['ctitle']?> - 文章阅读  - <?=$title?></title>
<base href="<?php echo base_url();?>" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/css/styleread.css" type="text/css" />
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
				<div style="letter-spacing: .2em; font-size: .7em; text-shadow: 1px 1px 1px #000;">第六届全国大学生广告艺术大赛·吉林赛区</div>
			</div>
			<div class="login_button">
			    <ul>
				    <li><a href="./user/login">登陆</a></li> | 
				    <li><a href="./user/signup">注册</a></li>
			    </ul>
			</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="main">
		<div class="content">
			<div class="box1">
			   <h2><a><?=$news['ctitle']?></a></h2>
			   <span>[<?=$news['department']?>]&nbsp;&nbsp;<?=$news['author']?>&nbsp;&nbsp;<?=$news['ptime']?></span>
			   <p><?=$news['ccontent']?></p>
<!-- 				<div class="top_img"> -->
<!-- 				   <img src="uploads/111.jpg" alt="" /> -->
<!-- 				</div> -->
				<?php 
				if ( $news['cattachname'] != '' ) {
					echo '<p>附件列表：</p>';
					$cattachname = $news['cattachname'];
					$cattachurl = $news['cattachurl'];
					$namearr = explode("|",$cattachname);
					$urlarr = explode("|",$cattachurl);
					$id=0;
					foreach($namearr as $namea){
						echo '<p>' . ( $id + 1 ) . '、' . $namea . '&nbsp;->&nbsp;<a href="' . $urlarr[$id] . '" target="_blank">点击下载</a></p>';
						$id++ ;
					}
				}
				?>
			</div> 
		</div> 
	<div class="sidebar">
		<div class="side_top">
			<h3><?php echo ($news['leibie']=='1')?'新闻':($news['leibie']=='2'?'通知':'信息');?>列表</h3>
			<div class="list1">
			   <ul>
<!-- 				 <li><a href="#">新闻新闻新闻新闻新闻新闻新闻新&nbsp;2014-09-06</a></li> -->
<!-- 				 <li><a href="#">新闻新闻新闻新闻新闻新闻新闻...&nbsp;2014-09-06</a></li> -->
				 <?php
				 foreach ( $lists as $litem ){
				 	echo '<li><a href="/news/view/' . $litem['id'] .'/' . $litem['leibie'] .'">[' . $litem['time'] .']&nbsp;' . $litem['title'] .'</a></li>';
				 }
				 ?>
			   </ul>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="footer_grid1">
		    <h3>About Us</h3>
			<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
		</div>
		<div class="footer_grid2">
			<h3>Navigate</h3>
			<div class="f_menu">
				<ul>
			      <li><a href="index.html">Home</a></li>
			      <li><a href="single.html">Articles</a></li>
			      <li><a href="contact.html">Contact</a></li>
			      <li><a href="#">Write for Us</a></li>
			      <li><a href="#">Submit Tips</a></li>
			      <li><a href="#">Privacy Policy</a></li>
			   </ul>
			</div>
		</div>
	<div class="footer_grid3">
		<h3>We're Social</h3>
		<div class="img_list">
		   <ul>
		     <li><img src="styles/images/facebook.png" alt="" /><a href="#">Facebook</a></li>
		     <li><img src="styles/images/flickr.png" alt="" /><a href="#">Flickr</a></li>
		     <li><img src="styles/images/youtube.png" alt="" /><a href="#">Youtube</a></li>
		     <li><img src="styles/images/twitter.png" alt="" /><a href="#">Twitter</a></li>
		     <li><img src="styles/images/yelp.png" alt="" /><a href="#">Help</a></li>
		   </ul>
		</div>
	</div>
	</div>
<div class="clear"></div>
</div>
<div class="f_bottom">
	<p>&#169; Copyright 2014 | <?=$title?> | 吉林大学文学院广告系 · 王昕 | Powered by <a href="mailto:wangjz2010@qq.com">WangJiazheng</a></p>
</div>
</body>
</html>

