
<!DOCTYPE html>
<html>
<head>
  <title>Resi Pengiriman pagesit</title>
  <style>
  table{

      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }
  </style>
</head>
<body onload="window.print();">
 <div class="card shadow mb-0">
           


                    	       
<html>
<head>
<title>Faktur Pembayaran</title>
<style>
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>
<body style='font-family:tahoma; font-size:10pt;'>
<center>
  <br><br>
<table style='width:600px; font-size:11pt; height:100px; font-family:calibri; border-collapse: collapse;' border = '1'>
<td width='70%' align='left' style='padding-right:20px; padding-left: 12px; font-size:12pt ; vertical-align:top'>
<span style='font-size:; margin-bottom: 4px;' ><img width="" style="float: left; width: 10%;"
        src="<?=base_url('assets')?>/images/new/logo-igsb.jpg" class="d-block w-15" alt="...">Toko Tanaman</span><br>
       <p>-------------------------------------------------------------------------------------------------------------------</p>
Pengirim : 
            <?php if ($resi['id_toko'] == 5) { ?>
                        <b style="font-size: 16px">Toko jang </b>
             <?php } else  if ($resi['id_toko']== 3){ ?>
                     <b style="font-size: 16px">   Toko Udin</b>
             <?php }?>

 </br>
  Telp : 0251-8341600
</td>

</table>
<table style='width:600px; font-size:11pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
Nama Penerima : <?=$resi['nama_user'] ?></br>
Alamat : <?=$resi['addres'] ?>

</td>
<td style='vertical-align:top' width='30%' align='left'>
Tanggal kirim : <?=$resi['tgl_pengiriman']?>
</td>
</table>
<table cellspacing='0' style='width:600px; height:150px; font-size:11pt; font-family:calibri;  border-collapse: collapse; margin-bottom: 7px;' border='1' >
 
<tr align='center'>
<td width='20%' border="0" rowspan="">Expedisi</td>
<td width='20%'>Total Bayar</td>
<!-- <td width='20%' rowspan="2">Metode Bayar</td> -->
<tr>
    <td rowspan="2" style="text-align: center;"> <?=$resi['expedisi']?></td>
    <td rowspan="2" style="text-align: center;"> Rp.<?=number_format($resi['total_pembayaran'])?></td>
<!-- <tr>
<td colspan = '6' rowspan=""><?=$resi['expedisi']?></td>
</tr> -->
<tr>
</tr>
<tr>
<td colspan = '6' ><div style='text-align:left;'>Terimakasih Sudah Belanja di  <?php if ($resi['id_toko'] == 5) { ?>
                        <b style="font-size: 16px">Toko jang </b>
             <?php } else  if ($resi['id_toko']== 3){ ?>
                     <b style="font-size: 16px">   Toko Udin</b>
             <?php }?></div></td>
</tr>
<tr>
</tr>
<tr>
<!--<td colspan = '5'><div style='text-align:right'>Sisa : </div></td>
<td style='text-align:right'>Rp0,00</td></tr>-->
</table>
</center>
</body>
</html>
 









