
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
	<div class="content-box">
		<!-- Start Content Box -->
		<div class="content-box-header">
			<h3>网站开关设置</h3>
			<div class="clear"></div>
		</div>
		<!-- End .content-box-header -->
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab2">
				<form action="#" method="post">
					<fieldset>
						<p>
							<label>网站首页</label> 当前状态：<font color=red><b><?php echo $welcon?'开启':'关闭'; ?></b></font>&nbsp;&nbsp;&nbsp;
							<button type="button" onclick="window.location='/user/setSiteStat/welcomeon/<?php echo !$welcon?'1':'0'; ?>'"><?php echo !$welcon?'开启':'关闭'; ?></button>
						</p>
						<p>
							<label>登陆首页</label> 当前状态：<font color=red><b><?php echo $siteon?'开启':'关闭'; ?></b></font>&nbsp;&nbsp;&nbsp;
							<button type="button" onclick="window.location='/user/setSiteStat/loginon/<?php echo !$siteon?'1':'0'; ?>'"><?php echo !$siteon?'开启':'关闭'; ?></button>
						</p>
						<p>
							<label>用户注册</label> 当前状态：<font color=red><b><?php echo $userregon?'开启':'关闭'; ?></b></font>&nbsp;&nbsp;&nbsp;
							<button type="button" onclick="window.location='/user/setSiteStat/userregon/<?php echo !$userregon?'1':'0'; ?>'"><?php echo !$userregon?'开启':'关闭'; ?></button>
						</p>
					</fieldset>
					<div class="clear"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div id="footer">
		<small>&#169; Copyright 2014 | Powered by <a href="mailto:wangjz2010@qq.com">WangJiazheng</a></small> |
	</div>
</div>
