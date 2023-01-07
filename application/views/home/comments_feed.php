<style type="text/css">
	#form-comment {border:1px solid #ddd;border-radius: 5px;padding: 5px}
	#form-comment .write-comment textarea[name=comment]{resize: none;border: 0px;overflow: hidden;outline: none;font-size: 14px}
	#form-comment .write-comment textarea:focus{
		border: none;
	    outline: none;
	    -webkit-box-shadow: none;
	    -moz-box-shadow: none;
	    box-shadow: none;
	}
	#feed-comments .comment-list{padding: 10px 0px;margin-top: 10px;border-bottom: 1px solid #ddd}
	#feed-comments .comment-list:last-child{border-bottom: 0px}
	#feed-comments .comment-list .user > .pp > img {width: 30px;height: 30px}
	#feed-comments .comment-list .user > .name {text-transform: capitalize;margin: 0px;font-size: 14px}
	#feed-comments .comment-list .user > .name > span {cursor: pointer;}
	#feed-comments .comment-list .user > .date {font-size: 11px;color: #ddd}
	#feed-comments .comment-list .comment {font-size: 14px;}
</style>

<div id="feed-comments" style="width: 100%;padding: 15px 0px;">
	<div class="row">
		<div class="col-md-12">
			<form id="form-comment" method="post" action="/feeds/postcomment" autocomplete="off">
				<input type="hidden" value="<?=$detail->user_id?>" name="belongsto">
				<input type="hidden" value="<?=$detail->feed_id?>" name="feed_id">
				<div class="write-comment">
					<div class="row">
						<div class="col-md-10">
							<textarea class="form-control required" name="comment" required rows="1"></textarea>
						</div>
						<div class="col-md-2 text-center">
							<button class="btn btn-default btn-post-comment" type="button"><i class="fa fa-paper-plane-o"></i></button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row load-cmt">
		<div class="col-md-12">
			<?php if(!empty($comments)){
			foreach ($comments->result() as $c) { ?>
			<div class="comment-list">
					<div class="row">
						<div class="col-md-1">
							<div class="user">
								<div class="pp">
									<img src="<?=site_url().(!empty($c->picture) ? $c->picture : '/assets/img/icon/user.png')?>" class="rounded-circle">
								</div>
							</div>
						</div>
						<div class="col-md-11">
							<div class="user">
								<div class="name">
									<a href="<?=site_url('/user/show/').$c->user_id.'-'.str_replace('.','-',$c->username)?>"><?=$c->fullname?></a>
									<?php if($myuserid == $c->user_id){ ?>
									<span class="pull-right remove" data-comment="<?=$c->comment_id?>" data-feedid="<?=$c->type_id?>"><i class="fa fa-trash"></i></span>
									<?php } ?>
								</div>
								<div class="date">
									<small><?php
									$createdC=date_create($c->created);
									echo date_format($createdC,"d M Y, H:i");
									?></small>
								</div>	
							</div>
						</div>
					</div>		
					<div class="row">
						<div class="col-sm-12">
							<div class="comment">
								<?=$c->comment?>
							</div>
						</div>
					</div>
			</div>
			<?php } } ?>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#feed-comments").on("click","#form-comment .btn-post-comment",function(){
			var itsme = $(this);
			$parentBox = itsme.parent().parent().parent().parent().parent().parent().parent().parent().parent();

			$currentBox = $("#home-feeds .a-card.active");
			$formComment = $currentBox.find("#form-comment");
			//console.log($formComment.attr("action"));

			$formComment.find(".required").each(function(){
			  	var value = $(this).val();
			  	if($.trim(value) == ''){
			  		error = false;
			  	}else{
			  		error = true;
			  	}
		  	});
		  	if(error){
		  		$appendHere = $currentBox.find(".foot");

		  		$.ajax({
	                type : 'POST',
	                url : "<?=site_url()?>"+$formComment.attr("action"),
	                data : $formComment.serialize(),
	                dataType : 'json',
	                beforeSend  :function(){
	                  itsme.prop("disabled",true);
	                  //$parentForm.remove();
	                },error : function(jqXHR){
	                  itsme.prop("disabled",false);
	                  alert("Error post comment "+jqXHR.responseText)
	                  console.log(jqXHR.responseText);
	                },success : function(response){ 
	                  loadCommentFeed($appendHere,response.type_id);
	                  itsme.prop("disabled",false);
	                  $tcClass = $currentBox.find(".nm-comment");
                  	  var tCm = $tcClass.text();
                  	  $tcClass.text(parseInt(tCm)+1);
	                }
	            });
		  	}else{alert("Please fill out this form");}
			
		});

		
		$("#feed-comments .comment-list").on("click",".user .remove",function(){
			var itsme = $(this);
			var feed_id = itsme.data("feedid");
			var comment_id = itsme.data("comment");
			if(feed_id != "" && comment_id != ""){
				if(confirm("Are you sure wants to delete this ?")){
					$currentBox = $("#home-feeds .a-card.active");

					$.ajax({
		                type : 'POST',
		                url : "<?=site_url('/feeds/removeComment')?>",
		                data : "comment_id="+comment_id+"&feed_id="+feed_id,
		                dataType : 'json',
		                beforeSend  :function(){
		                  //itsme.prop("disabled",true);
		                  //$parentForm.remove();
		                },error : function(jqXHR){
		                  //itsme.prop("disabled",false);
		                  alert("Error post comment "+jqXHR.responseText)
		                  console.log(jqXHR.responseText);
		                },success : function(response){ 
		                  loadCommentFeed($appendHere,response.feed_id);
		                  if(response.finish){
		                  	$tcClass = $currentBox.find(".nm-comment");
		                  	var tCm = $tcClass.text();
		                  	$tcClass.text(parseInt(tCm)-1);
		                  }
		                  //itsme.prop("disabled",false);
		                }
		            });
				}
			}
		});
	});
</script>