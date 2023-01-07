<!--@fahmi add file baru 23/7/2019 -->

<div class="row">
		<div class="col-xs-12 col-md-9 col-sm-9" id="collections">
			<div class="detail-collection ng-scope" ng-controller="BooksController">
				<div class="panel-box">
					<div class="head no-pad">
						<div id="illuminate-breadcrumb">
						  	<div class="btn-group btn-breadcrumb bg-white">
					            <a href="<?php echo base_url('book/search');?>" class="btn btn-default">Search</a>
					            <a href="" class="btn btn-default"><?php echo $searchdata;?></a>
				        	</div>
						</div>
					</div>
				</div>

				<div id="tabs-search">
					<div class="panel-box hr bg-white">
						<div class="head">

							<ul id="illumi-tabs" class="nav nav-tabs" role="tablist">
								<li role="presentation" class="nv-all active">
							    	<a href="#tb-all" aria-controls="all" role="tab" data-toggle="tab">ALL</a>
						    	</li>
							    <li role="presentation" class="nv-book">
							    	<a href="#tb-book" aria-controls="book" role="tab" data-toggle="tab">BOOK</a>
						    	</li>
						    	<li role="presentation" class="nv-people">
							    	<a href="#tb-people" aria-controls="people" role="tab" data-toggle="tab">PEOPLE</a>
						    	</li>

						    	<li role="presentation" class="nv-author">
							    	<a href="#tb-author" aria-controls="author" role="tab" data-toggle="tab">AUTHOR</a>
						    	</li>
						    	<li role="presentation" class="nv-discussion">
							    	<a href="#tb-discussion" aria-controls="discussion" role="tab" data-toggle="tab">DISCUSSION</a>
						    	</li>
							</ul>
						</div>
					</div>
				</div>

				<div id="tab-body-search">
					<div id="frst-tab" class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tb-all" aria-labelledby="#tb-all">
			    			<div class="panel-box hr bg-white">
								<div class="head">
									<h4 class="title">ALL<h4>
									
										<div class="body">
											<?php foreach($data as $row){?>
											
			                        <td>
			                        	<a href="<?php echo base_url()?><?php echo $row->link;?>">
				                        	<img src="<?php echo base_url();?>/<?php echo $row->picture;?>" 
				                        	style="width: 100px; height: 100px;"> 
				                        	<?php echo $row->name;?>
				                        	<br>
			                        	</a>
			                        </td>
			                        <br>
			                      
			                <?php }; ?>
										</div>
									
								</div>
							</div>
			    		</div>
			    		<div role="tabpanel" class="tab-pane" id="tb-book">
			    			<div class="panel-box hr bg-white">
								<div class="head">
									<h4 class="title">BOOK<h4>
									
										<div class="body">
											<?php foreach($data as $row){?>
											<?php if ($row->role=='books'){?>
			                        <td>
			                        	<a href="<?php echo base_url()?><?php echo $row->link;?>">
				                        	<img src="<?php echo base_url();?>/<?php echo $row->picture;?>" 
				                        	style="width: 100px; height: 100px;"> 
				                        	<?php echo $row->name;?>
				                        	<br>
			                        	</a>
			                        </td>
			                        <br>
			                        <?php }else{?>
			                <?php }}; ?>
										</div>
									
								</div>
							</div>
			    		</div>
			    		<div role="tabpanel" class="tab-pane" id="tb-people">
			    			<div class="panel-box hr bg-white">
								<div class="head">
									<h4 class="title">PEOPLE<h4>
									
										<div class="body">
											<?php foreach($data as $row){?>
											<?php if ($row->role=='people'){?>
			                        <td>
			                        	<a href="<?php echo base_url()?><?php echo $row->link;?>">
				                        	<img src="<?php echo base_url();?>/<?php echo $row->picture;?>" 
				                        	style="width: 100px; height: 100px;"> 
				                        	<?php echo $row->name;?>
				                        	<br>
			                        	</a>
			                        </td>
			                        <br>
			                        <?php }else{?>
			                <?php }}; ?>
										</div>
									
								</div>
							</div>
			    		</div>
			    		<div role="tabpanel" class="tab-pane" id="tb-author">
			    			<div class="panel-box hr bg-white">
								<div class="head">
									<h4 class="title">AUTHOR<h4>
									
										<div class="body">
											<?php foreach($data as $row){?>
											<?php if ($row->role=='author'){?>
			                        <td>
			                        	<a href="<?php echo base_url()?><?php echo $row->link;?>">
				                        	<img src="<?php echo base_url();?>/<?php echo $row->picture;?>" 
				                        	style="width: 100px; height: 100px;"> 
				                        	<?php echo $row->name;?>
				                        	<br>
			                        	</a>
			                        </td>
			                        <br>
			                        <?php }else{?>
			                <?php }}; ?>
										</div>
									
								</div>
							</div>
			    		</div>
			    		<div role="tabpanel" class="tab-pane" id="tb-discussion">
			    			<div class="panel-box hr bg-white">
								<div class="head">
									<h4 class="title">DISCUSSION<h4>
									
										<div class="body">
											<?php foreach($data as $row){?>
											<?php if ($row->role=='discuss'){?>
			                        <td>
			                        	<a href="<?php echo base_url()?><?php echo $row->link;?>">
				                        	<img src="<?php echo base_url();?>/<?php echo $row->picture;?>" 
				                        	style="width: 100px; height: 100px;"> 
				                        	<?php echo $row->name;?>
				                        	<br>
			                        	</a>
			                        </td>
			                        <br>
			                        <?php }else{?>
			                <?php }}; ?>
										</div>
									
								</div>
							</div>
			    		</div>
			    	</div>
				</div>


				
			
			</div>
		</div>
		

	
		<div class="col-xs-12 col-md-3 col-sm-3 hidden-xs">
	<form method="GET" action="<?php echo site_url('book/search_filter/');?>">
	 <input type="hidden" name="url" value="<?php echo $searchdata;?>">
	  <input type="hidden" name="role" value="books">
	<div class="panel-box bg-white">
	<div class="head">
		<h4>status</h4>
	</div>
	<div class="body">
		<div class="ft-checkbox">
		<input type="checkbox" name="statusbook" class="filtering" value="on going">
		<label>on going</label> 
        <input type="checkbox" name="statusbook"  class="filtering" value="completed">
        <label>Completed</label>	
		</div>
		 
	</div>
		<div class="head">
			<h4>type</h4>
			                 
		</div>
		<div class="body">
			<div class="ft-checkbox">
			 <input type="checkbox" name="typebook" class="filtering" value="printing">
			 <label>Printed</label>
            <input type="checkbox" name="typebook" class="filtering" value="web comic">
            <label>Webtoon</label>
            </div>
		</div>
		<div class="head">
			<h4>genre</h4>
		</div>
		<div class="body">
			<div class="ft-checkbox">
			 <?php foreach ($genredata as $rowgen) { ?>
              	<table>
              		<tr><td>
              			<input type="checkbox" id="genre_search" name="genre_search[]" checkedvalue="<?php echo $rowgen->id;?>" uncheckedvalue="" indeterminatevalue="-<?php echo $rowgen->id;?>" class="filtering"> 
             <label><?php echo $rowgen->name;?></label>
              		</td></tr></table>
              <?php }; ?>
              </div>
		</div>
		
		<div class="head">
			<h4>chapter</h4>
		</div>
		<div class="body">
		<input type="text" name="volume" placeholder="chapter" class="filtering">
		</div>
		<div class="head">
			<h4>ratings</h4>
		</div>
		<div class="body">
			<select class="form-control filtering" name="rating">
				<option value="5">
					5
				</option>
				<option value="4">
					4
				</option>
				<option value="3">
					3
				</option>
				<option value="2">
					2
				</option>
				<option value="1">
					1
				</option>
			</select>
		</div>
