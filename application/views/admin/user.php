<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="text-left">
        <button class="m-0 font-weight-bold text-left btn-primary" onclick="window.location.href='<?=base_url('admin/add_user')?>'">Tambah</button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>email</th>
            <th>Nama user</th>
            <th>alamat 1</th>
            <th>alamat 2</th>
            <th>jenis kelamin</th>
            <th>kontak</th>
            <th>jenis user</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($user as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><img src="<?= base_url('assets/images/profile')?>/<?=$p->img_profile?>" alt="" width="75px" height="75px"></td>
            <td><?=$p->email?></td>
            <td><?=$p->nama_user?></td>
            <td><?=$p->addres?></td>
            <td><?=$p->wilayah?></td>
            <td><?=$p->jk?></td>
            <td><?=$p->no_hp?></td>
            <td><?=$p->jenis_user?></td>
            <td><a href="<?=base_url('admin/edit_user/')?><?=$p->id_user?>"><div class="btn btn-outline-primary">edit</div></a><br><a href="<?=base_url('admin/delete_user/')?><?=$p->id_user?>" onclick="return confirm('Yakin Hapus?')"><span style="color:red"><div class="btn btn-outline-danger">delete</div></span></a></td>
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
