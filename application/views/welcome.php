<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$title?></title>
<base href="<?php echo base_url();?>" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/css/welmain.css" type="text/css" />
</head>
<body>
	<div id="header">
		<div class="wrap">
			<h1 id="logo">
				<a href="">第六届全国大学生广告艺术大赛·吉林赛区</a>
			</h1>
			<p>
				<br /><a href="./user/login"><b>登陆</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./user/signup"><b>注册</b></a>
			</p>
		</div>
	</div>
	<div class="wrap">
		<div id="main">
			<div class="l">
				<h2>大广赛简介</h2>
				<img src="styles/images/idealogo.png" alt="logo" />
				<p>全国大学生广告艺术大赛（大广赛），由教育部高等教育司主办、教育部高等学校新闻学学科教学指导委员会组织实施，中国传媒大学与中国高等教育学会广告教育专业委员会等单位共同承办，是面向全国在校大学生的一项群众性的广告策划创意实践活动。目的在于活跃大学生的课外文化生活，激发大学生的创意灵感，加强大学生实践能力、创新能力和合作精神的培养，推动大学新闻传播教育的人才培养模式和实践教学的改革，为优秀人才脱颖而出创造良好的竞赛平台，不断提高人才培养质量。</p>
				<p>
					<a href="http://www.sun-ada.net/htm/01-about.html" target="_blank">&raquo; 了解更多</a>
				</p>
			</div>
			<div class="r">
<?php
foreach ( $news as $news_item ) {
	echo "<h2><a target=\"_blank\" href=\"/news/view/".$news_item['id']."/1\">" . $news_item['title'] . "</a></h2>";
	echo "<p>" . $news_item['guide'] . "</p>";
}
?>
			</div>

			<div class="line"></div>

			<div class="l">
				<h2><a target="_blank" href="/news/view/<?php echo $info[0]['id'] ?>/3"><?php echo $info[0]['title'] ?></a></h2>
				<p><?php echo $info[0]['guide'] ?></p>
			</div>
			<div class="r">
				<h2><a target="_blank" href="/news/view/<?php echo $info[1]['id'] ?>/3"><?php echo $info[1]['title'] ?></a></h2>
				<p><?php echo $info[1]['guide'] ?>
				
				
				<p>
			
			</div>
		</div>

		<div id="side">
			<ul>
<?php foreach ($notice as $notice_item): ?>
				<li>
					<?php echo intval($notice_item['level'])>0?'<img src="styles/images/star.png"/>':''; ?><a target="_blank" href="/news/view/<?php echo $notice_item['id'] ?>/2"><?php echo $notice_item['title'] ?></a>
					<br /><?php echo $notice_item['guide']?>
				</li>
<?php endforeach ?>
			</ul>
		</div>

		<div id="footer">
			<ul>
				<li class="title">Item group #1</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
			</ul>
			<ul>
				<li class="title">Item group #2</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
				<li>
					<a href="#">Ut enim ad minim</a>
				</li>
			</ul>
			<p>
				&#169; Copyright 2014 <?=$title?><br/>吉林大学文学院广告系 · 王昕<br/>电话：0431-85167034<br/>邮箱：<a href="mailto:wx_jlu@aliyun.com">wx_jlu@aliyun.com</a>
			</p>
		</div>
	</div>
</body>
</html>