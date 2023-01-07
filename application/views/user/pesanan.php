<style>
.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
</style>
<div class="container p-2" ng-controller="ProductController">
    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='belum_bayar'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=belum_bayar">Belum Bayar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='verifikasi'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=verifikasi">Verifikasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='dikemas'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=dikemas">Dikemas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='dikirim'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=dikirim">Dikirim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='selesai'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=selesai">Selesai</a>
            </li>
           <!--  <li class="nav-item">
                <a class="nav-link <?php if($_GET['status']=='pengembalian'){echo "active";} ?>" href="<?=base_url('users/pesanan')?>?status=pengembalian">Dikembalikan</a>
            </li> -->
        </ul>

        <!-- Tab panes -->
        <div class="container-fluid">
            <!-- content -->
            <div class="pt-5" ng-init="fetchpesanan('<?=base_url()?>','product/fetch_pesanan','<?= $_GET['status'];?>')">
                <div class="card border bo-rad-15 bg9" ng-repeat="p in pesanan" style="background-color: #BBBA54">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-10">
                            <?php if($_GET['status']=='dikemas' || $_GET['status']=='dikirim'){ ?>
                                <h5 style="color:white;">tgl pengiriman:</h5><span class="s-text1">{{p.tgl_pengiriman}}</span>
                            <?php } ?>
                            </div>
                            <div class="col-lg-2"  style="color:white;">
                                {{p.status}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body" ng-controller="ProductController" style="background-color: #8E8D24"ng-init="fetch_listpesanan('<?=base_url()?>','product/fetch_listpesanan',p.id_pesanan)">
                        <div class="row">
                            <div class="col-lg-10" style="color:white;">
                                <h5>Total Pembayaran: <span class="fs-18">{{p.total_pembayaran | currency : "Rp" : 0 }}</span></h5>
                            </div>
                            <div class="col-lg-2"  style="color:white;">
                                <span>Total produk : {{listpesanan.length}}</span>
                            </div>
                        </div>
                        <div class="container-table-cart pos-relative" >
                        <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table-head border" >
                                <th class="column-1"></th>
                                <th class="column-2" style="color:white;">Produk</th>
                                <th class="column-3" style="color:white;">Harga</th>
                                <th class="column-4 p-l-40" style="color:white;">Kuantitas</th>
                                <th class="column-4 p-l-40" style="color:white;">Resi</th>
                                <th class="column-5" style="color:white;">Total</th>
                            </tr>
                            <tr class="table-row" ng-repeat="lp in listpesanan">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden" >
                                        <img src="<?= base_url('assets/images/product/')?>{{lp.product_image}}" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-2" style="color:white;">{{lp.product_name}}</td>
                                <td class="column-3 price" style="color:white;"><?php if($this->session->userdata('jenis_user')=="konsumen_eksekutif"){ ?>
											{{lp.product_price_eksekutif | currency : "Rp" : 0 }}
										<?php }elseif($this->session->userdata('jenis_user')=="seller"){?>
											{{lp.product_price_seller | currency : "Rp" : 0 }}
										<?php }else{ ?>
											{{lp.product_price | currency : "Rp" : 0 }}
										<?php } ?></td>
                                <td class="column-4 p-l-40" style="color:white;">
                                        <span class="size8 m-text18 t-center num-product" style="color:white;">x  {{lp.kuantitas}}</span>	
                                </td>
                                <td class="column-5" id="" style="color:white;">  
                                  
                                        <a href="<?= base_url('assets/images/resi/')?>{{p.resi}}"> <img src="<?= base_url('assets/images/resi/')?>{{p.resi}}" alt="IMG-RESI" alt="" width="75px" height="75px"></a>
                                       
                                   </td>
                                <td class="column-5" id="sum" style="color:white;">{{lp.harga | currency : "Rp" : 0 }}</td>

                            </tr>
                        </table>
                        </div>
                    </div>
                    <?php if($_GET['status']=='selesai'){ ?>
                        <div class="row action-pesanan">
                            <div class="col-lg-3">
                                 <a href="<?= base_url('product/add_cartagain/{{p.id_pesanan}}')?>"><div class="border bo-rad-15 bg10 p-2 s-text1 w-20 t-center" style="cursor:pointer"> Beli Lagi</div></a>
    
                            </div>
                        </div>

                    <?php } ?>
                    <?php if($_GET['status']=='dikirim'){ ?>
                        <div class="row action-pesanan">
                            <div class="col-lg-3">
                                <div class="border bo-rad-15 bg0 p-2 s-text1 w-20 t-center btn-terima" data-toggle="modal" data-id="{{p.id_pesanan}}" data-target="#barangDiterima" style="cursor:pointer">Barang diterima</div>
    
                            </div>
                            <div class="col-lg-3">
                                <div class="border bo-rad-15 bg10 p-2 s-text1 w-20 t-center btn-kembali" data-toggle="modal" data-id="{{p.id_pesanan}}" data-target="#pengembalianBarang" style="cursor:pointer">Pengembalian</div>
                            </div>
                        </div>

                    <?php } ?>
                    <?php if($_GET['status']=='belum_bayar'){ ?>
                        <div class="row action-pesanan">
                            <div class="col-lg-3">
                                <div class="border bo-rad-15 bg10 p-2 s-text1 w-20 t-center btn-bayar" data-toggle="modal" data-id="{{p.id_pesanan}}" data-target="#exampleModal" style="cursor:pointer">Bayar sekarang</div>
                            </div>
                            <div class="col-lg-8 p-t-9">
                                <span class="text-white">Bayar sebelum {{p.batas}}</span> <p style="float: right; color: #ffff">Biaya Ongkir : Rp. {{p.expedisi}}</p>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                </div>
            </div>
            <!-- end content -->
        </div>
        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="pengembalianBarang" tabindex="-1" role="dialog" aria-labelledby="pengembalianBarangLabel" aria-hidden="true" ng-controller="ProductController">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajukan Pengembalian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('product/kembalikan')?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                            <div class="form-row">
                                <label for="recipien-name" class="col-form-label">Bukti Produk</label><br>
                                <input type="file" name="cover" class="thm-bk-xl" require> 
                            </div>
                            <div class="form-row">
                                <label for="">Alasan Dikembalikan : </label><br>
                                <textarea class="form-control" name="alasan"></textarea>
                            </div>
                            <input type="hidden" name="id_pesanan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ng-controller="ProductController">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Info Pembayaran</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('product/bayar')?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                            <div class="form-row">
                                <label for="">Total Pembayaran :</label>
                                <span style="font-weight:bold" class="total_pembayaran_mod"></span>
                            </div>
                            <div class="form-row card" style="text-align: justify;">
                            <div class="card-header">
                                <span class="m-text8" style="font-weight:bold; color:#E46613;">Bayar pesanan sesuai dengan jumlah diatas</span>
                            </div>
                            <div class="card-body">
                                <span class="">Dicek dalam 5 menit setelah bukti transfer diupload. Diwajibkan membayar sesuai dengan total pembayaran sebelum batas waktu berakhir.</span>
                            </div>
                            </div>
                            <div id="cara-transaksi">
                            </div>
                            <div class="form-row">
                                <label for="recipien-name" class="col-form-label">Bukti Transfer</label><br>
                                <input type="file" name="cover" class="thm-bk-xl" require> 
                            </div>
                            <input type="hidden" name="total_pembayaran">
                            <input type="hidden" name="id_pesanan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Upload nanti</button>
                    <button type="submit" class="btn btn-primary">Upload bukti transfer</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="barangDiterima" tabindex="-1" role="dialog" aria-labelledby="barangDiterimaLabel" aria-hidden="true" ng-controller="ProductController">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Barang Diterima</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('product/terima')?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                    <div class="row">
                        <div class="col-lg-4">
                        <span>Rate Produk : </span>
                        </div>
                        <div class="col-lg-8">
                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="rate" class="rating-value" value="">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        <span>Komentar : </span>
                        </div>
                        <div class="col-lg-8">
                        <textarea name="komentar" class="form-control"></textarea>
                        </div>
                    </div>
                        <input type="hidden" name="id_pesanan" value=""> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>