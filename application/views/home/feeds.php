<style type="text/css">
	.deckgrid[deckgrid]::before {
	    /* Specifies that the grid should have a maximum of 4 columns. Each column will have the classes 'column' and 'column-1-4' */
	    content: '2 .column.column-1-2';
	    font-size: 0; /* See https://github.com/akoenig/angular-deckgrid/issues/14#issuecomment-35728861 */
	    visibility: hidden;
	}

	.deckgrid .column {
	    float: left;
	}

	.deckgrid .column-1-2 {
	    width: 50%;
	}
	.deckgrid .column-1-2:first-child{padding: 0px 5px 0px 0px}
	.deckgrid .column-1-2:last-child{padding: 0px 0px 0px 5px}
	
	.deckgrid .column-1-4 {
	    width: 25%;
	}


	.deckgrid .column-1-1 {
	    width: 100%;
	}

	@media screen and (max-width: 480px){
	    .deckgrid[deckgrid]::before {
	        content: '1 .column.column-1-1';
	    }
	}
	#feed-cards .panel-box > .head,
	#feed-cards .panel-box > .body,
	#feed-cards .panel-box > .foot{padding: 10px 20px 0px 20px}
	#feed-cards .user-data > .picture{width: 30px;height: 30px;float: left;margin-right: 10px}
	#feed-cards .user-data > p{margin: 0px}
	#feed-cards .user-data > .message{font-size: 14px}
	#feed-cards .user-data > .message > .name{font-weight: bold;text-transform: capitalize;}
	#feed-cards .user-data > .date{font-size: 11px;color: #ddd}
	#action-love-comments{font-size: 11px}
</style>
<div id="home-feeds" ng-controller="FeedsController">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-sm-9" ng-init="fetchall('<?=site_url()?>','feeds/fetchall')">
				<div class="panel-box bg-white">
					<div class="head">
						<ul id="illumi-tabs" class="nav nav-tabs">
							<li class="tab-rcm"><a href="<?=base_url('home')?>">Recommended</a></li>
							<li class="tab-fed active"><a href="<?=base_url('home/feed')?>">News Feed</a></li>
							<li class="tab-dcs"><a href="<?=base_url('home/discussion')?>">discussion</a></li>
						</ul>	
					</div>
				</div>

				<div class="panel-box bg-white" ng-if="!feeds">
					<div class="head"><h4>Coming soon</h4></div>
				</div>
				<div ng-app="myApp">
				<div ng-if="feeds" deckgrid class="deckgrid" source="feeds" id="feed-cards" infinite-scroll="getMoreCards()" infinite-scroll-distance="infScrollDist">
				    <div class="a-card">
						<div class="panel-box bg-white">
							<div class="head">
								<div class="right-door-feed pull-right">
									<div class="dropdown">
									  <a class="dropdown-toggle" role="button" id="menuDW{{card.feed_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
									  <i class="fa fa-angle-down"></i> </a>

									  <div class="dropdown-menu" aria-labelledby="menuDW{{card.feed_id}}">
									    
									    <a class="dropdown-item delete" data-feedid="{{card.feed_id}}" >Delete</a>
									    <a class="dropdown-item edit" data-feedid="{{card.feed_id}}" >Edit</a>
									    
									    <a class="dropdown-item report" data-feedid="{{card.feed_id}}" >Report</a>
									  </div>
									</div>
								</div>
								<div class="user-data">
									<img class="picture rounded-circle" src="<?=site_url('./assets/img/icon/user.png')?>" data-ng-src="<?=site_url()?>{{card.picture}}" />
									<p class="message"><span class="name"><a href="<?php echo site_url()?>{{card.user_link}}">{{card.fullname}}</a></span> 
									<span class="status {{(card.feed_isactivity == 'Y')? '':'hidden'}}" >
										<span ng-bind-html="card.feed_status"></span>
									</span></p>
									<p class="date">{{card.feed_date}}</p>
								</div>
								
							</div>
							<div class="body {{(card.feed_isactivity == 'N')? '':'hidden'}}">
								<div ng-bind-html="card.feed_status"></div>
							</div>
							<div class="body bg-gray {{(card.feed_data_name != '') ? '' :'hidden'}}">
								<div style="padding-bottom: 10px">
									<div class="row">
										<dic class="col-md-3 col-sm-2">
											<img class="feed_picture bg-gray " src="<?=site_url()?>{{card.feed_data_picture}}" width="100%" />
										</dic>
										<dic class="col-md-9 col-sm-10" style="padding-left: 0px">
											<p class="feed_name" style="margin-bottom: 5px;font-weight: bold;font-size: 18px">
												<a href="{{card.feed_data_link}}">{{card.feed_data_name}}</a>
											</p>
											<div class="feed_desc">{{card.feed_data_desc | limitTo:100}} {{(card.feed_data_desc.length > 100) ? '...':''}}</div>
										</dic>
									</div>
								</div>
							</div>
							<div class="foot">
								<div class="stk-cm-lv pull-right">
									<p><span class="nm-love">{{card.feed_totalLove}}</span> loves  · 
									<span class="nm-comment">{{card.feed_totalComment}}</span> comments</p>
								</div>
								<div id="action-love-comments" ng-controller="ActionsController">
									<div title="love feed {{card.fullname}}" class="{{(card.feed_isloved) ? 'loved':'love'}}" ng-click="loverespon($event)" data-id="{{card.feed_id}}" data-type="feeds" data-path="<?=base_url()?>" data-dir="feeds/love" data-love="{{(card.feed_isloved) ? card.feed_isloved : 0 }}" data-belongsto="{{card.user_id}}" ></div>
									<div title="give a comment to feed {{card.fullname}}" class="comment" data-id="{{card.feed_id}}" data-status="close"></div>
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
	<script type="text/javascript" src="<?php echo base_url('assets/angular-1.5.7/ng-infinite-scroll.min.js'); ?>"></script>
	<script type="text/javascript">
