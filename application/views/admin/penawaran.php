<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Penawaran</h1>
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
            <th>Foto produk</th>
            <th>Nama produk</th>
            <th>no hp</th>
            <th>nama petani</th>
            <th>alamat</th>
            <th>Tanggal Pengiriman</th>
            <th>harga yang ditawarkan</th>
            <th>harga deal</th>
            <th>stok</th>
            <th>jenis panen</th>
            <th>Status</th>
            <th>Deskripsi Produk</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($penawaran as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><a href="<?= base_url('assets/images/penawaran')?>/<?=$p->foto_produk?>"><img src="<?= base_url('assets/images/penawaran')?>/<?=$p->foto_produk?>" alt="" width="75px" height="75px"></a></td>
            <td><?=$p->nama_produk?></td>
            <td><?=$p->no_hp?></td>
            <td><?=$p->nama_user?></td>
            <td><?=$p->alamat?></td>
            <td><?=$p->tanggal_pengiriman?></td>
            <td>Rp.<?= number_format($p->harga_penawaran,2,',','.')?></td>
            <td>Rp.<?= number_format($p->harga_deal,2,',','.')?></td>
            <td><?=$p->stok/1000?>Kg</td>
            <td><?=$p->jenis_panen?></td>
            <td> <?=$p->status?></td>
            <td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#more-<?= $p->id_penawaran?>">show</button><div id="more-<?=$p->id_penawaran?>" class="collapse"><?=$p->pesan?></div></td>
            <td>
            <?php if($p->status == 'approve'){ ?>
              <div class="btn btn-primary"><a href="<?=base_url('admin/add_product_penawaran/')?><?=$p->id_penawaran?>" style="color:white;font-size:12px"><i class="fa fa-plus">Produk</i></a></div>
            <?php }else{ ?>
              <div class="btn btn-primary btn-bayar" data-toggle="modal" data-id="<?=$p->id_penawaran?>" data-target="#exampleModal" style="cursor:pointer"><i class="fa fa-edit"></i></div>
            <?php } ?>
            </td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ng-controller="ProductController">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('admin/status')?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                            <div class="form-row">
                            <label for="">Status penawaran</label>
                            <select class="custom-select form-control" id="status" name="status">
                                <option value="batal">Batal</option>
                                <option value="nego">Nego</option>
                                <option value="approve">Approve</option>
                            </select>
                            <label class="mt-3" for="">Harga deal</label>
                            <input type="number" class="form-control" name="harga_deal" placeholder="Rp.">
                            <input type="hidden" name="id_penawaran" value="">
                            </div>

                            <span style="color:red">keterangan : Jika status approve maka inputkan harga deal</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
