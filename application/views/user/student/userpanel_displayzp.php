
<div id="main-content">
	<noscript>
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please<a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a>
				your browser or<a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a>
				Javascript to navigate the interface properly. Download From<a href="http://www.exet.tk">exet.tk</a>
			</div>
		</div>
	</noscript>
	<div class="clear"></div>
	<div class="content-box">
		<div class="content-box-header">
			<h3>作品列表</h3>
			<div class="clear"></div>
		</div>
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab1">
				<div class="notification attention png_bg">
					<a href="#" class="close"><img src="styles/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div>This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.</div>
				</div>
				<table>
					<thead>
						<tr>
							<th>报名编号</th>
							<th>作品名称</th>
							<th>种类</th>
							<th>主题</th>
							<th>姓名</th>
							<th>指导老师</th>
							<th>提交时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
<?php foreach ( $wlist as $oneWork ): ?>
						<tr>
							<td><a href="/work/showwork/<?=$oneWork['tsid']?>" title="点击查看详情"><?=$oneWork['t1']?></a></td>
							<td><?=$oneWork['t7']?></td>
							<td><?=$this->Work_model->getNameByClass($oneWork['tkind'])?></td>
							<td><?=$this->Work_model->getNameBySubject($oneWork['tsub'])?></td>
							<td><?=$oneWork['t2']?></td>
							<td><?=$oneWork['t5']?></td>
							<td><?=$oneWork['t8']?></td>
							<td>
								<!-- Icons --> <a href="#" title="Edit">
									<img src="styles/images/icons/pencil.png" alt="Edit" />
								</a> <a href="#" title="Delete">
									<img src="styles/images/icons/cross.png" alt="Delete" />
								</a> <a href="#" title="Edit Meta">
									<img src="styles/images/icons/hammer_screwdriver.png" alt="Edit Meta" />
								</a>
							</td>
						</tr>
<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="9">
								<div class="pagination">
									<a title="First Page">&laquo; First</a>
									<a title="Previous Page">&laquo; Previous</a>
									<a class="number" title="1">1</a>
									<a class="number" title="2">2</a>
									<a class="number current" title="3">3</a>
									<a class="number" title="4">4</a>
									<a title="Next Page">Next &raquo;</a>
									<a title="Last Page">Last &raquo;</a>
								</div>
								<div class="clear"></div>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div id="footer">
		<small>&#169; Copyright 2014 | Powered by <a href="mailto:wangjz2010@qq.com">WangJiazheng</a></small> |
	</div>
</div>
