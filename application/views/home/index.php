<div id="home-recomend">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-sm-9">
				<div class="panel-box bg-white">
					<div class="head">
						<ul id="illumi-tabs" class="nav nav-tabs">
							<li class="tab-rcm active"><a href="<?=base_url('home')?>">Recommended</a></li>
							<li class="tab-fed"><a href="<?=base_url('home/feed')?>">News Feed</a></li>
							<li class="tab-dcs"><a href="<?=base_url('home/discussion')?>">discussion</a></li>
						</ul>	
					</div>
				</div>

				<div id="load-section-actv" ng-controller="SectionBooksController" ng-init="fetchcontent_tbl('<?=site_url()?>','section/fetch_content_tbl','M01')">
					<div class="panel-box" ng-if="!content_tbl">
						<div class="panel-loading bg-white">
							<div class="loader"></div>
							<span class="label">Please wait for a moment</span>
						</div>
					</div>
					<div ng-if="content_tbl" ng-repeat="c in content_tbl">
						<div class="panel-box bg-white">
							<div class="head"><h4>{{c.name}}</h4></div>
							<div class="body">
								<div ng-include="c.layout_view"  onload="loaded_ctn = true"></div>
								<div class="panel-box" ng-if="!loaded_ctn">
									<div class="panel-loading">
										<div class="loader"></div>
										<span class="label">Please wait for a moment</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		

			<?php $this->load->view('widgets/book-modal');?>

			<div class="col-xs-12 col-md-3 col-sm-3 hidden-xs" style="margin-top: 20px" ng-controller="SidebarController" ng-init="fetchall('<?=site_url()?>','section/sidebar_tbl','M01')">
				<div id="sidebar_tbl">
					<div class="panel-box bg-white" ng-if="!sidebar">
						<div class="panel-loading">
							<div class="loader"></div>
							<span class="label">Please wait for a moment</span>
						</div>
					</div>
					<div class="content" ng-if="sidebar" ng-repeat="sb in sidebar">
						<div class="widget" ng-if="sb.ispath == 1">
							<div ng-include="sb.widgets"></div>
						</div>
						<div ng-if="sb.ispath != 1">
							<div class="panel-box bg-white">
								<div class="head"><h4>{{sb.name}}</h4></div>
								<div class="body">
									<div ng-include="sb.widgets" onload="loaded_sdb = true"></div>
									<div class="panel-box" ng-if="!loaded_sdb">
										<div class="panel-loading">
											<div class="loader"></div>
											<span class="label">Please wait for a moment</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>