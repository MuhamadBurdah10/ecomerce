<div class="card m-4">
<div class="container mt-4 mb-4">
<form action="<?=base_url('admin/update_bankdata')?>" method="post" enctype="multipart/form-data">
  <div class="form-row">
        <div class="form-group col-md-12">
        <label for="inputAddress">Nama bank</label>
        <input type="text" class="form-control" id="inputAddress" name="nama_bank" placeholder="" value="<?= $bank->nama_bank?>">
        <input type="hidden" name="id_bank" value="<?= $bank->id_bank?>">
        </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kode bank</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kode_bank">
            <option selected>Pilih...</option>
            <option <?= ($bank->kode_bank == '014')?'selected':''?> value="014">BCA</option>
            <option <?= ($bank->kode_bank == '009')?'selected':''?> value="009">BNI</option>
            <option <?= ($bank->kode_bank == '427')?'selected':''?> value="427">BNI Syariah</option>
            <option <?= ($bank->kode_bank == '002')?'selected':''?> value="002">BRI</option>
            <option <?= ($bank->kode_bank == '422')?'selected':''?> value="422">BRI Syariah</option>
            <option <?= ($bank->kode_bank == '008')?'selected':''?> value="008">Mandiri</option>
            <option <?= ($bank->kode_bank == '451')?'selected':''?> value="451">Syariah Mandiri</option>
        </select>
    </div>
    <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Warba Label</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="warna">
            <option selected>Pilih...</option>
            <option  <?= ($bank->warna == 'primary')?'selected':''?> value="primary">biru</option>
            <option  <?= ($bank->warna == 'warning')?'selected':''?> value="warning">kuning</option>
            <option  <?= ($bank->warna == 'danger')?'selected':''?> value="danger">merah</option>
            <option  <?= ($bank->warna == 'secondary')?'selected':''?> value="secondary">abu-abu</option>
            <option  <?= ($bank->warna == 'success')?'selected':''?> value="success">hijau</option>
        </select>
    </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Atas nama</label>
        <input type="text" class="form-control" id="inputAddress" name="nama_akun" placeholder="" value="<?= $bank->nama_akun?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputAddress">Nomo Rekening</label>
        <input type="text" class="form-control" id="inputAddress" name="no_rek" placeholder="" value="<?= $bank->no_rek?>">
        </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Icon Bank</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover">
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
</div>
</div>