<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pegawai</title>
	<style>
		table{
			border-collapse: collapse;
			width:70%;
			margin: 0 auto;
		}
		table th{
			border: 1px solid #000;
			padding: 3px;
			font-weight:bold;
			text-align: center;
		}
		table td{
			border:1px solid #000;
			padding: 3px;
			vertical-align: top;
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
<p style="text-align: center">Data Pegawai</p>
<table >
		<tr>
             <th bgcolor="#2HBB67">Nama</th>
             <th bgcolor="#2HBB67">Jenis Kelamin</th>
             <th bgcolor="#2HBB67">Agama</th>
             <th bgcolor="#2HBB67">Alamat</th>
             <th bgcolor="#2HBB67">Telepon</th>
             <th bgcolor="#2HBB67">Profesi</th>
             <th bgcolor="#2HBB67">Username</th>
             <th bgcolor="#2HBB67">Foto</th>
		</tr>

		<?php $no=0; foreach ($pegawai_tampil as $key) { 
		$no++; 
		?>
		<tr>
			<td><?php echo $key->nama_peg ?></td>
			<td><?php echo $key->jk ?></td>
			<td><?php echo $key->agama ?></td>
			<td><?php echo $key->alamat ?></td>
			<td><?php echo $key->telp ?></td>
			<td><?php echo $key->profesi ?></td>
			<td><?php echo $key->username ?></td>
			<td><center><img width="100" align="center" src="assets/upload/<?php echo $key->foto;?>"></center>
			</td>
		</tr>
			<?php } ?>
		</table>
	
</body>
</html>