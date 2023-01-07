<!DOCTYPE html>
<html lang="id" ng-app="app" prefix="og:http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"
xmlns:og="http://opengraphprotocol.org/schema/" xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanaman Hias</title>
  <?=$header?>
</head>
<body>
  <!-- Header -->

<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar" style="background: green">
				<div class="topbar-social">
					<a href="" class="topbar-social-item fa fa-instagram text-white">Tanaman Hias</a>
					<a href="https://api.whatsapp.com/send?phone=6289636424779" class="topbar-social-item fa fa-whatsapp text-white">&nbsp 089636424779</a>
				</div>

				<!-- <span class="topbar-child1" style="text-transform: capitalize;">
					khusus daerah bogor, depok dan jakarta
				</span> -->
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?=base_url('')?>" class="logo">
					<img src="<?=base_url('assets')?>/images/new/logo-igsb.jpg" alt="IMG-LOGO"> <span>Toko Tanaman Hias</span>
				</a>

				<!-- Menu -->
				<div class="wrap_menu" ng-controller="ProductController">
					<nav class="menu" ng-init="fetchcategory('<?=base_url()?>','product/fetchcategory')">
						<ul class="main_menu">
							<!-- <li ng-repeat="ca in category | orderBy:'name_category'" style="text-transform: capitalize;">
								<a href="<?=base_url('home/product')?>?category={{ca.id_category}}">{{ca.name_category}}</a>
							</li> -->
							<li  style="text-transform: capitalize;">
								<a href="<?=base_url('home/index')?>">Data Pemesanan</a>
							</li>
							<li  style="text-transform: capitalize;">
								<a href="<?=base_url('home/Artikel')?>">Data Produk</a>
							</li>
						</ul>
					</nav>
				</div>
				

				<!-- Header Icon -->
				
			</div>
		</div>
	</div>


		<!-- Header Mobile -->
		
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?= base_url()?>" class="logo-mobile">
				<img src="<?=base_url('assets')?>/images/new/logo-igsb.png" alt="IMG-LOGO"> <span></span>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<div class="header-icons-mobile">
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/sc.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<form class="search-product pos-relative of-hidden" action="<?=base_url('product/search')?>" method="GET">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="title" placeholder="Search Products...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
									<i class="fs-18 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cartpo" ng-init="fetchcart('<?= base_url()?>','product/cart','<?=$this->session->userdata('id_user')?>')">{{listcart.length}}</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<ul class="header-cart-wrapitem" >
								<li class="header-cart-item" ng-repeat="lc in listcart">
									<div class="header-cart-item-img">
										<img src="<?=base_url('assets')?>/images/product/{{lc.product_image}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name" style="white-space: nowrap; text-overflow: ellipsis; width: 67%; display: block; overflow: hidden">
											{{lc.product_name}}
										</a>
										<span class="header-cart-item-info-c">
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}/{{lc.product_weight_eksekutif/1000}}Kg
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php } ?>	
										
										</span>

										<span class="header-cart-item-info">
											{{lc.kuantitas}} x 
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}
										<?php } ?>
										</span>				
										<div class="header-cart-action remove" data-index={{lc.id_cart}} data-user="{{<?=$this->session->userdata('id_user')?>}}">
											<span class="header-cart-item-info-action">
												<i class="fa fa-trash"></i>
											</span>
										</div>
									</div>

								</li>
							<div class="header-cart-total">
								Total: <span id="total">{{getTotal() | currency : "Rp" : 0 }}</span>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- <a href="<?=base_url('home/cart')?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a> -->
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?=base_url()?>home/chackout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="header-icons-mobile">
						<div class="header-wrapicon2" ng-controller="ProductController">
							<?php 
								if ( ! $this->session->userdata('logged_in')){ ?>
							<img src="<?=base_url('assets')?>/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<?php }else { ?>
							<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class="header-icon1 js-show-header-dropdown bo-cir" alt="ICON">
							<?php } ?>
							<!-- <span class="header-icons-noti" id="cartpo" ng-init="fetchcart('<?= base_url()?>','product/cart')">{{listcart.length}}</span> -->

							<!-- Header cart noti -->
							<div class="header-login header-dropdown" id="login_form">
							<?php 
								if ( ! $this->session->userdata('logged_in')){ ?>
							<div class="m-1">
									<form action="<?= base_url('auth/index')?>" method="post">
										<div class="form-group">
											<input type="email" name="email" class="form-control border  m-b-20" placeholder="email" style="line-height: 1.6;">
											<input type="password" name="password" class="form-control border m-b-20" placeholder="password" style="line-height: 1.6;">
										</div>
										<button class="border w-100 p-2 bg0 s-text1">Login</button>
									</form>
									<span class="p-l-50 t-center fs-12">Tidak punya akun ? <a href="<?=base_url('auth/daftar')?>">daftar</a></span>
								</div>
							</div>
								<?php }else { ?>
									<div class="row p-2" id="profile-mobile">
										<div class="col-lg-6 text-center align-content-center">
											<div class="img m-b-5">
												<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class=" bo-cir" width="100px" heigth="100px" alt="ICON">
											</div>
										<span class="p-t-5 fs-14" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden"><?=$this->session->userdata('nama_user')?></span>
										</div>
										<div class="col-lg-6 text-center align-content-center border-left">
											<button class="border bo-rad-15 p-2 m-b-5 bg0 s-text1 w-100" onclick="window.location.href='<?=base_url('users/edit_profile/')?><?= $this->session->userdata('id_user')?>'">edit profile</button>
											<?php if($this->session->userdata('jenis_user') == "petani"){ ?>
												<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('petani/index')?>'"> Produk</button>
											<?php }else{ ?>
												<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('users/pesanan')?>?status=belum_bayar'">Pesanan</button>
											<?php } ?>
											<button class="border bo-rad-15 p-2 m-b-5 bg10 s-text1 w-100 sign-out">sign out</button>
										</div>
									</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

  <?=$content?>

<script src="<?=base_url()?>/assets/angular-1.5.7/angular.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-sanitize.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-route.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.app.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.controller.main.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.dirPagination.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-deckgrid-master/angular-deckgrid.js"></script>

 <!--===============================================================================================-->
<script type="text/javascript" src="<?=base_url('assets')?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=base_url('assets')?>/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->


	<script src="<?php echo base_url('assets/new_assets/dist/jquery.fileuploader.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_bookpreview.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_cover.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/clone.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		/* $('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		}); */


		$('#formcart').submit(function(e){
			e.preventDefault();
			var nameProduct = $('.product-detail-name').html();
			var id = $('.id_user').val();
			var header = $('#headericon');
			var formcart = $(this);
				$.ajax({
					type: 'POST',
					url: formcart.attr("action"),
					data: formcart.serialize(),
					dataType: 'Json',
					error : function(jqXHR){
					alert("Error"+jqXHR.responseText)
					},success : function(response){
						console.log(response);
						swal(nameProduct, "telah ditambahkan kedalam cart !", "success");	
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
				});
				
		});

	</script>

	<script type="text/javascript">
		$('.header-cart').on('click','.remove',function(){
			var id = $(this).attr('data-index');
			var id_user = $(this).attr('data-user');
			console.log(id);
			swal({
				title: "Are you sure?",
				text: "Mengapus item ini dari cart!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					$.ajax({
					type:'POST',
					url:'<?= site_url('product/removeCart')?>',
					data:'id='+id,
					success: function (response) {
						swal("Selesai! item berhasil dihapus!", {
						icon: "success",
						});
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id_user);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
					});
					
				} else {
					swal("item anda tidak jadi di hapus!");
				}
				});
		})

	</script>

