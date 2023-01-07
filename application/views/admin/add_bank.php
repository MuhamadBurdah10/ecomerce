<div class="card m-4">
<div class="container mt-4 mb-4">
<form action="<?=base_url('admin/tambah_bank')?>" method="post" enctype="multipart/form-data">
  <div class="form-row">
        <div class="form-group col-md-12">
        <label for="inputAddress">Nama bank</label>
        <input type="text" class="form-control" id="inputAddress" name="nama_bank" placeholder="">
        </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kode bank</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kode_bank">
            <option selected>Pilih...</option>
            <option value="014">BCA</option>
            <option value="009">BNI</option>
            <option value="427">BNI Syariah</option>
            <option value="002">BRI</option>
            <option value="422">BRI Syariah</option>
            <option value="008">Mandiri</option>
            <option value="451">Syariah Mandiri</option>
        </select>
    </div>
    <div class="form-group col-md-6" style="margin-top:-3px;">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Warba Label</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="warna">
            <option selected>Pilih...</option>
            <option value="primary">biru</option>
            <option value="warning">kuning</option>
            <option value="danger">merah</option>
            <option value="secondary">abu-abu</option>
            <option value="success">hijau</option>
        </select>
    </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Atas nama</label>
        <input type="text" class="form-control" id="inputAddress" name="nama_akun" placeholder="">
        </div>
        <div class="form-group col-md-6">
        <label for="inputAddress">Nomo Rekening</label>
        <input type="text" class="form-control" id="inputAddress" name="no_rek" placeholder="">
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