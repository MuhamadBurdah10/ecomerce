<div class="container mt-5">
    <section class="newproduct bgwhite p-t-45 p-b-105" >
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Produk yang anda cari
				</h3>
			</div>

			<!-- Slide2 -->
            
			<div class="wrap-slick2" ng-controller="ProductController">
				<div class="row">
<?php foreach ($data as $p) { ?>

					<div class="card col-lg-2 p-2 mobile-item">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative <?= ($p['label'] == 'konvesional')?'block2-labelsale':'block2-labelnew'?>">
								<img src="<?=base_url('assets')?>/images/product/<?= $p['product_image']?>" width="100%" height="150px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a> -->

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
											<a href="<?= base_url('home/productdetail/')?><?= $p['product_id']?>" style="color:white;">beli</a>
										</div>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('home/productdetail/')?><?= $p['product_id']?>" class="block2-name dis-block s-text3 p-b-5" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden">
                                <?= $p['product_name']?>
								</a>

								<!-- <span class="block2-oldprice m-text7 p-r-5">
									Rp.{{pr.product_price}}
								</span> -->

							</div>
								<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
								<span class=" m-text8 p-b-5">
									Rp.<?= number_format($p['product_price_eksekutif'],0,',','.')?>
								</span>
								<span class="m-text28">
									/<?= $p['product_weight_eksekutif']/1000?>Kg
								</span>
								
								<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
								<span class=" m-text8 p-b-5">
									Rp.<?= number_format($p['product_price_seller'],0,',','.')?>
								</span>
								<span class="m-text28">
									/<?= $p['product_weight']/1000?>Kg
								</span>
								<?php }else{ ?>
								<span class=" m-text8 p-b-5">
									Rp.<?= number_format($p['product_price'],0,',','.')?>
								</span>
								<span class="m-text28">
									/<?= $p['product_weight']/1000?>Kg
								</span>
								<?php } ?>	
							</div>
							<div class="right-auto text-right"><span class="m-text28">{{pr.penjualan}}</span></div>
                    </div>
                    
                    

<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>