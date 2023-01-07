<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Toko Tanaman</title>
  <?=$header?>
  <style>
    .bg-0{
      background:#bcbaba;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/index')?>">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3" >Toko Tanaman</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('admin/index')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('admin/akun_bank')?>">
        <i class="fa fa-dollar-sign"></i>
          <span>Akun Bank</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('admin/artikel')?>">
        <i class="fa fa-book"></i>
          <span>Kelola Artikel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pemesanan dan Penawaran
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/pemesanan')?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Pemesanan</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/penawaran')?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Penawaran</span></a>
      </li>

       -->
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Produk dan User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/produk')?>">
          <i class="fas fa-fw fa-leaf"></i>
          <span>Produk</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/user')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Charts 
         <div class="sidebar-heading">
        Laporan
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/laporan')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Penjualan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/laporan_produk')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Penjualan Produk</span></a>
      </li>

-->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <div class="overflow-auto" id="mynotifikasi" style="height:250px">
                
                </div>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('nama_user')?></span>
                <img class="img-profile rounded-circle" src="<?=base_url('assets')?>/images/profile/<?=$this->session->userdata('img_profile')?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <?php if($this->session->flashdata("message")){ ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?= $this->session->flashdata("message")?> berhasil!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } ?>

        <?=$content?>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Toko Tanaman &copy; 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/sign_out')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/admin/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?php echo base_url('assets/new_assets/dist/jquery.fileuploader.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_bookpreview.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/custom_cover.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/new_assets/js/clone.js'); ?>" type="text/javascript"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">
          $.ajax({
	                type:'POST',
	                url:'<?=site_url('Admin/fetchnotifikasi');?>',
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
                    var my_order = $("#mynotifikasi");
                    var link = '<?= base_url('admin/pemesanan_notif')?>';
                    $.each(data, function(i, order){
                      my_order.append('<a class="dropdown-item d-flex align-items-center bg-'+data[i].isread+'" href="'+link+'?id_pesanan='+data[i].id_pesanan+'&id_notifikasi='+data[i].id_notifikasi+'">'+
                                        '<div class="mr-3">'+
                                          '<div class="icon-circle bg-primary">'+
                                            '<i class="fas fa-file-alt text-white"></i>'+
                                         '</div>'+
                                        '</div>'+
                                        '<div>'+
                                          '<div class="small">'+data[i].created+'</div>'+
                                          '<span class="font-weight-bold">'+data[i].message+'</span>'+
                                        '</div>'+
                                      '</a>');
                      $(".badge-counter").text(data[i].belum_dibaca);
                    })  
	                	
	                }
	            });	

		$('body').on('click','.btn-bayar',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('admin/fetchbyid');?>',
	                data:"id_penawaran="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
	                	console.log(data);
	                	$modal = $("#exampleModal");
                    $modal.find("input[name=id_penawaran]").val(data.id_penawaran);
                    $modal.modal("show");
	                }
	            });		
			}
    })

    $('body').on('click','.btn-pengembali',function(){
			var id = $(this).attr('data-id');
			if(id != null || id != 0 || id != ""){
				$.ajax({
	                type:'POST',
	                url:'<?=site_url('admin/fetchbyidpesanan');?>',
	                data:"id_pesanan="+id,
	                dataType : 'json',
	                beforeSend:function(){},
	                error:function(jqXHR){console.log("error");console.log(jqXHR.responseText);},
	                success:function(data){
                    var more = $('.more');
                    var more1 = $('.more1');
	                	console.log(data);
	                	$modal = $("#pengembalian");
                    more.append('<div class="col-auto" id="more-tanda">'+
                                        '<img src="<?=base_url('assets/images/bukti_pengembalian/')?>'+data.bukti_keluhan+'" alt="" width="350px">'+
                                    '</div>');
                    more1.append('<h5 id="more1-tanda">'+data.alasan+'</h5>');
                    $modal.modal("show");
	                }
	            });		
			}
    })

    $("#pengembalian").on('hidden.bs.modal', function () {
			$(this).data('bs.modal', null);
			$("#more-tanda").remove();
      $("#more1-tanda").remove();
		});
    
    /* @diki Menambahkan autocomplete */
	
  </script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/admin/')?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="<?=base_url('assets/admin/')?>vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="<?=base_url('assets/admin/')?>js/demo/chart-area-demo.js"></script>
  <script src="<?=base_url('assets/admin/')?>js/demo/chart-pie-demo.js"></script> -->

  <!-- Page level plugins -->
  <script src="<?=base_url('assets/admin/')?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets/admin/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url('assets/admin/')?>js/demo/datatables-demo.js"></script>

</body>

</html>
