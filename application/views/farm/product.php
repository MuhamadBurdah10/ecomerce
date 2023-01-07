<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?=base_url()?>assets/images/new/slide2.png);">
		<h2 class="l-text2 t-center">
		</h2>
	</section>
	<!-- Content page -->

    <section class="newproduct bgwhite p-t-45 p-b-105" ng-controller="ProductController">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center  mb-1">
                    Rekomendasi Tanaman untuk Anda
                </h3>
            
                <div class="row" ng-init="fetchall('<?= base_url()?>','product/fetchall')">

                    <div class="card col-lg-2 p-2 mobile-item" ng-repeat="pr in product">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <img src="<?=base_url('assets')?>/images/product/{{pr.product_image}}" width="100%" height="150px" alt="IMG-PRODUCT">

                                <!-- <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
 
                                    <div class="block2-btn-addcart w-size1 trans-0-4">

                                        
                                        <div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
                                            <a href="<?= base_url('home/productdetail/')?>{{pr.product_id}}" style="color:white;">beli</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 mt-3" >
                                            <a href="<?= base_url('home/productdetail/')?>{{pr.product_id}}" style="color:white;">beli</a>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a href="<?= base_url('home/productdetail/')?>{{pr.product_id}}" class="block2-name dis-block s-text3 p-b-5" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden">
                                    {{pr.product_name}}
                                </a>

                                <!-- <span class="block2-oldprice m-text7 p-r-5">
                                    Rp.{{pr.product_price}}
                                </span> -->

                            </div>
                                <span class=" m-text8 p-b-5">
                                    {{pr.product_price | currency : "Rp" : 0 }}
                                </span> 
                            </div>
                            <div class="right-auto text-right"><span class="m-text28">{{pr.penjualan}}</span></div>
                    </div>
                </div>
            </div>

	<!-- <section class="bggray p-t-55 p-b-65" ng-controller="ProductController">
         
		<div class="container">
			<div class="row">
				<div class="col-sm- col-md-12 col-lg-12 p-b-50">	
                    <h4 class="m-text14 p-b-7 mt-6">
							<center>PRODUK TANAMAN HIAS</cente>
					</h4>

					<div class="row m-2" ng-init="fetchallproduct('<?= base_url()?>','product/fetchallproduct','<?="99"?>')">
						<div class="col-sm-12 col-md-10 col-lg-2 p-b-50 card mobile-item m-1  mt-2 " dir-paginate="lp in product | orderBy:sortType:sortReverse  | filter:keywordfw | itemsPerPage:12">
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                    <img src="<?=base_url('assets')?>/images/product/{{lp.product_image}}" width="100%" height="180px" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                             Button -->
                                           <!--  <div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
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
                                        Rp.{{lp.product_price}}
                                    </span> 
                                </div>
									<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
										<span class=" m-text8 p-b-5">
											{{lp.product_price_eksekutif | currency : "Rp" : 0 }}
										</span>
											
									<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
										<span class=" m-text8 p-b-5">
											{{lp.product_price_seller | currency : "Rp" : 0 }}
										</span>
										
									<?php }else{ ?>
										<span class=" m-text8 p-b-5">
											{{lp.product_price | currency : "Rp" : 0 }}
										</span>
										
									<?php } ?>
                            </div>
                        </div>
					</div>

                    
                    <div class="row" ng-if="product" style="margin-top: 20px">
                        <div class="col-12">
                            <div class="paging" style="text-align: center;">
                                <dir-pagination-controls
                                    max-size="10"
                                    direction-links="true"
                                    boundary-links="true" >
                                </dir-pagination-controls>
                            </div>
                        </div>
                    </div> -->
            <hr>
                    <!-- artikel -->
            <div class="container">
            <div class="sec-title p-b-60">
                <h4 class="m-text14 p-b-7 mt-5">
                            <center>Tips Merawat Tanaman Hias</cente>
                    </h4>
            </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php foreach ($artikel as $all) {
                        ?>
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                            <img src="<?= base_url('assets/images/product/')?><?= $all['gambar']?>" width="%" height="100px" style="border-radius: 15px:" >
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <span class="block2-price m-text8 p-r-5">
                                    <?= $all['judul']; ?>
                                </span>
                                <a href="<?= base_url('home/artikeldetail/')?><?= $all['id_artikel']; ?>" class="block2-name dis-block s-text3 p-b-5">
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
				</div>
			</div>
		</div>
	 </section> 