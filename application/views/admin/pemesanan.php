<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pemesanan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>bukti_pembayaran</th>
            <th>Nama Pembeli</th>
            <th>total pembayaran</th>
            <th>tanggal pengiriman</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>list produk</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($product as $p) { 
                    $status= $p->status ;?>
          <tr>
            <td><?= $i?></td>
            <td><a href="<?= base_url('assets/images/bukti_pembayaran')?>/<?=$p->bukti_pembayaran?>"><img src="<?= base_url('assets/images/bukti_pembayaran')?>/<?=$p->bukti_pembayaran?>" alt="" width="75px" height="75px"></a></td>
            <td><?=$p->nama_user?></td>
            <td>Rp.<?=number_format($p->total_pembayaran,2,',','.')?></td>
            <td><?=$p->tgl_pengiriman?></td>
            <td><?=$p->addres?></td>
            <td class="align-center"><span class="<?= ($p->status == 'pengembalian'?'alert alert-danger btn-pengembali':'')?> <?= ($p->status == 'selesai'?'alert alert-primary':'')?>"  <?= ($p->status == 'pengembalian'?'data-toggle="modal" data-id="'.$p->id_pesanan.'" data-target="#pengembalian" style="cursor:pointer"':'')?>
                

                        <?php if ($status == 'verifikasi' ) { ?>
                       <span class='badge badge-primary'>Verivikasi</span> 
                      <?php } 
                      else  if ($status == 'dikemas'){ ?>
                      <span class='badge badge-success'>Dikemas</span> 
                      <?php }
                       else { ?>
                        <th><span class='badge badge-warning'>Dikirim</span> 
                      <?php  }?>

            </span></td>


            <td><a href="<?=base_url('admin/detail/')?><?=$p->id_pesanan?>">detail produk</a></td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="pengembalian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ng-controller="ProductController">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengajuan pengembalian barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('admin/status')?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                            <label for="">Foto Produk</label><br>
                            <div class="more"></div>
                            <label for="">Alasan Dikembalikan</label><br>
                            <div class="more1"></div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
