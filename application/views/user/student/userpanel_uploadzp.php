
<script type="text/javascript" src="styles/scripts/addCtrl.js"></script>

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
			<h3>作品上传</h3>
			<div class="clear"></div>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab2">
				<form action="#" method="post">
					<fieldset class="column-left">
						<!-- 左     侧     -->
						<p>
							<label>作品种类</label> 
							<select name="dropdown" class="medium-input" >
<?php
foreach ( $tkind as $Onetkind ){
?>
								<option value="<?=$Onetkind['id']?>"><?=$Onetkind['class_name']?></option>
<?php
}
?>
							</select>
						</p>
						<p>
							<label>作品主题</label> 
							<select name="dropdown" class="medium-input" >
<?php
foreach ( $tsub as $Onetsub ){
?>
								<option value="<?=$Onetsub['id']?>"><?=$Onetsub['subject_name']?></option>
<?php
}
?>
							</select>
						</p>
						<p>
							<label>参赛学校</label> 
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
							<span class="input-notification information png_bg">不可更改</span>
						</p>					
						<p>
							<label>报名编号</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" />
							<span class="input-notification attention png_bg">必填</span>
						</p>
						<p>
							<label>作品名称</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" />
							<span class="input-notification attention png_bg">必填</span>
						</p>
						<p>
							<label>提交时间</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value="<?=date("Y-m-d h:m:s")?>" disabled/>
							<span class="input-notification attention png_bg">必填</span>
						</p>
						<p>
							<label><font color=blue><b>参赛作品</b></font></label>
						</p>
						<table id="FileTable">
							<tr></tr>
							<tr>
								<td>
									<input class="text-input file-input datepicker" type="file" name="item_file[]" id="item_file[]" />
								</td>
							</tr>
						</table>
						<input type="hidden" name="FileNum" id="FileNum" value=1 />
						<input type="button" value="添加一个作品" id="FileButton" onclick="addFile()" />
					</fieldset>
					<fieldset class="column-right">
						<!-- 右     侧     -->
						<p>
							<label>作者姓名</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value="<?=$info['name']?>" disabled/>
							<span class="input-notification information png_bg">不可更改</span>
						</p>
						<p>
							<label>联系电话</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value="<?=$info['tel']?>" disabled/>
							<span class="input-notification information png_bg">不可更改</span>
						</p>
						<p>
							<label>电子邮箱</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value="<?=$info['email']?>" disabled/>
							<span class="input-notification information png_bg">不可更改</span>
						</p>
						<p>
							<label>指导老师</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value=""/>
						</p>
						<p>
							<label>老师电话</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" value=""/>
						</p>
						<table id="AuthorTable">
						</table>
						<p>
							<input type="hidden" name="AuthorNum" id="AuthorNum" value=1 />
							<input type="button" value="添加一个作者" id="AuthorButton" onclick="addAuthor()" />
							<input type="button" value="添加一个老师" id="TecherButton" onclick="addTecher()" />
						</p>
						<p>
							<input class="button" type="submit" value="确认信息，并上传作品" style="width:140px;height:35px;"/>
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
