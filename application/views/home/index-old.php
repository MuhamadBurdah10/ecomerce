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

				<div ng-controller="BooksController">

					<div id="highlight" ng-init="fetchallbook('<?=base_url()?>','/book/apifetchall')">
						<div class="panel-box bg-white">
							<div class="head"><h4>New release</h4></div>
							<div class="panel-loading" ng-if="!listbooks">
								<div class="loader"></div>
								<span class="label">Please wait for a moment</span>
							</div>
							<div class="body" ng-if="listbooks">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div ng-repeat="hl in listbooks | orderBy:'-release_date' | limitTo:5" class="carousel-item {{( ($index+1) == 1 ) ? 'active':'' }}">
								      <div class="w-10">
								      	<div class="row">
								      		<div class="col-2">
								      			<img class="cover" src="<?=base_url()?>{{(hl.cover) ? hl.cover : '/assets/img/logo/logo_grey.jpg'}}">
								      		</div>
								      		<div class="col-10">
								      			<h1 class="title">
								      				<a href="<?=base_url('/book/show/')?>{{hl.code}}/{{hl.urititle}}">{{hl.title}}</a>
							      				</h1>
								      			<p class="alternate">{{hl.alternate}}</p>
								      			<p class="authors">
								      				<a href="<?=base_url('/author/show/')?>{{hl.creatorid}}-{{hl.creator_username.split('.').join('-')}}">{{hl.creator_name}}</a>
								      				<span ng-if="hl.TotalCreator > 1">etc</span>
								      			</p>
								      			<div class="description">
								      				{{hl.synopsis | limitTo:300}} <span ng-if="hl.synopsis.length > 300">...</span>
								      			</div>
								      		</div>
								      	</div>
								      </div>
								    </div>
								  </div>

								  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								    <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
								</div>

							</div>
						</div>	
					</div>

					<div id="latest-update" ng-init="fetchallbook('<?=base_url()?>','/book/apifetchall')">
						<div class="panel-box bg-white">
							<div class="head"><h4>latest update</h4></div>
							<div class="panel-loading" ng-if="!listbooks">
								<div class="loader"></div>
								<span class="label">Please wait for a moment</span>
							</div>
							<div class="body" ng-if="listbooks">
								<div class="row grid-lst-bk">
									<div class="col-xs-6 col-md-2 bks" ng-repeat="bk in listbooks | orderBy:'-created' | limitTo:12">
										<div class="dtl">
				    						<a href="<?=base_url('book/show/')?>{{bk.code}}/{{bk.urititle}}" data-toggle="tooltip" data-placement="top" title="{{bk.title}}">
				    							<img class="bk-img" src="<?=base_url()?>{{bk.cover}}" height="200" />
				    						</a>
			    							<div class="hidden-xs hidden-sm hover-action-book float" id="hover-btn-img" ng-controller="BooksController">
				    							<div class="row brs">
				    								<div class="col-md-4 no-pad">
				    									<div class="dropdown">
														  <button class="btn btn-secondary dropdown-toggle btn-nv " type="button" id="dropdownBookStatus-{{bk.book_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														    <i class="fa fa-bookmark"></i> 
														  </button>
														  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownBookStatus-{{bk.book_id}}" 
														  ng-init="fetchbookhasstatus('<?=base_url()?>','/book/fetchbookhasstatus',bk.book_id)">
														    <button ng-repeat="lr in lbooksr" type="button" class="dropdown-item {{(lr.hasbookid) ? 'active':''}}"
														       ng-click="changeMyBookStatus($event)"
														       data-bookid="{{bk.book_id}}"
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
															<button class="btn btn-secondary btn-nv" type="button" data-toggle="collapse" data-target="#collapseCollections-{{bk.code}}" aria-expanded="false" aria-controls="collapseCollections">
																<i class="fa fa-plus"></i>
															</button>
															<div id="collapseCollections-{{bk.code}}" class="collapse popup-window" ng-init="getmycollections('<?=base_url()?>','/collections/fetchmycollection',bk.book_id)">
																<div class="list">
																	<a ng-repeat="cb in listcollections | orderBy:'collection_id' | limitTo:3" role="button" class="dropdown-item"
																    		ng-click="addcollectionbooks($event)"
																    		data-path="<?=base_url()?>"
																    		data-dir="/collections/addbooks"
																    		data-bookid="{{bk.book_id}}"
																    		data-collectionid="{{cb.collection_id}}">
																    	<i class="fa fa-{{(cb.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																    	{{cb.name}}
															    	</a>
														    	</div>
														    	
														    	<div class="list-more showmore-{{bk.code}} collapse" style="left: 201px">
														    		<a ng-repeat="cb in listcollections | orderBy:'-collection_id' | limitTo:(listcollections.length-3)" role="button" class="dropdown-item"
																    		ng-click="addcollectionbooks($event)"
																    		data-path="<?=base_url()?>"
																    		data-dir="/collections/addbooks"
																    		data-bookid="{{bk.book_id}}"
																    		data-collectionid="{{cb.collection_id}}">
																    	<i class="fa fa-{{(cb.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																    	{{cb.name}}
															    	</a>
														    	</div>
														    	<div class="show-more-collection" ng-if="listcollections.length > 3">
													    			<div class="separate"></div>
														    		<button class="dropdown-item" type="button" data-toggle="collapse" data-target=".showmore-{{bk.code}}" aria-expanded="false" >Show more <span class="pull-right"><i class="fa fa-angle-right"></i></span></button>
														    	</div>

														    	<div class="separate"></div>
														    	<button class="dropdown-item" type="button" data-toggle="collapse" data-target="#create-new-collection-{{bk.code}}" aria-expanded="false" aria-controls="create-new-collection-{{bk.code}}">Create new</button>
														    	<div class="frm-crt-coll collapse" id="create-new-collection-{{bk.code}}">
														    		<div id="smpl-create-collection" class="form-flat">
														    			<label>Collection name</label>
														    			<input type="text" name="name" class="txt-nw-coll" autocomplete="off" data-path="<?=base_url()?>" data-dir="/collections/saveselfcollection" data-bookid="{{bk.book_id}}" required placeholder="Type here..">
														    		</div>
														    	</div>																		    	
														    	<div class="separate"></div>
														    	<div class="close-collapse cursor" title="close collections"  data-toggle="collapse" data-target="#collapseCollections-{{bk.code}}" aria-expanded="false" aria-controls="collapseCollections">
														    		<i class="fa fa-arrow-circle-o-up"></i>
														    	</div>
															</div>
														</div>
			    									</div>
				    								<div class="col-md-4 no-pad">
				    									<button class="btn btn-secondary btn-nv vw-book" data-code="{{bk.code}}">
																<i class="fa fa-info-circle"></i>
														</button>
				    								</div>
				    							</div>
				    						</div>
				    						<p class="title">
			    								<a href="<?=base_url('book/show/')?>{{bk.code}}/{{bk.urititle}}" data-toggle="tooltip" data-placement="top" title="{{bk.title}}">
			    									{{bk.title | limitTo:15}}
		    									</a>
	    									</p>
				    						<p class="author">by
				    							<span><a href="<?=base_url('author/show/')?>{{bk.creatorid}}-{{bk.creator_username.split('.').join('-')}}">{{bk.creator_name}}</a></span>
				    							<span ng-if="bk.TotalCreator > 1">etc</span>
				    						</p>
				    					</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="top-books">
						<div class="panel-box bg-white" ng-init="fetchallbookinmonth('<?=base_url()?>','/book/fetchbookinmonth')">
							<div class="head"><h4>TOP BOOK OF THE MONTH</h4></div>
							<div class="panel-loading" ng-if="!listbooksm">
								<div class="loader"></div>
								<span class="label">Please wait for a moment</span>
							</div>
							<div class="body" ng-if="listbooksm">
								<div class="body">
									<div class="row grid-lst-bk">
										<div class="col-xs-6 col-md-2 bks" ng-repeat="bk in listbooksm | limitTo:12">
											<div class="dtl">
					    						<a href="<?=base_url('book/show/')?>{{bk.code}}/{{bk.urititle}}" data-toggle="tooltip" data-placement="top" title="{{bk.title}}">
					    							<img class="bk-img" src="<?=base_url()?>{{bk.cover}}" height="200" />
					    						</a>
				    							<p class="title">
				    								<a href="<?=base_url('book/show/')?>{{bk.code}}/{{bk.urititle}}" data-toggle="tooltip" data-placement="top" title="{{bk.title}}">
				    									{{bk.title | limitTo:15}}
			    									</a>
		    									</p>
					    						<div class="hidden-xs hidden-sm hover-action-book float" id="hover-btn-img" ng-controller="BooksController">
					    							<div class="row brs">
					    								<div class="col-md-4 no-pad">
					    									<div class="dropdown">
															  <button class="btn btn-secondary dropdown-toggle btn-nv " type="button" id="dropdownBookStatus-{{bk.book_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															    <i class="fa fa-bookmark"></i> 
															  </button>
															  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownBookStatus-{{bk.book_id}}" 
															  ng-init="fetchbookhasstatus('<?=base_url()?>','/book/fetchbookhasstatus',bk.book_id)">
															    <button ng-repeat="lr in lbooksr" type="button" class="dropdown-item {{(lr.hasbookid) ? 'active':''}}"
															       ng-click="changeMyBookStatus($event)"
															       data-bookid="{{bk.book_id}}"
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
																<button class="btn btn-secondary btn-nv" type="button" data-toggle="collapse" data-target="#collapseCollections-{{bk.code}}" aria-expanded="false" aria-controls="collapseCollections">
																	<i class="fa fa-plus"></i>
																</button>
																<div id="collapseCollections-{{bk.code}}" class="collapse popup-window" ng-init="getmycollections('<?=base_url()?>','/collections/fetchmycollection',bk.book_id)">
																	<div class="list">
																		<a ng-repeat="cb in listcollections | orderBy:'collection_id' | limitTo:3" role="button" class="dropdown-item"
																	    		ng-click="addcollectionbooks($event)"
																	    		data-path="<?=base_url()?>"
																	    		data-dir="/collections/addbooks"
																	    		data-bookid="{{bk.book_id}}"
																	    		data-collectionid="{{cb.collection_id}}">
																	    	<i class="fa fa-{{(cb.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																	    	{{cb.name}}
																    	</a>
															    	</div>
															    	
															    	<div class="list-more showmore-{{bk.code}} collapse" style="left: 201px">
															    		<a ng-repeat="cb in listcollections | orderBy:'-collection_id' | limitTo:(listcollections.length-3)" role="button" class="dropdown-item"
																	    		ng-click="addcollectionbooks($event)"
																	    		data-path="<?=base_url()?>"
																	    		data-dir="/collections/addbooks"
																	    		data-bookid="{{bk.book_id}}"
																	    		data-collectionid="{{cb.collection_id}}">
																	    	<i class="fa fa-{{(cb.hasbookcollectionid) ? 'check-square-o':'square-o'}}"></i>
																	    	{{cb.name}}
																    	</a>
															    	</div>
															    	<div class="show-more-collection" ng-if="listcollections.length > 3">
														    			<div class="separate"></div>
															    		<button class="dropdown-item" type="button" data-toggle="collapse" data-target=".showmore-{{bk.code}}" aria-expanded="false" >Show more <span class="pull-right"><i class="fa fa-angle-right"></i></span></button>
															    	</div>

															    	<div class="separate"></div>
															    	<button class="dropdown-item" type="button" data-toggle="collapse" data-target="#create-new-collection-{{bk.code}}" aria-expanded="false" aria-controls="create-new-collection-{{bk.code}}">Create new</button>
															    	<div class="frm-crt-coll collapse" id="create-new-collection-{{bk.code}}">
															    		<div id="smpl-create-collection" class="form-flat">
															    			<label>Collection name</label>
															    			<input type="text" name="name" class="txt-nw-coll" autocomplete="off" data-path="<?=base_url()?>" data-dir="/collections/saveselfcollection" data-bookid="{{bk.book_id}}" required placeholder="Type here..">
															    		</div>
															    	</div>																		    	
															    	<div class="separate"></div>
															    	<div class="close-collapse cursor" title="close collections"  data-toggle="collapse" data-target="#collapseCollections-{{bk.code}}" aria-expanded="false" aria-controls="collapseCollections">
															    		<i class="fa fa-arrow-circle-o-up"></i>
															    	</div>
																</div>
															</div>
				    									</div>
					    								<div class="col-md-4 no-pad">
					    									<button class="btn btn-secondary btn-nv vw-book" data-code="{{bk.code}}">
																	<i class="fa fa-info-circle"></i>
															</button>
					    								</div>
					    							</div>
					    						</div>
					    						<p class="author">by
					    							<span><a href="<?=base_url('author/show/')?>{{bk.creatorid}}-{{bk.creator_username.split('.').join('-')}}">{{bk.creator_name}}</a></span>
					    							<span ng-if="bk.TotalCreator > 1">etc</span>
					    						</p>
					    					</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

				</div>

				<script type="text/javascript">
					/*$(document).ready(function(){
						$content_tbl = $("body #content_tbl");
						var path = $content_tbl.data("path");
						var menu = $content_tbl.data("id");
						$.ajax({
			              type:'POST',
			              url:"<?=site_url()?>/"+path,
			              data: "menu_id="+menu,
			              dataType:'html',
			              beforeSend:function(){$content_tbl.find(".panel-loading").show()},
			              error:function(jqXHR, exception){
			                alert('Error fetch content_tbl '+jqXHR.responseText);
			                console.log(jqXHR.responseText);
			              },success:function(response){
			                $content_tbl.html(response);
			              }
			          });
					});*/
				</script>

				<!-- <div id="content_tbl" data-path="/section/fetch_content_tbl" data-id="M01" >
					<div class="panel-box bg-white">
						<div class="panel-loading">
							<div class="loader"></div>
							<span class="label">Please wait for a moment</span>
						</div>
					</div>
				</div> -->

			</div>

			<?php $this->load->view('widgets/book-modal');?>

			<div class="col-xs-12 col-md-3 col-sm-3 hidden-xs" style="margin-top: 1.2em">
				<div id="illumnate-widget">
					<?php $this->load->view('widgets/poststatus');?>
					<?php $this->load->view('widgets/current_book_reading');?>
					<?php $this->load->view('widgets/list-author-followed');?>
				</div>
			</div>

		</div>
	</div>
</div>