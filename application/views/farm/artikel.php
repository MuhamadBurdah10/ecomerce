<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Artikel
				</h3>
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
							<img src="<?= base_url('assets/images/product/')?><?= $all['gambar']?>" width="100%" height="150px" >
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
    </section>