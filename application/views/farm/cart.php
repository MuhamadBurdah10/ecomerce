	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100" id="tabelcart">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produk</th>
							<th class="column-3">Harga</th>
							<th class="column-4 p-l-70">Kuantitas</th>
							<th class="column-5">Total</th>
						</tr>
                        <?php foreach ($cart as $c) {
                            ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="<?= base_url('assets/images/product/')?><?= $c->product_image?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?= $c->product_name?></td>
							<td class="column-3 price">Rp.<?= number_format($c->product_price,0,',','.')?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?= $c->kuantitas?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5" id="sum">Rp.<?= number_format($c->harga,0,',','.')?></td>
                        </tr>
                        <?php } ?>
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Checkout
					</button>
				</div>
			</div>
    </section>
    
    <?php 
    $this->load->view('product/releated_product.php');
    ?>