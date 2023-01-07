<style>
.checked {
  color: orange;
}

body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 0px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 2px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

</style>

<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="s-text16">
			Toko
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
	</div>


	<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse" style="margin-top: 2px;">
                    <div class="col-lg-3">
                        
                            <h5 class="dark-color">Chat <a href="https://api.whatsapp.com/send?phone=6285882471715" class="topbar-social-item fa fa-whatsapp text-dark"> WhatsApp</a></h5>
                            
                    </div>

                    <div class="col-lg-5">
                        <div class="about-text go-to">
                            <h5 class="dark-color">Toko Pak Udin</h5>
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-avatar">
                           	<img src="http://localhost/igsb/assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON" style="width: 40%;">
                        </div>
                    </div>
                </div>

              <section class="newproduct bgwhite p-t-45 p-b-105" ng-controller="ProductController">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Rekomendasi Produk untuk Anda
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="">
				<div class="row" >
 			<?php 
            $i = 1;
            foreach ($product as $p) { ?>
					<div class="card col-lg-2 p-2 mobile-item" >
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<img src="<?=base_url('assets')?>/images/product/<?=$p['product_image']?>" width="100%" height="150px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a> -->

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<div class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
											<a href="<?= base_url('home/productdetail/')?><?=$p['product_id']?>" style="color:white;">beli</a>
										</div>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('home/productdetail/')?><?=$p['product_id']?>" class="block2-name dis-block s-text3 p-b-5" style="white-space: nowrap; text-overflow: ellipsis; width: 100%; display: block; overflow: hidden">
									<?=$p['product_name']?>
								</a>

								<!-- <span class="block2-oldprice m-text7 p-r-5">
									Rp.{{pr.product_price}}
								</span> -->

							</div>
								
								<span class=" m-text8 p-b-5">
									<?=$p['product_price']?> 
								</span>
									
							</div>
							<div class="right-auto text-right"><span class="m-text28">{{pr.penjualan}}</span></div>
                    </div>
                      <?php $i++; }  ?> 
				</div>
			</div>

		</div>
	</section>

                </div>
            </div>
        </section>