<script type="text/javascript">
		$('.action-pesanan').on('click','.btn-terima',function(){
			var id = $(this).attr('data-index');
			var id_user = $(this).attr('data-user');
			console.log(id);
			swal({
				title: "Are you sure?",
				text: "Mengapus item ini dari cart!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					$.ajax({
					type:'POST',
					url:'<?= site_url('product/removeCart')?>',
					data:'id='+id,
					success: function (response) {
						swal("Selesai! item berhasil dihapus!", {
						icon: "success",
						});
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id_user);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
					});
					
				} else {
					swal("item anda tidak jadi di hapus!");
				}
				});
		})

		var flash = $(".flashdata").attr('data-flash');
		if(flash){
			swal("Login "+flash, {
			icon: flash,
			});
		}

	</script>


<script type="text/javascript">
		$('body').on('click','.btn-bayar',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
						var transaksi = $('#cara-transaksi');
	                	$modal = $("#exampleModal");
						$modal.find(".total_pembayaran_mod").text("Rp."+data.total_pembayaran);
						$modal.find("input[name=total_pembayaran]").val(data.total_pembayaran);
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						transaksi.append('<div class="form-row m-t-5 m-b-5 card" id="append-bank">'+
                                '<div class="card-header">'+
                                '<label for="" style="font-weight:bold">Gunakan ATM/mBanking/setor tunai untuk transfer ke rekening TOKO TANAMAN dibawah ini</label>'+
                                '</div>'+
                                '<div class="card-body">'+
                                    '<div class="row no-gytters align-items-center">'+
                                    '<div class="col mr-2">'+
                                        '<div class="text-xs font-weight-bold text-'+data.warna+' text-uppercase mb-1">'+data.nama_akun+'</div>'+
                                        '<div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size:32px;">'+data.no_rek+'</div>'+
                                    '</div>'+
                                    '<div class="col-auto">'+
                                        '<img src="<?=base_url('assets/images/icons/')?>'+data.icon+'" alt="" width="50px">'+
                                    '</div>'+
                                    '</div>'+
                                '</div>'+
								'<div class="card-footer text-justify"> <label class="font-weight-bold"> Silahkan upload bukti transfer sebelum '+data.batas+'</label> <label class="font-weight-bold">Demi keamanan transaksi, mohon untuk tidak membagikan bukti atau konfirmasi pembayaran pesanan kepada siapapun, selain menggunggahnya via website TOKO TANAMAN</label></div>'+
                            '</div>');
						$modal.modal("show");
	                }
	            });		
			}
		})

		$("#exampleModal").on('hidden.bs.modal', function () {
			$(this).data('bs.modal', null);
			$("#append-bank").remove();
		});

		$('body').on('click','.btn-terima',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
	                	$modal = $("#barangDiterima");
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						$modal.modal("show");
	                }
	            });		
			}
		})

		$('body').on('click','.btn-kembali',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
	                	$modal = $("#pengembalianBarang");
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						$modal.modal("show");
	                }
	            });		
			}
		})

	</script>

	<script type="text/javascript">
	var $star_rating = $('.star-rating .fa');
	var SetRatingStar = function() {
	return $star_rating.each(function() {
		if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
		return $(this).removeClass('fa-star-o').addClass('fa-star');
		} else {
		return $(this).removeClass('fa-star').addClass('fa-star-o');
		}
	});
	};

	$star_rating.on('click', function() {
	$star_rating.siblings('input.rating-value').val($(this).data('rating'));
	return SetRatingStar();
	});

	SetRatingStar();
	$(document).ready(function() {

	});
	</script>

