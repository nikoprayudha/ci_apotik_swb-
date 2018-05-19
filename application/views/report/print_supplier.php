<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Supplier</title>
	<style>
		table{
			border-collapse: collapse;	width:70%; margin: 0 auto;
		}
		table th{
			border: 1px solid #000; padding: 3px; font-weight:bold; text-align: center;
		}
		table td{
			border:1px solid #000; padding: 3px; vertical-align: top;
		}
	</style>
</head>

<body>
<table>
		<tr>
			<td colspan="1" style="border: 0px"></td>
			<td colspan="" align="center" style="border: 0px">
			<img src="assets/img/batu.jpg" width="80" height="80" alt="">
			</td>
			
			<td colspan="" style="text-align: center; border: 0px">
			<br>
				<b>Apotik Sumber Waras</b><br>
				<b>Anda Waras Kami Senang</b><br>
				<b>Jl.Gondorejo , Oro Oro Ombo, Kota Batu</b><br>
			</td>
			<td colspan="" align="center" style="border: 0px">
				<img src="assets/img/kwb.png" width="80" height="80" alt="">
			</td>
		</tr>
	</table>
	<hr width="70%" align="center">
	<br><br><br>
<h2><p style="text-align: center">Data Supplier</p></h2>
	<table >
		<tr>
            <th bgcolor="#FFBB09">Id Supplier</th>
            <th bgcolor="#FFBB09">Nama Supplier</th>
            <th bgcolor="#FFBB09">Perusahaan</th>
            <th bgcolor="#FFBB09">Alamat</th>
            <th bgcolor="#FFBB09">Telepon</th>
		</tr>

		<?php $no=0; foreach ($supplier_tampil as $key) { 
		$no++; 
		?>
		<tr>
			<td><?php echo $key->idSup ?></td>
			<td><?php echo $key->nama_sup ?></td>
			<td><?php echo $key->perusahaan ?></td>
			<td><?php echo $key->alamat ?></td>
			<td><?php echo $key->telp ?></td>
		</tr>
			<?php } ?>
		</table>
		
</body>
</html>