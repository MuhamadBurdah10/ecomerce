<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Produk</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
  <?php foreach ($transaksi as $t) { ?>    
        <form action="<?=base_url('admin/update_status')?>" method="post">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="form-row">    
                    <span>Update Status : </span>
                    <input type="hidden" name="id_pesanan" value="<?=$t->id_pesanan?>">
                    <select class="custom-select form-control" id="status" name="status">
                        <option <?= ($t->status == 'verifikasi')?'selected':''?> value="verifikasi">verifikasi</option>
                        <option <?= ($t->status == 'dikemas')?'selected':''?> value="dikemas">dikemas</option>
                        <option <?= ($t->status == 'dikirim')?'selected':''?> value="dikirim">dikirim</option>
                        <option <?= ($t->status == 'selesai')?'selected':''?> value="selesai">selesai</option>
                        <option <?= ($t->status == 'dikembalikan')?'selected':''?> value="dikembalikan">dikembalikan</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5">
              <span>Tanggal Pengiriman : </span>
              <input type="date" class="form-control" name="tgl_pengiriman" value="<?=$t->tgl_pengiriman?>">
            </div>
                <div class="col-lg-1">
                    <button type="submit" class="btn btn-primary mt-4">update</button>
                </div>
            </div>
      </form>
      <?php }  ?>
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto produk</th>
            <th>Nama produk</th>
            <th>kuantitas</th>
            <th>harga</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($product as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><img src="<?= base_url('assets/images/product')?>/<?=$p->product_image?>" alt="" width="75px" height="75px"></td>
            <td><?=$p->product_name?></td>
            <td><?=$p->kuantitas?>x <?=$p->product_weight?>Kg</td>
            <td>Rp.<?=$p->harga?></td>
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
