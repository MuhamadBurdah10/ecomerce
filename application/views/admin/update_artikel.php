<div class="card m-4">
<div class="container mt-4 mb-4">
  <?php foreach ($artikel as $pr) { ?>
<form action="<?=base_url('admin/editartikel')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputNama">Judul</label>
      <input type="hidden" name="id_artikel" value="<?= $pr->id_artikel?>">
      <input type="text" class="form-control" id="product_name" name="judul" value="<?= $pr->judul;?>" placeholder="">
    </div>
    
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel"><?= $pr->isi_artikel;?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover" data-fileuploader-default="<?= base_url('assets/images/product/'.$pr->gambar);?>">
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
<?php } ?>
</div>
</div>