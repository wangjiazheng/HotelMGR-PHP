
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
			Hello,<a><b><?=$username?></b></a>, welcome back here!
			<br /> <br />
			<a href="/" target="_blank" title="查看主页">查看主页</a>&nbsp;|&nbsp;<a href="/user/logout" title="点击退出">退出</a>
		</div>
		<ul id="main-nav">
			<li>
				<a href="notice/view/main" class="nav-top-item no-submenu <?php echo $class=='main'?'current':''; ?>">大赛日程</a>
			</li>
			<li>
				<a href="" class="nav-top-item <?php echo $class=='myinfo'?'current':''; ?>">我的信息</a>
				<ul>
					<li>
						<a <?php echo $class=='myinfo'?'class="current"':''; ?> href="user/mypanel/myinfo">查看个人信息</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="" class="nav-top-item <?php echo ($class=='uploadzp'||$class=='displayzp')?'current':''; ?>">我的作品</a>
				<ul>
					<li>
						<a <?php echo $class=='uploadzp'?'class="current"':''; ?> href="work/uploadzp">上传参赛作品</a>
					</li>
					<li>
						<a <?php echo $class=='displayzp'?'class="current"':''; ?> href="work/displayzp">查看参赛作品</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="" class="nav-top-item <?php echo $class=='resetpwd'?'current':''; ?>">安全设置</a>
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
	</div>
</div>
<!-- End #sidebar -->
