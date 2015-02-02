
<div id="sidebar">
	<div id="sidebar-wrapper">
		<!-- Sidebar with logo and menu -->
		<h1 id="sidebar-title">
			<a href="#">Simpla Admin</a>
		</h1>
		<!-- Logo (221px wide) -->
		<a href="#">
			<img id="logo" src="styles/images/logo.png" alt="Simpla Admin logo" />
		</a>
		<!-- Sidebar Profile links -->
		<div id="profile-links">
			Hello,<a><font color=yellow><b><?=$username?></b></font></a>, welcome back here!
			<br /> <br />
			<a href="/" target="_blank" title="查看主页">查看主页</a>&nbsp;|&nbsp;<a href="/user/logout" title="点击退出">退出</a>
		</div>
		<ul id="main-nav">
			<!-- Accordion Menu -->
			<li>
				<a href="notice/view/main" class="nav-top-item no-submenu <?php echo $class=='main'?'current':''; ?>">大赛日程 </a>
			</li>
			<li>
				<a href="#" class="nav-top-item <?php echo ($class=='articlepub'||$class=='articlemgr')?'current':''; ?>">新闻通知</a>
				<ul>
					<li>
						<a <?php echo $class=='articlepub'?'class="current"':''; ?> href="user/mypanel/articlepub">发布最新文章</a>
					</li>
					<li>
						<a <?php echo $class=='articlemgr'?'class="current"':''; ?> href="user/mypanel/articlemgr">管理所有文章</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class="nav-top-item <?php echo ($class=='comprelmgr'||$class=='authrelmgr'||$class=='myrelmgr'||$class=='tipmsgmgr')?'current':''; ?>">参赛提醒</a>
				<ul>
					<li>
						<a <?php echo $class=='comprelmgr'?'class="current"':''; ?> href="user/mypanel/comprelmgr">修改大赛日程</a>
					</li>
					<li>
						<a <?php echo $class=='authrelmgr'?'class="current"':''; ?> href="user/mypanel/authrelmgr">修改作者相关</a>
					</li>
					<li>
						<a <?php echo $class=='myrelmgr'?'class="current"':''; ?> href="user/mypanel/myrelmgr">修改与我相关</a>
					</li>
					<li>
						<a <?php echo $class=='tipmsgmgr'?'class="current"':''; ?> href="user/mypanel/tipmsgmgr">管理提示消息</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class="nav-top-item <?php echo ($class=='classmgr'||$class=='subjectmgr'||$class=='schoolmgr'||$class=='exportzp')?'current':''; ?>">参赛管理</a>
				<ul>
					<li>
						<a <?php echo $class=='classmgr'?'class="current"':''; ?> href="user/mypanel/classmgr">作品类别管理</a>
					</li>
					<li>
						<a <?php echo $class=='subjectmgr'?'class="current"':''; ?> href="user/mypanel/subjectmgr">作品主题管理</a>
					</li>
					<li>
						<a <?php echo $class=='schoolmgr'?'class="current"':''; ?> href="user/mypanel/schoolmgr">参赛学校管理</a>
					</li>
					<li>
						<a <?php echo $class=='exportzp'?'class="current"':''; ?> href="user/mypanel/exportzp">查看导出作品</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class="nav-top-item <?php echo ($class=='siteinfo'||$class=='siteopen'||$class=='useropen'||$class=='backup')?'current':''; ?>">网站设置</a>
				<ul>
					<li>
						<a <?php echo $class=='siteinfo'?'class="current"':''; ?> href="user/mypanel/siteinfo">网站基本信息</a>
					</li>
					<li>
						<a <?php echo $class=='siteopen'?'class="current"':''; ?> href="user/mypanel/siteopen">网站开关设置</a>
					</li>
					<li>
						<a <?php echo $class=='backup'?'class="current"':''; ?> href="user/mypanel/backup">网站数据备份</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class="nav-top-item <?php echo $class=='resetpwd'?'current':''; ?>">安全设置</a>
				<ul>
					<li>
						<a <?php echo $class=='resetpwd'?'class="current"':''; ?> href="user/mypanel/resetpwd">修改登陆密码</a>
					</li>
					<li>
						<a href="/user/logout">退出当前登陆</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- End #main-nav -->
		<div id="messages" style="display: none">
			<!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
			<h3>3 Messages</h3>
			<p>
				<strong>17th May 2009</strong> by Admin<br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
			</p>
			<p>
				<strong>2nd May 2009</strong> by Jane Doe<br /> Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
			</p>
			<p>
				<strong>25th April 2009</strong> by Admin<br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
			</p>
			<form action="#" method="post">
				<h4>New Message</h4>
				<fieldset>
					<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
				</fieldset>
				<fieldset>
					<select name="dropdown" class="small-input">
						<option value="option1">Send to...</option>
						<option value="option2">Everyone</option>
						<option value="option3">Admin</option>
						<option value="option4">Jane Doe</option>
					</select> <input class="button" type="submit" value="Send" />
				</fieldset>
			</form>
		</div>
		<!-- End #messages -->
	</div>
</div>
<!-- End #sidebar -->
