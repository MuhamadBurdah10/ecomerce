<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>
			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php foreach ($allproduct as $all) {
						?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							<img src="<?= base_url('assets/images/product/')?><?= $all['product_image']?>" width="100%" height="150px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											<a href="<?= base_url('home/productdetail/')?><?= $all['product_id']; ?>" style="color:white;">beli</a>
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('home/productdetail/')?><?= $all['product_id']; ?>" class="block2-name dis-block s-text3 p-b-5">
									<?= $all['product_name']; ?>
								</a>

								<span class="block2-price m-text8 p-r-5">
									Rp.<?= $all['product_price']; ?>
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

		</div>
    </section>