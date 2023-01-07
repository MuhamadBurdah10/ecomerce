<div class="card m-4">
<div class="container mt-4 mb-4">
<form action="<?=base_url('petani/tambah')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="number" class="form-control" id="inputCity" name="id" hidden="" value="<?=$this->session->userdata('id_user')?>">
      <label for="inputNama">Nama Produk</label>
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Tanggal barang tersedia</label>
        <input type="date" class="form-control" id="inputAddress" name="product_available" placeholder="">
        </div>
        <div class="form-group col-md-6">
        <label for="berat">Stok</label>
             <input type="number" class="form-control" id="kuantitas" name="product_quantity" placeholder="">
        </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Harga Beli</label>
      <input type="number" class="form-control" id="inputCity" name="harga_beli" placeholder="Rp.">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Harga </label>
      <input type="number" class="form-control" id="inputCity" name="product_price" placeholder="Rp.">
    </div>
    <!-- <div class="form-group col-md-3">
      <label for="inputCity">Harga Seller</label>
      <input type="number" class="form-control" id="inputCity" name="product_price_seller" placeholder="Rp.">
    </div> -->
    
    <!-- <div class="form-group col-md-3">
      <label for="inputZip">Berat</label>
      <input type="number" class="form-control" id="berat" name="product_weight" placeholder="per-gram">
    </div> -->
  </div>

   <!--<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Harga Beli Eksekutif</label>
      <input type="number" class="form-control" id="inputCity" name="harga_beli_eksekutif" placeholder="Rp.">
    </div> -->
    <!-- <div class="form-group col-md-4">
      <label for="inputCity">Harga Konsumen Eksekutif</label>
      <input type="number" class="form-control" id="inputCity" name="product_price_eksekutif" placeholder="Rp.">
    </div> -->
    
    <!-- <div class="form-group col-md-4">
      <label for="inputZip">Berat Konsumen Eksekutif</label>
      <input type="number" class="form-control" id="berat" name="product_weight_eksekutif" placeholder="per-gram">
    </div>
  </div> -->

   <!--<div class="form-row">
  <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="product_kategori">
            <option selected>Pilih...</option>
            <option value="1">sayur</option>
            <option value="2">buah</option>
            <option value="3">umbi</option>
            <option value="4">dagin</option>
            <option value="5">ikan</option>
            <option value="6">hasil olahan tani</option>
        </select>
    </div> 
    <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Label</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="label">
            <option selected>Pilih...</option>
            <option value="konvesional">konvesional</option>
            <option value="hydroponic">hydroponic</option>
        </select>
    </div>
  </div>-->
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Foto product</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover">
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
</div>
</div>