<!-- <script type="text/javascript">
		$('#form_vrefikasi').submit(function(e){
			e.preventDefault();
			var formvrefikasi = $(this);
				$.ajax({
					type: 'POST',
					url: formvrefikasi.attr("action"),
					data: formvrefikasi.serialize(),
					dataType: 'Json',
					error : function(jqXHR){
					alert("Error"+jqXHR.responseText)
					},success : function(response){
						console.log(response);
						swal({
							title: "Pembayaran Selesai!",
							text: "Verfikasi pembayaran akan dilakukan kurang lebih 1x24 jam!",
							type: "success"
						});
						setTimeout(() => {
							window.location = "<?=base_url('home')?>";
						}, 5000);
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart');
						
					}
				});
				
		});

	</script>
 -->


<script type="text/javascript">
		$('#profile').on('click','.sign-out',function(){
			swal({
				title: "Apakah anda yakin?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					window.location = "<?=base_url('auth/sign_out')?>";
				} else {
					swal("Selamat belanja!");
				}
				});
		})

		$('#profile-mobile').on('click','.sign-out',function(){
			swal({
				title: "Apakah anda yakin?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					window.location = "<?=base_url('auth/sign_out')?>";
				} else {
					swal("Selamat belanja!");
				}
				});
		})

	</script>

<!--===============================================================================================-->
	<script src="<?=base_url('assets')?>/js/main.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="id" ng-app="app" prefix="og:http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"
xmlns:og="http://opengraphprotocol.org/schema/" xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOKO TANAMAN</title>
  <?=$header?>
</head>
<body>
  <!-- Header -->

