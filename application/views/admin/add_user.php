<div class="card m-4">
<div class="container mt-4 mb-4">
<form action="<?=base_url('admin/tambah_user')?>" method="post" enctype="multipart/form-data">
<div class="form-row">
                    <div class="form-group col-md-6">
                    <label class="s-text1" for="inputEmail4">Nama</label>
                    <input type="text" class="form-control border" name="nama_user" required value="">
                </div>
                <div class="form-group col-md-6">
                    <label class="s-text1" for="inputPassword4">No Hp</label>
                    <input type="text" class="form-control border" name="no_hp" required value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label class="s-text1" for="inputEmail4">Email</label>
                    <input type="email" class="form-control border" name="email" required value="">
                </div>
                <div class="form-group col-md-6">
                    <label class="s-text1" for="inputPassword4">Password</label>
                    <input type="password" class="form-control border" name="password" required value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="s-text1" for="inputAddress">Alamat</label>
                    <input type="text" class="form-control border" name="alamat" required value="">
                </div>
                <div class="form-group">
                    <label class="s-text1" for="inputAddress2">Alamat 2</label>
                    <input type="text" class="form-control border" name="wilayah" required value="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="s-text1" for="inputCity">tanggal lahir</label>
                        <input type="date" class="form-control border" name="tgl_lahir" required value="<">
                    </div>
                    <div class="form-group col-md-4">
                    <label class="s-text1" for="inputState">Jenis Kelamin</label>
                    <select id="inputState" class="form-control border" name="jk">
                        <option >Choose...</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option  value="Perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="s-text1">Jenis User</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="jenis_user">
                        <option value="">Pilih</option>
                        <option value="petani">Petani</option>
                        <option value="konsumen">Konsumen</option>
                        <option value="seller">Seller</option>
                        <option value="konsumen_eksekutif">Konsumen Eksekutif</option>
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s-text1" for="inputCity">foto profile</label>
                        <input type="file" class="form-control border" name="cover" id="inputCity">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">selesai</button>
</form>
</div>
</div>