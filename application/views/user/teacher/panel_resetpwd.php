<script language="javaScript">
function check(){
	var passWord0 = document.form1.passWord0.value;
	var passWord1 = document.form1.passWord1.value;
	var passWord2 = document.form1.passWord2.value;
	if ( passWord0=="" || passWord1=="" || passWord2=="" ){
		alert("任意信息不能为空，请重新填写！");
		return false;
	}else if ( passWord1 != passWord2 ){
		alert("两次密码输入不一致！");
		return false;
	}else{
		return true;
	}
}
</script>
<div id="main-content">
	<!-- Main Content Section with everything -->
	<noscript>
		<!-- Show a notification if the user has disabled javascript -->
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
	<div class="clear"></div>
	<div class="content-box">
		<!-- Start Content Box -->
		<div class="content-box-header">
			<h3>修改密码</h3>
			<div class="clear"></div>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab2">
				<form id=form1 name="form1" method="post" action="/user/resetpwd" onsubmit="return check()">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>请输入原密码</label> <input class="text-input small-input" type="password" id="small-input" name="passWord0" /> <br /> <small>该密码是您之前登陆系统使用的密码！</small>
						</p>
						<p>
							<label>请输入新密码</label> <input class="text-input small-input" type="password" id="small-input" name="passWord1" />
						</p>
						<p>
							<label>请确认新密码</label> <input class="text-input small-input" type="password" id="small-input" name="passWord2" /> <span class="input-notification information png_bg">请确保两次新密码一致!</span>
						</p>
						<p>
							<input class="button" type="submit" value="Submit" />
						</p>
					</fieldset>
					<div class="clear"></div>
				</form>
			</div>
			<!-- End #tab2 -->
		</div>
		<!-- End .content-box-content -->
	</div>
	<div class="clear"></div>
	<div id="footer">
		<small>&#169; Copyright 2014 | Powered by <a href="mailto:wangjz2010@qq.com">WangJiazheng</a></small> |
	</div>
</div>
