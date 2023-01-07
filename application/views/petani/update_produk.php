<div class="card m-4">
<div class="container mt-4 mb-4">
<?php foreach ($product as $pr) { ?>
<form action="<?=base_url('petani/update_product')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="product_id" value="<?= $pr->product_id;?>">
      <label for="inputNama">Nama Produk</label>
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="" value="<?= $pr->product_name;?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Tanggal</label>
        <input type="date" class="form-control" id="inputAddress" name="product_available" placeholder="" value="<?= $pr->product_available;?>">
        </div>
        <div class="form-group col-md-6">
        <label for="berat">Stok</label>
             <input type="number" class="form-control" id="kuantitas" name="product_quantity" placeholder="" value="<?= $pr->product_quantity;?>">
        </div>
  </div>
  <div class="form-row">
   <!--  <div class="form-group col-md-3">
      <label for="inputCity">Harga Beli</label>
      <input type="number" class="form-control" id="inputCity" name="harga_beli" placeholder="Rp." value="<?= $pr->harga_beli;?>">
    </div> -->
    <div class="form-group col-md-6">
      <label for="inputCity">Harga Konsumen</label>
      <input type="number" class="form-control" id="inputCity" name="product_price" placeholder="Rp." value="<?= $pr->product_price;?>">
    </div>
   <!--  <div class="form-group col-md-3">
      <label for="inputCity">Harga Seller</label>
      <input type="number" class="form-control" id="inputCity" name="product_price_seller" placeholder="Rp." value="<?= $pr->product_price_seller;?>">
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputZip">Berat</label>
      <input type="number" class="form-control" id="berat" name="product_weight" placeholder="per-gram" value="<?= $pr->product_weight;?>">
    </div> -->
  </div>

 <!--  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Harga Beli Eksekutif</label>
      <input type="number" class="form-control" id="inputCity" name="harga_beli_eksekutif" placeholder="Rp." value="<?= $pr->harga_beli_eksekutif?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Harga Konsumen Eksekutif</label>
      <input type="number" class="form-control" id="inputCity" name="product_price_eksekutif" placeholder="Rp." value="<?= $pr->product_price_eksekutif;?>">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputZip">Berat Konsumen Eksekutif</label>
      <input type="number" class="form-control" id="berat" name="product_weight_eksekutif" placeholder="per-gram" value="<?= $pr->product_weight_eksekutif;?>">
    </div>
  </div> -->

  <!-- <div class="form-row">
  <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="product_kategori">
            <option >Pilih...</option>
            <option <?= ($pr->product_kategori == '1')?'selected':''?> value="1">sayur</option>
            <option <?= ($pr->product_kategori == '2')?'selected':''?> value="2">buah</option>
            <option <?= ($pr->product_kategori == '3')?'selected':''?> value="3">umbi</option>
            <option <?= ($pr->product_kategori == '4')?'selected':''?> value="4">dagin</option>
            <option <?= ($pr->product_kategori == '5')?'selected':''?> value="5">ikan</option>
            <option <?= ($pr->product_kategori == '6')?'selected':''?> value="6">hasil olahan tani</option>
        </select>
    </div>
    <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Label</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="label">
            <option >Pilih...</option>
            <option <?= ($pr->label == 'konvesional')?'selected':''?> value="konvesional">konvesional</option>
            <option <?= ($pr->label == 'hydroponic')?'selected':''?> value="hydroponic">hydroponic</option>
        </select>
    </div>
  </div> -->
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $pr->deskripsi;?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Foto product</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover" data-fileuploader-default="<?= base_url('assets/images/product/'.$pr->product_image);?>">
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
<?php } ?>
</div>
</div>