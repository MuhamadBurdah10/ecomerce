<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Account Bank</h1><div class="text-left">
        <button class="m-0 font-weight-bold text-left btn-primary" onclick="window.location.href='<?=base_url('admin/addbank')?>'">Tambah</button>
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
            <th>Nama bank</th>
            <th>kode bank</th>
            <th>nama akun</th>
            <th>nomor rekening</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($bank as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><a href="<?= base_url('assets/images/icons')?>/<?=$p->icon?>"><img src="<?= base_url('assets/images/icons')?>/<?=$p->icon?>" alt="" width="75px" height="75px"></a></td>
            <td><?=$p->nama_bank?></td>
            <td><?=$p->kode_bank?></td>
            <td><?=$p->nama_akun?></td>
            <td><?=$p->no_rek?></td>
            <td><a href="<?=base_url('admin/update_bank/')?><?=$p->id_bank?>"><div class="btn btn-outline-primary"><i class="fa fa-edit"></i></div></a><br><a href="<?=base_url('admin/delete_bank/')?><?=$p->id_bank?>"><span style="color:red"><div class="btn btn-outline-danger"><i class="fa fa-trash"></i></div></span></a></td>
          </tr>
        <?php $i++; }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

    <!-- Content Row -->
    
</div>