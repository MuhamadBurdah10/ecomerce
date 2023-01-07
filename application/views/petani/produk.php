

<div class="container p-t-10" >
    <div class="border">
        <div class="card">
            <div class="card-header text-center">
                <h4>Data Produk</h4>
            </div>
            <div class="card-body">
                <div class="text-right">
                    <button class="border bo-rad-15 p-2 bg0 s-text1 mb-2" onclick="window.location.href='<?=base_url('petani/tambah')?>'">tambah</button>
                </div>
                <div class="card mb-3" >
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <table class="table table bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <?php 
                            $i = 1;
                            foreach ($produk as $p) { ?>
                            <tbody>
                               <td><?=$i ?></td>
                               <td><img src="<?=base_url('assets')?>/images/product/<?=$p['product_image']?>" width="50%" height="60px" alt="IMG-PRODUCT"></td>
                               <td><?=$p['product_name']?></td>
                               <td>Rp. <?=$p['product_price']?> </td>  
                               <td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#more-<?= $p['product_id']?>">show</button><div id="more-<?=$p['product_id']?>" class="collapse"><?=$p['deskripsi']?></div> </td> 
                               <td>Aksi</td> 
                                <?php $i++; }  ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>