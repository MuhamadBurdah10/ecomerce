<style>
.more{
  display:none;
}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Produk</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="text-left">
        <button class="m-0 font-weight-bold text-left btn-primary" onclick="window.location.href='<?=base_url('petani/add')?>'">Tambah</button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTableProduct" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Stok</th>
            <th>deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($produk as $p) { ?>  
          <tr>
            <td><?= $i?></td>
            <td><img src="<?= base_url('assets/images/product')?>/<?=$p['product_image']?>" alt="" width="75px" height="75px"></td>
            <td><?=$p['product_name']?></td>
            <td><?=$p['product_price']?></td>
            <td><?=$p['product_quantity']?></td>
            <td> <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#more-<?= $p['product_id']?>">show</button><div id="more-<?=$p['product_id']?>" class="collapse"><?=$p['deskripsi']?></div></td>
            <td><a href="<?=base_url('petani/update/')?><?=$p['product_id']?>"><div class="btn btn-outline-primary"><i class="fa fa-edit"></i></div></a><br><a href="<?=base_url('petani/delete/')?><?=$p['product_id']?>" onclick="return confirm('Yakin Hapus?')"><span style="color:red"><div class="btn btn-outline-danger"><i class="fa fa-trash"></i></div></span></a></td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
<!-- End of Main Content -->