<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar" style="background: green">
				<div class="topbar-social">
					<a href="https://www.instagram.com/igsb_farm/" class="topbar-social-item fa fa-instagram text-white">Tanaman Hias</a>
					<a href="https://api.whatsapp.com/send?phone=6289636424779" class="topbar-social-item fa fa-whatsapp text-white">&nbsp 089636424779</a>

					<!-- <a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
				</div>

				<!-- <span class="topbar-child1" style="text-transform: capitalize;">
					khusus daerah bogor, depok dan jakarta
				</span> -->
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?=base_url('')?>" class="logo">
					<img src="<?=base_url('assets')?>/images/new/logo-igsb.png" alt="IMG-LOGO"> <span>Toko Tanaman Hias</span>
				</a>

				<!-- Menu -->
				<div class="wrap_menu" ng-controller="ProductController">
					<nav class="menu" ng-init="fetchcategory('<?=base_url()?>','product/fetchcategory')">
						<ul class="main_menu">
							<!-- <li ng-repeat="ca in category | orderBy:'name_category'" style="text-transform: capitalize;">
								<a href="<?=base_url('home/product')?>?category={{ca.id_category}}">{{ca.name_category}}</a>
							</li> -->
							<li  style="text-transform: capitalize;">
								<a href="<?=base_url('home/index')?>">Home</a>
							</li>
							<li  style="text-transform: capitalize;">
								<a href="<?=base_url('home/Artikel')?>">Artikel</a>
							</li>
						</ul>
					</nav>
				</div>
				

				<!-- Header Icon -->
				<div class="header-icons" id="headericon">
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/sc.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<form class="search-product pos-relative of-hidden" action="<?=base_url('product/search')?>" method="GET">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="title" placeholder="Search Products...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
									<i class="fs-18 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
					<span class="linedivide1"></span>
					
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cartpomobile" ng-init="fetchcart('<?= base_url()?>','product/cart','<?=$this->session->userdata('id_user')?>')">{{listcart.length}}</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<ul class="header-cart-wrapitem" >
								<li class="header-cart-item" ng-repeat="lc in listcart">
									<div class="header-cart-item-img">
										<img src="<?=base_url('assets')?>/images/product/{{lc.product_image}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name" style="white-space: nowrap; text-overflow: ellipsis; width: 67%; display: block; overflow: hidden">
											{{lc.product_name}}
										</a>
										<span class="header-cart-item-info-c">
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}/{{lc.product_weight_eksekutif/1000}}Kg
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php } ?>	
										
										</span>

										<span class="header-cart-item-info">
											{{lc.kuantitas}} x 
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}
										<?php } ?>
										</span>				
										<div class="header-cart-action remove" data-index={{lc.id_cart}} data-user="{{<?=$this->session->userdata('id_user')?>}}">
											<span class="header-cart-item-info-action">
												<i class="fa fa-trash"></i>
											</span>
										</div>
									</div>

								</li>
							<div class="header-cart-total">
								Total: <span id="total">{{getTotal() | currency : "Rp" : 0 }}</span>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- <a href="<?=base_url('home/cart')?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a> -->
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?=base_url()?>home/chackout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
					<span class="linedivide1"></span>
					<div class="header-wrapicon2" ng-controller="ProductController">
						<?php 
							if ( ! $this->session->userdata('logged_in')){ ?>
						<img src="<?=base_url('assets')?>/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php }else { ?>
						<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class="header-icon1 js-show-header-dropdown bo-cir" alt="ICON">
						<?php } ?>
						<!-- <span class="header-icons-noti" id="cartpo" ng-init="fetchcart('<?= base_url()?>','product/cart')">{{listcart.length}}</span> -->

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" id="login_form">
						<?php 
							if ( ! $this->session->userdata('logged_in')){ ?>
							<div class="m-2">
								<form action="<?= base_url('auth/index')?>" method="post">
									<div class="form-group">
										<input type="email" name="email" class="form-control border p-r-300 m-b-20" placeholder="email" style="line-height: 1.6;">
										<input type="password" name="password" class="form-control border p-r-300 m-b-20" placeholder="password" style="line-height: 1.6;">
									</div>
									<button class="border w-100 p-2 bg0 s-text1">Login</button>
								</form>
								<span class="p-l-50 t-center fs-12">Tidak punya akun ? <a href="<?=base_url('auth/daftar')?>">daftar</a></span>
							</div>
							<?php }else { ?>
							<div class="row p-2" id="profile">
								<div class="col-lg-6 text-center align-content-center">
									<div class="img m-b-5">
										<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class=" bo-cir" width="100px" heigth="100px" alt="ICON">
									</div>
								<span class="p-t-5 fs-14" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden"><?=$this->session->userdata('nama_user')?></span>
								</div>
								<div class="col-lg-6 text-center align-content-center border-left">
									<button class="border bo-rad-15 p-2 m-b-5 bg0 s-text1 w-100" onclick="window.location.href='<?=base_url('users/edit_profile/')?><?= $this->session->userdata('id_user')?>'">edit profile</button>
									<?php if($this->session->userdata('jenis_user') == "petani"){ ?>
										<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('petani/index')?>'">Penawaran Produk</button>
									<?php }else{ ?>
										<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('users/pesanan')?>?status=belum_bayar'">Pesanan</button>
									<?php } ?>
									<button class="border bo-rad-15 p-2 m-b-5 bg10 s-text1 w-100 sign-out">sign out</button>
								</div>
							</div>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- Header Mobile -->
		
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?= base_url()?>" class="logo-mobile">
				<img src="<?=base_url('assets')?>/images/new/logo-igsb.png" alt="IMG-LOGO"> <span>IGSB FARM</span>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<div class="header-icons-mobile">
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/sc.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<form class="search-product pos-relative of-hidden" action="<?=base_url('product/search')?>" method="GET">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="title" placeholder="Search Products...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
									<i class="fs-18 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="header-wrapicon2" ng-controller="ProductController">
						<img src="<?=base_url('assets')?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cartpo" ng-init="fetchcart('<?= base_url()?>','product/cart','<?=$this->session->userdata('id_user')?>')">{{listcart.length}}</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" >
							<ul class="header-cart-wrapitem" >
								<li class="header-cart-item" ng-repeat="lc in listcart">
									<div class="header-cart-item-img">
										<img src="<?=base_url('assets')?>/images/product/{{lc.product_image}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name" style="white-space: nowrap; text-overflow: ellipsis; width: 67%; display: block; overflow: hidden">
											{{lc.product_name}}
										</a>
										<span class="header-cart-item-info-c">
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}/{{lc.product_weight_eksekutif/1000}}Kg
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}/{{lc.product_weight/1000}}Kg
										<?php } ?>	
										
										</span>

										<span class="header-cart-item-info">
											{{lc.kuantitas}} x 
										<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lc.product_price_eksekutif | currency : "Rp" : 0 }}
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lc.product_price_seller | currency : "Rp" : 0 }}
										<?php }else{ ?>
											{{lc.product_price | currency : "Rp" : 0 }}
										<?php } ?>
										</span>				
										<div class="header-cart-action remove" data-index={{lc.id_cart}} data-user="{{<?=$this->session->userdata('id_user')?>}}">
											<span class="header-cart-item-info-action">
												<i class="fa fa-trash"></i>
											</span>
										</div>
									</div>

								</li>
							<div class="header-cart-total">
								Total: <span id="total">{{getTotal() | currency : "Rp" : 0 }}</span>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- <a href="<?=base_url('home/cart')?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a> -->
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?=base_url()?>home/chackout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="header-icons-mobile">
						<div class="header-wrapicon2" ng-controller="ProductController">
							<?php 
								if ( ! $this->session->userdata('logged_in')){ ?>
							<img src="<?=base_url('assets')?>/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<?php }else { ?>
							<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class="header-icon1 js-show-header-dropdown bo-cir" alt="ICON">
							<?php } ?>
							<!-- <span class="header-icons-noti" id="cartpo" ng-init="fetchcart('<?= base_url()?>','product/cart')">{{listcart.length}}</span> -->

							<!-- Header cart noti -->
							<div class="header-login header-dropdown" id="login_form">
							<?php 
								if ( ! $this->session->userdata('logged_in')){ ?>
							<div class="m-1">
									<form action="<?= base_url('auth/index')?>" method="post">
										<div class="form-group">
											<input type="email" name="email" class="form-control border  m-b-20" placeholder="email" style="line-height: 1.6;">
											<input type="password" name="password" class="form-control border m-b-20" placeholder="password" style="line-height: 1.6;">
										</div>
										<button class="border w-100 p-2 bg0 s-text1">Login</button>
									</form>
									<span class="p-l-50 t-center fs-12">Tidak punya akun ? <a href="<?=base_url('auth/daftar')?>">daftar</a></span>
								</div>
							</div>
								<?php }else { ?>
									<div class="row p-2" id="profile-mobile">
										<div class="col-lg-6 text-center align-content-center">
											<div class="img m-b-5">
												<img src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" class=" bo-cir" width="100px" heigth="100px" alt="ICON">
											</div>
										<span class="p-t-5 fs-14" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden"><?=$this->session->userdata('nama_user')?></span>
										</div>
										<div class="col-lg-6 text-center align-content-center border-left">
											<button class="border bo-rad-15 p-2 m-b-5 bg0 s-text1 w-100" onclick="window.location.href='<?=base_url('users/edit_profile/')?><?= $this->session->userdata('id_user')?>'">edit profile</button>
											<?php if($this->session->userdata('jenis_user') == "petani"){ ?>
												<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('petani/index')?>'">Penawaran Produk</button>
											<?php }else{ ?>
												<button class="border bo-rad-15 p-2 m-b-5 bg9 s-text1 w-100" onclick="window.location.href='<?=base_url('users/pesanan')?>?status=belum_bayar'">Pesanan</button>
											<?php } ?>
											<button class="border bo-rad-15 p-2 m-b-5 bg10 s-text1 w-100 sign-out">sign out</button>
										</div>
									</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

  <?=$content?>

<script src="<?=base_url()?>/assets/angular-1.5.7/angular.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-sanitize.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-route.min.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.app.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.controller.main.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular.dirPagination.js"></script>
<script src="<?=base_url()?>/assets/angular-1.5.7/angular-deckgrid-master/angular-deckgrid.js"></script>

 <!--===============================================================================================-->
<script type="text/javascript" src="<?=base_url('assets')?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=base_url('assets')?>/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->


	<script src="<?php echo base_url('assets/new_assets/dist/jquery.fileuploader.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_bookpreview.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_cover.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/clone.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		/* $('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		}); */


		$('#formcart').submit(function(e){
			e.preventDefault();
			var nameProduct = $('.product-detail-name').html();
			var id = $('.id_user').val();
			var header = $('#headericon');
			var formcart = $(this);
				$.ajax({
					type: 'POST',
					url: formcart.attr("action"),
					data: formcart.serialize(),
					dataType: 'Json',
					error : function(jqXHR){
					alert("Error"+jqXHR.responseText)
					},success : function(response){
						console.log(response);
						swal(nameProduct, "telah ditambahkan kedalam cart !", "success");	
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
				});
				
		});

	</script>

	<script type="text/javascript">
		$('.header-cart').on('click','.remove',function(){
			var id = $(this).attr('data-index');
			var id_user = $(this).attr('data-user');
			console.log(id);
			swal({
				title: "Are you sure?",
				text: "Mengapus item ini dari cart!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					$.ajax({
					type:'POST',
					url:'<?= site_url('product/removeCart')?>',
					data:'id='+id,
					success: function (response) {
						swal("Selesai! item berhasil dihapus!", {
						icon: "success",
						});
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id_user);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
					});
					
				} else {
					swal("item anda tidak jadi di hapus!");
				}
				});
		})

	</script>

