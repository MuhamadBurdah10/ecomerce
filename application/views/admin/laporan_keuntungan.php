<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Laporan Penjualan Per-Minggu</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <a href="<?= base_url('admin/laporan_pdf');?>"><i class="fas fa-print"></i> cetak laporan</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Total</th>
            <th>HPP</th>
            <th>Laba</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($keuntungan as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><?=$p->tgl_update?></td>
            <td><?=$p->nama_user?></td>
            <td>Rp.<?=number_format($p->total_pembayaran,2,',','.')?></td>
            <td>Rp.<?=number_format($p->total_pembayaran-$p->total_keuntungan,2,',','.')?></td>
            <td>Rp.<?=number_format($p->total_keuntungan,2,',','.')?></td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
        <tfoot>
           <?php 
            $i = 1;
            foreach ($total as $p) { ?>
            <tr>
                <th colspan="3" style="text-align:right">Total:</th>
                <th>Rp.<?=number_format($p->total_pembayaran,2,',','.')?></th>
                <th>Rp.<?=number_format($p->total_hpp,2,',','.')?></th>
                <th>Rp.<?=number_format($p->total_keuntungan,2,',','.')?></th>
            </tr>
            <?php $i++; }  ?>
        </tfoot>
      </table>
    </div>
  </div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



