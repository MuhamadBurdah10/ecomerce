<section class="p-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 card p-2">
            <form action="<?=base_url('petani/penawaran')?>" method="post" enctype="multipart/form-data">
				<h3 class="mb-4 billing-heading">Detail Produk</h3>
	          
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Nama Produk</label>
	                  <input type="text" class="form-control border" name="nama_produk" placeholder="">
	                </div>
	              </div>
	              <!-- <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Nomor Telpon</label>
	                  <input type="text" class="form-control border" name="no_telpon" placeholder="">
	                </div>
				 -->
				 <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Stok</label>
	                  <input type="text" class="form-control border" name="stok" placeholder="per-Kg">
	                </div>
                </div>
				<div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">tanggal pengiriman</label>
	                  <input type="date" class="form-control border" name="tanggal_pengiriman" placeholder="">
	                </div>
                </div>
                
                <div class="col-md-12">
	                <div class="form-group">
	                  <label for="lastname">Harga yang ditawarkan</label>
	                  <input type="text" class="form-control border" name="price" placeholder="per-Kg">
	                </div>
                </div>
				<div class="col-md-12">
                    <div class="form-group">
                        <label for="lastname">Jenis Panen</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="jenis_panen">
                            <option selected>Pilih...</option>
                            <option value="musiman">musiman</option>
                            <option value="rutin">rutin</option>
                        </select>
                    </div>
				</div>
                <div class="col-md-12">
	                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
	                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto Hasil Produk</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    </div>
					<div class="form-group">
								<div class="col-md-12">
									<input type="submit" name="submit" class="btn bg0 py-3 px-4 s-text1">
								</div>
                 
					</div>
	          </form><!-- END -->
					
								
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->