<script type="text/javascript">
		$('.action-pesanan').on('click','.btn-terima',function(){
			var id = $(this).attr('data-index');
			var id_user = $(this).attr('data-user');
			console.log(id);
			swal({
				title: "Are you sure?",
				text: "Mengapus item ini dari cart!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					$.ajax({
					type:'POST',
					url:'<?= site_url('product/removeCart')?>',
					data:'id='+id,
					success: function (response) {
						swal("Selesai! item berhasil dihapus!", {
						icon: "success",
						});
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart',id_user);
						angular.element($('#cartpomobile')).scope().fetchcart('<?= base_url()?>','product/cart',id);
					}
					});
					
				} else {
					swal("item anda tidak jadi di hapus!");
				}
				});
		})

		var flash = $(".flashdata").attr('data-flash');
		if(flash){
			swal("Login "+flash, {
			icon: flash,
			});
		}

	</script>


<script type="text/javascript">
		$('body').on('click','.btn-bayar',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
						var transaksi = $('#cara-transaksi');
	                	$modal = $("#exampleModal");
						$modal.find(".total_pembayaran_mod").text("Rp."+data.total_pembayaran);
						$modal.find("input[name=total_pembayaran]").val(data.total_pembayaran);
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						transaksi.append('<div class="form-row m-t-5 m-b-5 card" id="append-bank">'+
                                '<div class="card-header">'+
                                '<label for="" style="font-weight:bold">Gunakan ATM/iBanking/mBanking/setor tunai untuk transfer ke rekening IGSB Farm berikut ini</label>'+
                                '</div>'+
                                '<div class="card-body">'+
                                    '<div class="row no-gytters align-items-center">'+
                                    '<div class="col mr-2">'+
                                        '<div class="text-xs font-weight-bold text-'+data.warna+' text-uppercase mb-1">'+data.nama_akun+'</div>'+
                                        '<div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size:32px;">'+data.no_rek+'</div>'+
                                    '</div>'+
                                    '<div class="col-auto">'+
                                        '<img src="<?=base_url('assets/images/icons/')?>'+data.icon+'" alt="" width="50px">'+
                                    '</div>'+
                                    '</div>'+
                                '</div>'+
								'<div class="card-footer text-justify"> <label class="font-weight-bold"> Silahkan upload bukti transfer sebelum '+data.batas+'</label> <label class="font-weight-bold">Demi keamanan transaksi, mohon untuk tidak membagikan bukti atau konfirmasi pembayaran pesanan kepada siapapun, selain menggunggahnya via website IGSB FARM</label></div>'+
                            '</div>');
						$modal.modal("show");
	                }
	            });		
			}
		})

		$("#exampleModal").on('hidden.bs.modal', function () {
			$(this).data('bs.modal', null);
			$("#append-bank").remove();
		});

		$('body').on('click','.btn-terima',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
	                	$modal = $("#barangDiterima");
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						$modal.modal("show");
	                }
	            });		
			}
		})

		$('body').on('click','.btn-kembali',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('Product/fetchbyid');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
	                	$modal = $("#pengembalianBarang");
						$modal.find("input[name=id_pesanan]").val(data.id_pesanan);
						$modal.modal("show");
	                }
	            });		
			}
		})

	</script>

	<script type="text/javascript">
	var $star_rating = $('.star-rating .fa');
	var SetRatingStar = function() {
	return $star_rating.each(function() {
		if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
		return $(this).removeClass('fa-star-o').addClass('fa-star');
		} else {
		return $(this).removeClass('fa-star').addClass('fa-star-o');
		}
	});
	};

	$star_rating.on('click', function() {
	$star_rating.siblings('input.rating-value').val($(this).data('rating'));
	return SetRatingStar();
	});

	SetRatingStar();
	$(document).ready(function() {

	});
	</script>

