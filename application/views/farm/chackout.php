
<section class="cart bgwhite p-t-70 " id="tabelcart"  ng-controller="UserController">
		<div class="container" ng-init="getuser('<?= base_url()?>','users/chackoutUser','<?=$this->session->userdata('id_user')?>')">
			<!-- Cart item -->
			<div class="card">
				<div class="card-header fs-20" style="color:#45d84a;background-color:white;font-weight:bold">
					Alamat Pengiriman
				</div>
			</div>
			<div class="card-body border" ng-repeat="u in user">
				<div class="row">
						<div class="col-lg-2">
							<span style="font-weight:bold">Nama : {{u.nama_user}}</span> (<Span>{{u.no_hp}}</Span>)
					</div>
					<div class="col-lg-9 ">
						Alamat : {{u.addres}}
					</div>
					<div class="col-lg-1"><a href="<?=base_url('users/edit_profile/')?>{{u.id_user}}">ubah</a></div>
				</div>
			</div>
		</div>
    </section>

	<!-- Cart -->
<form action="<?= base_url()?>product/chackout" method="post" id="form_vrefikasi" enctype="multipart/form-data">
	<section class="cart bgwhite p-t-70 p-b-100" id="tabelcart"  ng-controller="ProductController">
		<div class="container" ng-init="fetchcart('<?= base_url()?>','product/cart','<?=$this->session->userdata('id_user')?>')">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head border" >
							<th class="column-1"></th>
							<th class="column-2">Produk</th>
							<th class="column-3">Harga</th>
							<th class="column-4 p-l-70">Kuantitas</th>
							<th class="column-5">Total</th>
						</tr>
						<tr class="table-row" ng-repeat="lc in listcart">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden" >
                                    <img src="<?= base_url('assets/images/product/')?>{{lc.product_image}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{lc.product_name}}</td>
							<td class="column-3 price">{{lc.product_price | currency : "Rp" : 0 }}</td>
							<td class="column-4 p-l-70">
									<span class="size8 m-text18 t-center num-product">x  {{lc.kuantitas}}</span>	
							</td>
							<td class="column-5" id="sum">Rp.{{lc.harga}}</td>
							<input type="hidden" name="id_cart[]" value="{{lc.id_cart}}">
							<input type="hidden" name="product_id[]" value="{{lc.product_id}}">
							<input type="hidden" name="kuantitas[]" value="{{lc.kuantitas}}">
							<input type="hidden" name="harga[]" value="{{lc.harga}}">
							<input type="hidden" name="harga_beli[]" value="{{lc.harga_beli}}">
							<input type="hidden" name="product_quantity[]" value="{{lc.product_quantity}}">
							<input type="hidden" name="product_weight[]" value="{{lc.product_weight}}">
                        </tr>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10">
				Sub Total:
					<p class=" sizefull trans-0-4" style="font-weight: bold;">
						Rp. {{getTotal()}}
					</p>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					Pilih Jasa Pengiriman
				</div>
					<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-12">
                      <select class="diskonket form-control" id="harganya" name="expedisi"  placeholder="%" required="diskon" >
                      	<option value="0">Pilih Jasa Kirim</option>
                      	<?php foreach($metode as $m){ ?>
                      	<option  value="<?= $m->harga?>"><?= $m->jenismetode?> Rp. <?= $m->harga?></option>
                      <?php } ?>
                      </select>
                      </div>
				</div>

						<div class="col-lg-3"> 
							<?php
							$pinjam            	= date("d-m-Y");
							$tiga_hari        	= mktime(0,0,0,date("n"),date("j")+2,date("Y"));
							$kembali        	= date("d-m-Y", $tiga_hari);

							echo "<p >Estimasi Expedisi JNE 3 hari dari tanggal pesan $pinjam </p>";
							echo "<p>Pesanan diantar paling lambat tanggal $kembali</p>";
							?>   
						</div>
						<div class="col-lg-3"> 
							<?php
							$pinjamJT            	= date("d-m-Y");
							$dua_hari        		= mktime(0,0,0,date("n"),date("j")+1,date("Y"));
							$kembalii        		= date("d-m-Y", $dua_hari);

							echo "<p >Estimasi Expedisi J&T 2 hari dari tanggal pesan $pinjam </p>";
							echo "<p>Pesanan diantar paling lambat tanggal $kembalii</p>";
							?>   
						</div>

						<div class="col-lg-3" style="float: right;"> 
							<label for="">Total Pembayaran Rp.</label>
							 <input type="text" class="form-control" id="tariftot" name="total_pembayaran" style="font-weight: bold;" placeholder="" value="" readonly="" name="tariftot">
						</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					Metode Bayar
				</div>
				<div class="col-lg-12 row">
					<?php foreach($bank as $b){
					$n=$b->icon; ?>
					<div class="col-lg-2">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="id_bank" id="inlineRadio1" value="<?= $b->id_bank?>">
						<?php if ($n == null ) { ?>
                       <b><?= $b->nama_bank?></b>
                      <?php } 
                       else { ?>
							<img src="<?=base_url('assets/images/icons/')?><?= $b->icon ?>" alt="" width="70px" height="50px">
                      <?php  }?>


						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<input type="text" class="form-control total" hidden="" name="total" placeholder="" value="{{getTotal()}}">
			<input type="hidden" name="total_modal" value="{{getModal()}}">
			<input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">
		 	<!-- <div class="card m-t-20">
				<div class="card-header fs-20" style="color:#45d84a;background-color:white;font-weight:bold">
					Pembayaran
				</div>
			</div>
			<div class="card-body border">
				<div class="row">
						<div class="col-lg-3">
							 
							<label for="">Total Pembayaran :</label>
							<input type="text" class="form-control" id="tariftot" placeholder="" value="" readonly="" name="tariftot">
						</div>
						<div class="col-lg-5">
							<label for="">No Rek : </label>
							<span style="font-weight:bold">Eva - 6817-1827-23(BNI)</span>
						</div>
						<div class="col-lg-4">
								<label for="recipien-name" class="col-form-label">Tanggal Pengiriman</label>
								<input type="date" name="tgl_pengiriman" style="font-weight:bold;" require>
						</div>
						<div class="col-lg-12">
								<label for="recipien-name" class="col-form-label">Bukti Pembayaran</label><br>
								<input type="file" name="cover" class="thm-bk-xl" require> 
						</div>
						<input type="hidden" name="total_pembayaran" value="{{getTotal()}}">
						<input type="hidden" name="id_user" value="1">
				</div>
			</div>  -->

			
			<div class="flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
						Proceed to Checkout
					</button>
				</div>
			</div>	
    </section>
</form>
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#harganya, .total").change(function (){
            var harganya = $("#harganya").val();
            var total = $(".total").val();

            hasil = parseInt(harganya) + parseInt(total);
            $("#tariftot").val(hasil);

        })

 });

</script>