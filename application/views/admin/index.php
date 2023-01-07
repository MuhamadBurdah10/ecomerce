

<!-- Begin Page Content 
<div class="container-fluid">
<?php if($this->session->flashdata("flash")){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Login Berhasil!</strong> Selamat beraktifitas.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<!-- Page Heading 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

Content Row 
<div class="row">

 
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Estimasi Keuntungan (Bulan ini)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?= number_format($estimasi_keuntungan,2,',','.') ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

   Earnings (Monthly) Card Example 
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Keuntungan (Bulan ini)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?= number_format($keuntungan,2,',','.') ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  Earnings (Monthly) Card Example 
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesanan Bulan ini</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $pesanan ?></div>
              </div>
              <div class="col">
                
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending verifikasi</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pending ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<script src="<?= base_url('assets/vendor/amcharts4')?>/core.js"></script>
<script src="<?= base_url('assets/vendor/amcharts4')?>/charts.js"></script>
<script src="<?= base_url('assets/vendor/amcharts4')?>/themes/animated.js"></script>
<script>var datachart = <?= $barchart ?>;</script>
<script src="<?= base_url('assets/vendor/amcharts4')?>/bar.js"></script>

<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
  <h2 class="h3 mb-0 text-gray-800"> bulan <?= date('F Y');?></h2>
</div>
<div class="card">
  <div class="row">
  <div class="col-lg-6">
    <form class="form-inline mt-2 pl-2" action="<?=base_url('admin/index')?>" method="GET">
      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="category">
        <option selected>semua</option>
        <option  value="1">sayur</option>
        <option  value="2">buah</option>
        <option  value="3">umbi</option>
        <option  value="4">daging</option>
        <option  value="5">ikan</option>
        <option  value="6">olahan hasil tani</option>
      </select>
      <button type="submit" class="btn btn-primary my-1">Submit</button>
    </form>
  </div>
  <div class="col-lg-6">
    <div class="pt-2 pr-2" style="float:right">
      <a href="<?= base_url('admin/belumterjual')?>">Produk yang belum terjual</a> 
    </div>
  </div>
  </div>
  <div id="">dfsdfds</div>	
</div>



<!-- Begin Page Content -->
    <div class="container-fluid">
          <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <div class="container-fluid">
          <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="card-img" src="<?php echo base_url();?>assets/images/new/slide2.png" class="d-block w-50" alt="..." style="height: 250px;">
        
      </div>
    </div>
    <div class="row">

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
           </div>
         </div>
        </div>
        </div>
       </div>
    <!-- End of Content Wrapper -->
  </div>
  
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  
  
  



