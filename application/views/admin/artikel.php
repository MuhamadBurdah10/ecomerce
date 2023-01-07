<style>
.more{
  display:none;
}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Artikel</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="text-left">
        <button class="m-0 font-weight-bold text-left btn-primary" onclick="window.location.href='<?=base_url('admin/addartikel')?>'">Tambah</button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>Foto</th>
            <th>deskripsi</th>
            <th width=s"">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($artikel as $p) { ?>
          <tr>
            <td><?= $i?></td>
            <td><?=$p->judul?></td>
            <td><img src="<?= base_url('assets/images/product')?>/<?=$p->gambar?>" alt="" width="75px" height="75px"></td>
            <td> <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#more-<?=$p->id_artikel?>">show</button><div id="more-<?=$p->id_artikel?>" class="collapse"><?=$p->isi_artikel?></div></td>
            <td><a href="<?=base_url('admin/updateartikel/')?><?=$p->id_artikel?>"><div class="btn btn-outline-primary"><i class="fa fa-edit"></i></div></a><a href="<?=base_url('admin/deleteartikel/')?><?=$p->id_artikel?>" onclick="return confirm('Yakin Hapus?')"><span style="color:red"><div class="btn btn-outline-danger ml-1"><i class="fa fa-trash"></i></div></span></a></td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
