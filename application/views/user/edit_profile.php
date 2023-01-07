<div class="container p-2">
    <div class="card p-1 bg9">
        <div class="text-center align-content-center">
            <h3 style="color:white;">Edit Profile</h3>
            <hr style="border: 1px solid white;">
        </div>
            
        <div class="card-body">
            <form action="<?=base_url('users/update_profile')?>" method="post" enctype="multipart/form-data">
                <?php foreach ($user as $dt) { ?>
                    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="hidden" name="id_user" value="<?=$dt['id_user']?>">
                    <label class="s-text1" for="inputEmail4">Nama</label>
                    <input type="text" class="form-control border" name="nama_user" required value="<?= $dt['nama_user']?>">
                </div>
                <div class="form-group col-md-6">
                    <label class="s-text1" for="inputPassword4">No Hp</label>
                    <input type="text" class="form-control border" name="no_hp" required value="<?= $dt['no_hp']?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label class="s-text1" for="inputEmail4">Email</label>
                    <input type="email" class="form-control border" name="email" required value="<?= $dt['email']?>">
                </div>
                <div class="form-group col-md-6">
                    <label class="s-text1" for="inputPassword4">Password</label>
                    <input type="password" class="form-control border" name="password" required value="<?= $dt['password']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="s-text1" for="inputAddress">Alamat</label>
                    <input type="text" class="form-control border" name="alamat" required value="<?= $dt['addres']?>">
                </div>
                <div class="form-group">
                    <label class="s-text1" for="inputAddress2">Alamat 2</label>
                    <input type="text" class="form-control border" name="wilayah" required value="<?= $dt['wilayah']?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s-text1" for="inputCity">tanggal lahir</label>
                        <input type="date" class="form-control border" name="tgl_lahir" required value="<?= $dt['tgl_lahir']?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label class="s-text1" for="inputState">Jenis Kelamin</label>
                    <select id="inputState" class="form-control border" name="jk">
                        <option >Choose...</option>
                        <option <?= ($dt['jk']=='Laki-laki'?'selected':'')?> value="Laki-laki">Laki-laki</option>
                        <option <?= ($dt['jk']=='Perempuan'?'selected':'')?> value="Perempuan">Perempuan</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s-text1" for="inputCity">foto profile</label>
                        <input type="file" class="form-control border" name="cover" id="inputCity">
                    </div>
                </div>
                
                <button type="submit" class="btn bg10 s-text1">edit</button>
                <?php } ?>
            </form>
        </div>
    </div>
</div>