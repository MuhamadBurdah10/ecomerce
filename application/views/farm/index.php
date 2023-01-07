<!-- Slide1 -->
	<div class="flashdata" data-flash="<?= $this->session->flashdata("flash");?>"></div>
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(assets/images/new/slide1.jpg);  background-color: #cccccc;">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							#dirumahaja
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Yuk Belanja Di toko kamiss
						</h2>
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							gratis ongkir
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="<?=base_url('home/product')?>?category=99" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(assets/images/new/slide2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							#diemdirumahaja
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Produk Dari Petani Lokal
						</h2>
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							gratis ongkir
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="<?=base_url('home/product')?>?category=99" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(assets/images/new/slide3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							#2020Sehat
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Kualitas Produk Dijamin HIGIENIS
						</h2>
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							gratis ongkir
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="<?=base_url('home/product')?>?category=99" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- promo Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105" ng-controller="ProductController" ng-init="fetchpromo('<?= base_url()?>','product/fetchpromo')">
		<div class="container-fluid" ng-repeat="po in promo">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					{{po.promo_name}}
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="row" ng-init="fetchlistpromo('<?= base_url()?>','product/fetchlistpromo', po.id_promo)">

					<div class="card col-lg-2 p-2" ng-repeat="lp in listpromo">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="<?=base_url('assets')?>/images/product/{{lp.product_image}}" width="100%" height="150px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
										<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a> -->

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											<a href="<?= base_url('home/productdetail/')?>{{lp.product_id}}" style="color:white;">beli</a>
										</div>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('home/productdetail/')?>{{lp.product_id}}" class="block2-name dis-block s-text3 p-b-5" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden">
									{{lp.product_name}}
								</a>

								<span class="block2-oldprice m-text7 p-r-5">
									{{lp.product_price | currency : "Rp" : 0 }}
								</span>

							</div>
								<span class=" m-text8 p-b-5">
									Rp.{{lp.product_price_seller | currency : "Rp" : 0}}
								</span>
								<span class="m-text28">
									/{{lp.product_weight/1000}}Kg
								</span>
						</div>
                    </div>
                    
                    
				</div>
			</div>

		</div>
	</section>

	<div class="wrap_menu_mobile" ng-controller="ProductController">
				<h3 class="m-text5 t-center">
					Category
				</h3>
		<nav class="menu" ng-init="fetchcategory('<?=base_url()?>','product/fetchcategory')">
			<ul class="main_menu_mobile">
				<li ng-repeat="ca in category | orderBy:'name_category'" style="text-transform: capitalize;">
					<a href="<?=base_url('home/product')?>?category={{ca.id_category}}">{{ca.name_category}}</a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105" ng-controller="ProductController">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Rekomendasi Produk untuk Anda
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="">
				<div class="row" ng-init="fetchall('<?= base_url()?>','product/fetchall')">

					<div class="card col-lg-2 p-2 mobile-item" ng-repeat="pr in product">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative {{(pr.label == 'konvesional')?'block2-labelsale':'block2-labelnew'}}">
								<img src="<?=base_url('assets')?>/images/product/{{pr.product_image}}" width="100%" height="150px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a> -->

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
											<a href="<?= base_url('home/productdetail/')?>{{pr.product_id}}" style="color:white;">beli</a>
										</div>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('home/productdetail/')?>{{pr.product_id}}" class="block2-name dis-block s-text3 p-b-5" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden">
									{{pr.product_name}}
								</a>

								<!-- <span class="block2-oldprice m-text7 p-r-5">
									Rp.{{pr.product_price}}
								</span> -->

							</div>
								<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
								<span class=" m-text8 p-b-5">
									{{pr.product_price_eksekutif | currency : "Rp" : 0 }}
								</span>
								<span class="m-text28">
									/{{pr.product_weight_eksekutif/1000}}Kg
								</span>
								
								<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
								<span class=" m-text8 p-b-5">
									{{pr.product_price_seller | currency : "Rp" : 0 }}
								</span>
								<span class="m-text28">
									/{{pr.product_weight/1000}}Kg
								</span>
								<?php }else{ ?>
								<span class=" m-text8 p-b-5">
									{{pr.product_price | currency : "Rp" : 0 }}
								</span>
								<span class="m-text28">
									/{{pr.product_weight/1000}}Kg
								</span>
								<?php } ?>	
							</div>
							<div class="right-auto text-right"><span class="m-text28">{{pr.penjualan}}</span></div>
                    </div>
                    
                    
				</div>
			</div>

		</div>
	</section>

	
	<!-- Shipping -->
	<!-- <section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section> -->


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

			<div class="t-center s-text8 p-t-20">
				Copyright © 2020 Diki Candra Suandi.</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
	


