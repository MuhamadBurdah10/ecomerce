<div class="container-fluid">
    <?php foreach ($penawaran as $p) { ?>
    <div class="card">
        <div class="card-header">
            <div class="row pl-3">
                <img src="<?=base_url('assets/images/profile/')?><?=$p->img_profile?>" alt="" width="50px">
                <h4 class="font-weight-bold" style="margin-top:20px; padding-left:20px; color:black;"><?=$p->nama_user?></h4>
                <h4 style="margin-top:20px; padding-left:10px;">menawarkan</h4>
                <h4 class="font-weight-bold" style="margin-top:20px; padding-left:10px; color:black;"><?=$p->nama_produk?></h4>
            </div>
            <div class="card-body mt-3" style="background:white;">
                <div class="row">
                    <img src="<?=base_url('assets/images/penawaran/')?><?=$p->foto_produk?>" alt="" width="30%">
                    <table>
                        <tr>
                            <td><h4>harga yang ditawarkan</h4></td>
                            <td><h4>: Rp. <?=$p->harga_penawaran?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Jenis Panen</h4></td>
                            <td><h4>: <?=$p->jenis_panen?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Alamat</h4></td>
                            <td><h4>: <?=$p->alamat?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Deskripsi</h4></td>
                            <td><h4>: <?=$p->pesan?></h4></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- comment -->
            <h3 class="mt-3">Negosiasi Harga</h3>
            <?php foreach ($comment as $c) { ?>
            <div class="card m-3">
                <div class="row p-4">
                    <img src="<?=base_url('assets/images/profile/')?><?=$c->img_profile?>" alt="" width="50px">
                    <h4 class="font-weight-bold" style="margin-top:10px; padding-left:20px; color:black;"><?=$c->nama_user?></h4>
                    <span style="margin-top:14px; padding-left:20px; color:black;"><?= $c->comment?></span>
                </div>
            </div>
            <?php } ?>
            <form action="<?= base_url('admin/comment')?>" method="post">
                <input type="hidden" name="id_penawaran" value="<?=$p->id_penawaran?>">
                <input type="hidden" name="id_user"value="<?=$this->session->userdata('id_user')?>">
                <textarea name="comment" id="" cols="30" rows="3" style="width:100%"></textarea>
                <button type="submit" class="btn-primary">Kirim</button>
            </form>
        </div>
    </div>
    <?php } ?>
</div>