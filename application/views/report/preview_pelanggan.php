<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pelanggan</title>
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
<h2><p style="text-align: center">Data pelanggan</p></h2>
	<table >
		<tr>
            <th bgcolor="#FFBB09">Id Pelanggan</th>
            <th bgcolor="#FFBB09">Nama pelanggan</th>
            <th bgcolor="#FFBB09">Jenis Kelamin</th>
            <th bgcolor="#FFBB09">Alamat</th>
            <th bgcolor="#FFBB09">Telepon</th>
		</tr>

		<?php $no=0; foreach ($pelanggan_tampil as $key) { 
		$no++; 
		?>
		<tr>
			<td><?php echo $key->idPlg ?></td>
			<td><?php echo $key->nama_plg ?></td>
			<td><?php echo $key->jk ?></td>
			<td><?php echo $key->alamat ?></td>
			<td><?php echo $key->telp ?></td>
		
		</tr>
			<?php } ?>
		</table>
		
	<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakPelanggan">Cetak PDF</a></p>	
</body>
</html>