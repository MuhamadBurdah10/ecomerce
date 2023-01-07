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

		<a href="product.html" class="s-text16">
			Detail Product
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

	</div>
<?php foreach ($product as $p) {
?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80" id="detailProduct">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?= base_url('assets/images/product/')?><?= $p['product_image']?>">
							<div class="wrap-pic-w">
								<img src="<?= base_url('assets/images/product/')?><?= $p['product_image']?>" alt="IMG-PRODUCT">
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $p['product_name'];?>
				</h4>
				<div class="rate">
				<?php for ($i=1; $i <= 5; $i++) { ?>
					<span class="fa fa-star <?= ($rate->rate >= $i ? 'checked' : ''); ?> "></span>
				<?php } ?> | <?= (!empty($rate->rate)?$rate->rate:'0'); ?>
				</div>
				<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
					<span class="m-text17">
						Rp.<?= number_format($p['product_price_eksekutif'],0,',','.');?>
					</span>
					<!-- <span class="m-text28">
						/<?= $p['product_weight_eksekutif']/1000;?>
					</span> -->
					
				<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
					<span class="m-text17">
						Rp.<?=  number_format($p['product_price_seller'],0,',','.');?>
					</span>
					
				<?php }else{ ?>
					<span class="m-text17">
						Rp.<?=  number_format($p['product_price'],0,',','.');?>
					</span>
					
				<?php } ?>
				

				<p class="s-text8 p-t-10">
					<!-- Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat. -->
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">

					<!-- @diki liat kondisi bakal di gunain apa engga -->
					<!-- <div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							berat
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16 ">
							<select class="selection-2 custom-select w-100" name="berat" id="berat">
								<option>Choose an option</option>
								<option value="100">100 gram</option>
								<option value="250">250 gram</option>
								<option value="500">500 gram</option>
								<option value="1000">1 Kg</option>
							</select>
						</div>
					</div> -->

					<form action="<?= base_url('product/addcart')?>" method="post" id="formcart">
						<div class="flex-r-m flex-w p-t-10">
							<div class="w-size16 flex-m flex-w">
								<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
									<div class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</div>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product" min="1" max="<?= $p['product_quantity'];?>" value="1">
					
									<div class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</div>
								</div>
								<?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
									<input type="hidden" name="harga" value="<?= $p['product_price_eksekutif'];?>">
									
								<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
									<input type="hidden" name="harga" value="<?= $p['product_price_seller'];?>">
								<?php }else{ ?>
									<input type="hidden" name="harga" value="<?= $p['product_price'];?>">
								<?php } ?>
								
								<input type="hidden" name="product_id" value="<?= $p['product_id'];?>">
								<input type="hidden" name="harga_beli" value="<?= $p['harga_beli'];?>">
								<input type="hidden" name="id_user" class="id_user" value="<?= $this->session->userdata('id_user')?>">

								<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
									<!-- Button -->
									<?php 
									if ( ! $this->session->userdata('logged_in')){ ?>
									<div class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 js-show-header-dropdown" onclick="alert('login terlebih dahulu!')">
										Add to Cart
									</div>
									<?php }elseif ($this->session->userdata('jenis_user')=="petani") { ?>
									<div class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 js-show-header-dropdown" onclick="alert('Petani tidak dapat melakukan pemesanan!')">
										Add to Cart
									</div>
									<?php } elseif ($this->session->userdata('jenis_user')=="admin") { ?>
									<div class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 js-show-header-dropdown" onclick="alert('Admin tidak dapat melakukan pemesanan!')">
										Add to Cart
									</div>
									<?php }
									else{ ?>
									<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 btn-cart-send">
										Add to Cart
									</button>
									<?php } ?>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="p-b-45">
					<span class="m-text12">Stok : <?= $p['product_quantity'];?> </span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Keterangan Produk
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $p['deskripsi'];?>
						</p>
					</div>
				</div>

				 <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				 	<div class="row">
				 	<img src="http://localhost/igsb/assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON" style="width: 9%;">

					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 m-l-8">
						Toko Udin
					</h5>
					<div><a href="<?= base_url('home/toko/')?><?=$p['toko_id']?>" class="border w-9 p-2  m-l-12 color0-hov" style="float: right;">Lihat Toko</a></div>
					
				</div>
				 	

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }
$this->load->view('product/releated_product.php');
?>

