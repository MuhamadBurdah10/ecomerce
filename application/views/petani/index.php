
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

    <div class="ml-4 col-md-10 mt-3 mb-4">
             <center class="mb-4">
            <img id="fotosekarang" src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>" style="width: 150px;">
            <input type="file" id="fotobaru" name="fotobaru" accept=".jpg, .jpeg, .png" hidden>
          </center>
          <table class="table table-borderless col-md-8 mx-auto">
            <tr>
              <th>Nama </th>
              <td><?=$this->session->userdata('nama_user')?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?=$this->session->userdata('email')?></td>
            </tr>
            <tr>
              <th>Nomor Telepon</th>
              <td>+62164733487<!-- <?=$this->session->userdata('no_hp')?> --></td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>Jl. Raya Pajajaran no 03 Kota Bogor 16811<!-- <?=$this->session->userdata('addres')?> --></td>
            </tr>
          </table><br>
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
  
  
  

