<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=DataPenjualan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<head>
	<style type="text/css"> 
 body {
 background-color: white;
 font-family: Arial;
 }
 main {
 width: 80%;
 padding: 20px;
 background-color: white;
 min-height: 300px;
 border-radius: 5px;
 margin: 30px auto;
 }
 table {
 border-top: solid thin #000;
 border-collapse: collapse;
 }
 th, td {
 border-top: border-top: solid thin #000;
 padding: 6px 12px;
 }
 </style>
</head>
<body>
 <table>
 <tr>
		<th>Id Penjualan</th>
		<th>Pelanggan</th>
		<th>Obat</th>
		<th>Jenis Obat</th>
		<th>Tanggal Jual</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Total</th>
		<th>Bayar</th>
		<th>Kembalian</th>
		<th>Pegawai</th>
 </tr>


 <?php  foreach($user as $key) { ?>
 <tr>
 <td><?php echo $key->idPnj ?></td>
 <td><?php echo $key->nama_plg ?></td>
 <td><?php echo $key->nama_obat ?></td>
 <td><?php echo $key->jenis_obat ?></td>
 <td><?php echo $key->tanggal ?></td>
 <td><?php echo $key->jumlah ?></td>
 <td><?php echo $key->harga ?></td>
 <td><?php echo $key->total ?></td>
 <td><?php echo $key->bayar ?></td>
 <td><?php echo $key->kembalian ?></td>
 <td><?php echo $key->nama_peg ?></td>
 </tr>
 <?php } ?>

 </table>

