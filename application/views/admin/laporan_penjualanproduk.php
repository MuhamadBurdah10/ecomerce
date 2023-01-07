<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Laporan Penjualan Produk Per-Minggu</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Jumlah Penjualan</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($penjualan as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><a href="<?= base_url('assets/images/product')?>/<?=$p->product_image?>"><img src="<?= base_url('assets/images/product')?>/<?=$p->product_image?>" alt="" width="75px" height="75px"></a></td>
            <td><?=$p->product_name?></td>
            <td><?= $p->jumlah?></td>
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