<!-- <script type="text/javascript">
		$('#form_vrefikasi').submit(function(e){
			e.preventDefault();
			var formvrefikasi = $(this);
				$.ajax({
					type: 'POST',
					url: formvrefikasi.attr("action"),
					data: formvrefikasi.serialize(),
					dataType: 'Json',
					error : function(jqXHR){
					alert("Error"+jqXHR.responseText)
					},success : function(response){
						console.log(response);
						swal({
							title: "Pembayaran Selesai!",
							text: "Verfikasi pembayaran akan dilakukan kurang lebih 1x24 jam!",
							type: "success"
						});
						setTimeout(() => {
							window.location = "<?=base_url('home')?>";
						}, 5000);
						angular.element($('#cartpo')).scope().fetchcart('<?= base_url()?>','product/cart');
						
					}
				});
				
		});

	</script>
 -->


<script type="text/javascript">
		$('#profile').on('click','.sign-out',function(){
			swal({
				title: "Apakah anda yakin?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					window.location = "<?=base_url('auth/sign_out')?>";
				} else {
					swal("Selamat belanja!");
				}
				});
		})

		$('#profile-mobile').on('click','.sign-out',function(){
			swal({
				title: "Apakah anda yakin?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					window.location = "<?=base_url('auth/sign_out')?>";
				} else {
					swal("Selamat belanja!");
				}
				});
		})

	</script>

<!--===============================================================================================-->
	<script src="<?=base_url('assets')?>/js/main.js"></script>
</body>
</html>