<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:670px;
      border-radius: 5px;
    }
 
    .center {
    margin: auto;
    width: 50%;
    
    }
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table .show{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
    <div class="center">
        <h2 style="text-align:center">Laporan Penjualan IGSB FARM</h2>
    </div>
        <?php 
            foreach ($total as $p) { ?>
            <h4> Priode <?= $p->start_date?> sampai <?= $p->end_date?></h4>
            <?php }  ?>
	<div id="outtable">
	  <table class="show">
	  	<thead>
	  		<tr>
                <th>#</th>
                <th class="normal">Tanggal</th>
                <th class="normal">Pelanggan</th>
                <th>Total</th>
                <th>HPP</th>
                <th>Laba</th>
	  		</tr>
	  	</thead>
	  	<tbody>
          <?php 
            $i = 1;
            foreach ($keuntungan as $p) { ?>
           
          <tr>
            <td><?= $i?></td>
            <td><?=$p->tgl_update?></td>
            <td><?=$p->nama_user?></td>
            <td>Rp.<?=number_format($p->total_pembayaran,2,',','.')?></td>
            <td>Rp.<?=number_format($p->total_pembayaran-$p->total_keuntungan,2,',','.')?></td>
            <td>Rp.<?=number_format($p->total_keuntungan,2,',','.')?></td>
          </tr>
        <?php $i++; }  ?>
	  	</tbody>
          <tfoot>
           <?php 
            $i = 1;
            foreach ($total as $p) { ?>
            <tr>
                <th colspan="3" style="text-align:right">Total:</th>
                <th>Rp.<?=number_format($p->total_pembayaran,2,',','.')?></th>
                <th>Rp.<?=number_format($p->total_hpp,2,',','.')?></th>
                <th>Rp.<?=number_format($p->total_keuntungan,2,',','.')?></th>
            </tr>
            <?php $i++; }  ?>
        </tfoot>
	  </table>
	 </div>
</body>
</html>