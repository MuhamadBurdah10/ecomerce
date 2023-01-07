<div class="card m-4">
<div class="container mt-4 mb-4">
<form action="<?=base_url('admin/tambahartikel')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputNama">Judul</label>
      <input type="text" class="form-control" id="product_name" name="judul" placeholder="">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Tanggal</label>
        <input type="date" class="form-control" id="inputAddress" name="tgl" placeholder="">
        </div>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover">
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
</div>
</div>