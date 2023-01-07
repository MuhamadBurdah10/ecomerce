<div id="home-discussion" ng-controller="CommunityController">
	<div class="container-fluid" ng-init="fetchalldiscussnbook('<?=base_url()?>','community/fetchalldiscussnbook')">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-sm-9">
				<div class="panel-box bg-white">
					<div class="head">
						<ul id="illumi-tabs" class="nav nav-tabs">
							<li class="tab-rcm"><a href="<?=base_url('home')?>">Recommended</a></li>
							<li class="tab-fed"><a href="<?=base_url('home/feed')?>">News Feed</a></li>
							<li class="tab-dcs active"><a href="<?=base_url('home/discussion')?>">discussion</a></li>
						</ul>	
					</div>
				</div>

				<div class="discuss-book-list">
					<div class="panel-box bg-white">
						<div class="panel-loading" ng-if="!listdiscussbook">
							<div class="loader"></div>
							<span class="label">Please wait for a moment</span>
						</div>
					</div>
					<div class="panel-box bg-white" ng-if="listdiscussbook" ng-repeat="bd in listdiscussbook">
						<div class="head" style="padding-top: 20px">
							<div class="list-desc-books">
								<div class="row">
									<div class="col-xs-12 col-md-2 col-sm-2">
										<div class="im-bk">
											<!-- tambah link untuk buku @fahmi -->
											<a href="<?=site_url('book/show/')?>{{bd.code}}/{{bd.title.split(' ').join('-')}}"><img class="cover" src="<?=base_url()?>{{(bd.cover)? bd.cover:'./assets/img/icon/user.png'}}" title="{{bd.titlereview}}" width="100%"></a>
											<div class="hidden-xs hidden-sm hover-action-book" id="hover-btn-img" ng-controller="BooksController">
												<div class="row brs">
													<div class="col-md-4 no-pad">
														<div class="dropdown">
														  <button class="btn btn-secondary dropdown-toggle btn-nv " type="button" id="dropdownBookStatus-{{bd.book_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														    <i class="fa fa-bookmark"></i>
														  </button>
														  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownBookStatus-{{bd.book_id}}" 
														  ng-init="fetchbookhasstatus('<?=base_url()?>','/book/fetchbookhasstatus',bd.book_id)">
														    <button ng-repeat="lr in lbooksr" type="button" class="dropdown-item {{(lr.hasbookid) ? 'active':''}}"
														       ng-click="changeMyBookStatus($event)"
														       data-bookid="{{bd.book_id}}"
														       data-bookstatusid="{{lr.hasbookid}}"
														       data-status="{{lr.id}}"
														       data-path="<?=base_url()?>"
														       data-dir="/book/changebookstatus" >
														    	{{lr.name}}
													    	</button>
														  </div>
														</div>
													</div>
													<div class="col-md-4 no-pad">
														<div class="self-popup">
															<button class="btn btn-secondary btn-nv" type="button" data-toggle="collapse" data-target="#collapseCollections-{{bd.code}}" aria-expanded="false" aria-controls="collapseCollections">
																<i class="fa fa-plus"></i>
															</button>
															<div id="collapseCollections-{{bd.code}}" class="collapse popup-window" ng-init="getmycollections('<?=base_url()?>','/collections/fetchmycollection',bd.book_id)">
																<div class="list">
																	<a ng-repeat="bk in listcollections | orderBy:'collection_id' | limitTo:3" role="button" class="dropdown-item"
																    		ng-click="addcollectionbooks($event)"
																    		data-path="<?=base_url()?>"
																    		data-dir="/collections/addbooks"
																    		data-bookid="{{bd.book_id}}"
																    		data-collectionid="{{bk.collection_id}}">
																    	<i class="fa fa-{{(bk.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																    	{{bk.name}}
															    	</a>
														    	</div>
														    	
														    	<div class="list-more showmore-{{bd.code}} collapse" style="left: 201px">
														    		<a ng-repeat="bk in listcollections | orderBy:'-collection_id' | limitTo:(listcollections.length-3)" role="button" class="dropdown-item"
																    		ng-click="addcollectionbooks($event)"
																    		data-path="<?=base_url()?>"
																    		data-dir="/collections/addbooks"
																    		data-bookid="{{bd.book_id}}"
																    		data-collectionid="{{bk.collection_id}}">
																    	<i class="fa fa-{{(bk.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																    	{{bk.name}}
															    	</a>
														    	</div>
														    	<div class="show-more-collection" ng-if="listcollections.length > 3">
													    			<div class="separate"></div>
														    		<button class="dropdown-item" type="button" data-toggle="collapse" data-target=".showmore-{{bd.code}}" aria-expanded="false" >Show more <span class="pull-right"><i class="fa fa-angle-right"></i></span></button>
														    	</div>

														    	<div class="separate"></div>
														    	<button class="dropdown-item" type="button" data-toggle="collapse" data-target="#create-new-collection-{{bd.code}}" aria-expanded="false" aria-controls="create-new-collection-{{bd.code}}">Create new</button>
														    	<div class="frm-crt-coll collapse" id="create-new-collection-{{bk.code}}">
														    		<div id="smpl-create-collection" class="form-flat">
														    			<label>Collection name</label>
														    			<input type="text" name="name" class="txt-nw-coll" autocomplete="off" data-path="<?=base_url()?>" data-dir="/collections/saveselfcollection" data-bookid="{{bd.book_id}}" required placeholder="Type here..">
														    		</div>
														    	</div>																		    	
														    	<div class="separate"></div>
														    	<div class="close-collapse cursor" title="close collections"  data-toggle="collapse" data-target="#collapseCollections-{{bd.code}}" aria-expanded="false" aria-controls="collapseCollections">
														    		<i class="fa fa-arrow-circle-o-up"></i>
														    	</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 no-pad">
														<button class="btn btn-secondary btn-nv vw-book" data-code="{{bd.code}}">
																<i class="fa fa-info-circle"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-10 col-sm-10">
										<div class="list-discuss">
											<div class="discuss" ng-repeat="td in bd.topics">
												<div class="title">
													<p data-id="{{td.book_discuss_id}}">
														<a class="name" href="<?=base_url('community/discuss/')?>KMQSDBK000{{td.book_discuss_id}}/{{td.title.split(' ').join('-')}}">{{td.title}}</a>
														<span class="pull-right hidden-xs">
															<span class="totalpost">0 posts</span>
															<span class="totalpostnew">(0 new)</span>
														</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<div class="foot">
<!-- 							<div id="action-love-comments" class="pull-left" ng-controller="ActionsController">
								<div title="love {{bd.title}}" class="{{(bd.isloved) ? 'loved':'love'}}" ng-click="loverespon($event)" data-id="{{bd.book_discuss_id}}" data-type="books_discussion" data-path="<?=base_url()?>" data-dir="love/action" data-love="{{(bd.isloved) ? bd.isloved : 0}}" data-belongsto="<?=$myuserid?>" ></div>
								{{bd.totallove}}
							</div> -->
							<p class="text-right"><a href="<?=site_url('book/show/')?>{{bd.code}}/{{bd.title.split(' ').join('-')}}#/tb-discussion">view all discussions</a></p>
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