var getInfScrollDist = function() {
    var winWidth = $window.innerWidth;
    return winWidth > 420 ? 1 : 2;
};

$window.addEventListener('resize', function() {
    $scope.infScrollDist = getInfScrollDist();
}, false);

$scope.infScrollDist = getInfScrollDist();
$scope.$on('$destroy', function() {
    $window.removeEventListener( 'resize' );
});
	</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#blog-landing').pinterest_grid({
            no_columns: 2,
            padding_x: 10,
            padding_y: 10,
            margin_bottom: 50,
            single_column_breakpoint: 700
        });

        $feedparent = $("#home-feeds");
        $feedparent.on("click","#feed-cards .foot .comment",function(){
        	var itsme = $(this);
        	var feed_id = itsme.data("id");
        	var feed_status = itsme.data("status");

        	$parentBox = itsme.parent().parent().parent().parent();
        	$feedparent.find(".a-card").removeClass("active");
        	$parentBox.addClass("active");

        	if(feed_id != ""){
        		$appendHere = itsme.parent().parent();
        		if(feed_status == 'close'){
        			itsme.data("status","open");  
        			$feedparent.find("#feed-cards .foot .comment").data("status","section_close");      			
					$feedparent.find(".a-card #comment_feed").remove();
					loadCommentFeed($parentBox.find(".foot"),feed_id);
        		}else{
        			itsme.data("status","close");
        			$feedparent.find(".a-card #comment_feed").remove();
        			$parentBox.removeClass("active");
        		}
        	}
        });

	});

	function loadCommentFeed(element,feed_id) {
		$.ajax({
            type:'POST',
            url: "<?=site_url('/feeds/comment')?>",
            data: "feed_id="+feed_id,
            dataType:'html',
       		beforeSend:function(){$('#ajax-loader').show();},
            error:function(jqXHR){
            	$('#ajax-loader').hide();
            	alert("Error 404\nPage not found");
            	console.log(jqXHR.responseText);
            },success:function(response){
            	var section_open = "<div id='comment_feed'>";
        		var section_close = "</div>";
            	element.find("#comment_feed").remove();
            	element.append(section_open+response+section_close); //masalah nih
            }
       	});
	}
</script>