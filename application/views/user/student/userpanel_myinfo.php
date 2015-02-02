
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
	<div class="clear"></div>
	<div class="content-box">
		<div class="content-box-header">
			<h3>我的信息</h3>
			<div class="clear"></div>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab2">
				<form action="#" method="post">
					<fieldset class="column-left">
						<p>
							<label>作者姓名</label>
							<input class="text-input medium-input" type="text" id="small-input" name="small-input" value="<?=$info['name']?>" />
						</p>
						<p>
							<label>身份证号码</label>
							<input class="text-input medium-input" type="text" id="small-input" name="small-input" value="<?=$info['sfzid']?>" />
						</p>
						<p>
							<label>作者学校</label>
							<select name="dropdown" class="medium-input" disabled="disabled">
<?php
foreach ( $schools as $OneSchool){
	if ( $OneSchool['id'] == $info['tschool'] ) {
?>
								<option value="<?=$OneSchool['id']?>" selected="selected"><?=$OneSchool['school_name']?></option>
<?php
	}else {
?>
								<option value="<?=$OneSchool['id']?>"><?=$OneSchool['school_name']?></option>
<?php
	} 
}
?>
							</select>
							<script>
								document.getElementsByTagName_r("option")(<?=$info['tschool']?>).selected=true
							</script>
						</p>
						<p>
							<label>邮寄地址</label>
							<input class="text-input large-input datepicker" type="text" id="medium-input" name="medium-input" value="<?=$info['addr']?>" />
							<span class="input-notification attention png_bg">请填写精确到门牌号</span>
						</p>
						<p>
<!-- 							<input class="button" type="submit" value="Submit" /> -->
						</p>
					</fieldset>
					<fieldset class="column-right">
						<p>
							<label>联系电话</label>
							<input class="text-input medium-input " type="text" id="small-input" name="small-input" value="<?=$info['tel']?>" />
						</p>
						<p>
							<label>联系邮箱</label>
							<input class="text-input medium-input " type="text" id="small-input" name="small-input" value="<?=$info['email']?>" />
						</p>
						<p>
							<label>联系QQ号</label>
							<input class="text-input medium-input " type="text" id="small-input" name="small-input" value="<?=$info['qq']?>" />
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