<!-- 		<div class="head">
			<div class="dropdown rate-star">
			  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <span>Choose rate</span>
			    &nbsp;&nbsp;&nbsp; <i class="fa fa-sort"></i>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    				    <a class="star dropdown-item" data-rate="5">
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    					    </a>
			    <a class="star dropdown-item" data-rate="4">
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star-o"></i>
			    </a>
			    <a class="star dropdown-item" data-rate="3">
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    					    </a>
			    <a class="star dropdown-item" data-rate="2">
		    				    		<i class="fa fa-star"></i>
		    				    		<i class="fa fa-star"></i>
		    				    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    					    </a>
			    <a class="star dropdown-item" data-rate="1" >
		    				    		<i class="fa fa-star"></i>
		    				    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    				    		<i class="fa fa-star-o"></i>
		    					    </a>


			  </div>
			</div>
		</div> -->
		<div class="head">
			<h4>years published</h4>
		</div>
		<div class="body">
			<select class="form-control filtering" name="year">
				<option value="">Choose year</option>
                                <?php for ($i=1970; $i <= date("Y"); $i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                                <?php } ?>
						</select>
			<br>
		</div>
	</div>
	<input type="submit" name="search" value="search" class="filtering">
</form>
		</div>
	</div>
	    <script type="text/javascript" src="<?php echo base_url('assets/new_assets/jquery.tristate.js');?>"></script>
    <script type="text/javascript">
$(function() {

    function output(state, value) {

        $('#genre-value').text(value);
    }

    $('input[id=genre_search]').tristate({

        change: function(state, value) {
            if (state === null) {
                $(this).prop("checked", true);
                $(this).prop("value", value);
            } else {
                $(this).prop("value", value);
            }
        },
        init: function(state, value) {
            if (state === null) {
                $(this).prop("checked", true);
                $(this).prop("value", value);
            } else {
                $(this).prop("value", value);
            }
        }
    
    });
        
});

    </script>

    <script type="text/javascript">
	$(document).ready(function(){

	    var hash = document.location.hash;
		if (hash) {
			var cv = hash.split('#')[1];
			var name = cv.split('/')[1];
			var nameid = name.split('-')[1];
			
			$("#illumi-tabs > li").removeClass("active");
			$("#illumi-tabs > .nv-"+nameid).addClass("active");
			$("#frst-tab > .tab-pane").removeClass("active");
			$("#tb-"+nameid).addClass("active");
			
		} 
		$("#illumi-tabs").on("click","li > a",function(){
			$("#illumi-tabs > li").removeClass("active");
			$(this).parent().addClass("active");
		});
	});

</script>