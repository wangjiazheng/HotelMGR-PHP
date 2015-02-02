
<div id="main-content">
	<noscript>
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please
				<a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a>
				your browser or
				<a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a>
				Javascript to navigate the interface properly. Download From
				<a href="http://www.exet.tk">exet.tk</a>
			</div>
		</div>
	</noscript>
	<h2><?=$title?></h2>
	<p id="page-intro"><?=WebSite_Static_Date?>比赛日程</p>
	<div class="clear"></div>
<?php foreach ($attention as $attentionvalue): ?>
	<div class="notification attention png_bg">
		<a href="#" class="close">
			<img src="styles/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		</a>
		<div><?=$attentionvalue['aboutMe']?></div>
	</div>
<?php endforeach; ?>
<?php foreach ($information as $informationvalue): ?>
	<div class="notification information png_bg">
		<a href="#" class="close">
			<img src="styles/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		</a>
		<div><?=$informationvalue['aboutMe']?></div>
	</div>
<?php endforeach; ?>
	<div class="clear"></div>
	<div class="content-box column-left">
		<div class="content-box-header">
			<h3>大赛日程</h3>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab">
			<?=$aboutSite['aboutSite']?>
			</div>
		</div>
	</div>
	<div class="content-box column-right">
		<div class="content-box-header">
			<h3>与我相关</h3>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab">
			<?=$aboutMe['aboutMe']?>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div id="footer">
		<small>&#169; Copyright 2014 | Powered by <a href="mailto:wangjz2010@qq.com">WangJiazheng</a></small> |
	</div>
</div>
