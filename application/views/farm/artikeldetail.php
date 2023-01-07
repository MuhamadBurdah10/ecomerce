<style>
.checked {
  color: orange;
}
</style>

<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
		<a href="index.html" class="s-text16">
			Artikel
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

	</div>
<?php foreach ($artikel as $p) {
?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80" id="detailProduct">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?= base_url('assets/images/product/')?><?= $p['gambar']?>">
							<div class="wrap-pic-w">
								<img src="<?= base_url('assets/images/product/')?><?= $p['gambar']?>" alt="IMG-PRODUCT">
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13" style="color: green; ">
					<?= ucwords($p['judul']) ;?>
				</h4>
				
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $p['isi_artikel'];?>
						</p>
					</div>
				</div>

				<!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div> -->

			</div>
		</div>
	</div>

<!-- <?php }
//$this->load->view('product/releated_product.php');
?> -->

