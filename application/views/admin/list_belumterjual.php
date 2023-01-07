<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produk yang belum terjual</h1><div class="text-left">
    </div>
    </div>
    <div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>icon</th>
            <th>Nama produk</th>
            <th>kategori</th>
            <th>stok</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($belum as $p) { ?>    
          <tr>
            <td><?= $i?></td>
            <td><img src="<?= base_url('assets/images/product')?>/<?=$p->product_image?>" alt="" width="75px" height="75px"></td>
            <td><?=$p->product_name?></td>
            <td><?= $p->nama_kategori ?></td>
            <td><?=$p->product_quantity/1000?>Kg</td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

    <!-- Content Row -->
    
</div>