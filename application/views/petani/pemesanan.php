
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

 <!--  <div class="row">

    <div class="col-xl-3 col-md-6 mt-3 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


     <div class="col-xl-3 col-md-6 mt-3 mb-4">

              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pesanan Dalam Proses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-spinner fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="col-xl-3 col-md-6 mt-3 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pesanan Dikirim</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-motorcycle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-xl-3 col-md-6 mt-3 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan Selelsai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
           
     End of Content Wrapper -->
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
            <th>Tanggal Pemesanan</th>
            <th>tanggal pengiriman</th>
            <th>tanggal Estimasi</th>
             <th>Kurir</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($product as $p) { 
                    $status= $p['status'] ;?>
          <tr>
            <td><?= $i?></td>
            <td><a href="<?= base_url('assets/images/bukti_pembayaran')?>/<?=$p['bukti_pembayaran']?>"><img src="<?= base_url('assets/images/bukti_pembayaran')?>/<?=$p['bukti_pembayaran']?>" alt="" width="75px" height="75px"></a></td>
            <td><?=$p['nama_user']?></td>
            <td>Rp.<?=number_format($p['total_pembayaran'])?></td>
            <td><?=$p['created']?></td>
            <td><?=$p['tgl_pengiriman']?></td>
            <td><?=$p['tgl_estimasi']?></td>
            <td><?=$p['expedisi']?></td>
            <td><?=$p['addres']?></td>
            <td class="align-center"><span class="<?= ($p['status'] == 'pengembalian'?'alert alert-danger btn-pengembali':'')?> <?= ($p['status'] == 'selesai'?'alert alert-primary':'')?>"  <?= ($p['status'] == 'pengembalian'?'data-toggle="modal" data-id="'.$p['id_pesanan'].'" data-target="#pengembalian" style="cursor:pointer"':'')?>>
                
                    <?php if ($status == 'verifikasi' ) { ?>
                       <span class='badge badge-primary'>Verivikasi</span> 
                      <?php } 
                      else  if ($status == 'dikemas'){ ?>
                      <span class='badge badge-success'>Dikemas</span> 
                      <?php }
                       else { ?>
                      <span class='badge badge-warning'>Dikirim</span> 
                      <?php  }?>

            </span></td>
            <td><a href="<?=base_url('petani/detail/')?><?=$p['id_pesanan']?>">Detail pesanan</a>
              <a href="<?=base_url('petani/resi/')?><?=$p['id_pesanan']?>"><span class='badge badge-warning'>Cetak Resi</span></a></td>
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
