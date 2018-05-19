<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Obat</title>
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
<h2><p style="text-align: center">Data Obat</p></h2>
	<table >
		<tr>
            <th bgcolor="#FFBB09">Id Obat</th>
            <th bgcolor="#FFBB09">Nama Obat</th>
            <th bgcolor="#FFBB09">Jenis Obat</th>
            <th bgcolor="#FFBB09">Jumlah</th>
            <th bgcolor="#FFBB09">Harga</th>
		</tr>

		<?php $no=0; foreach ($obat_tampil as $key) { 
		$no++; 
		?>
		<tr>
			<td><?php echo $key->idObat ?></td>
			<td><?php echo $key->nama_obat ?></td>
			<td><?php echo $key->jenis_obat ?></td>
			<td><?php echo $key->jumlah ?></td>
			<td><?php echo $key->harga ?></td>
		
		</tr>
			<?php } ?>
		</table>
		
	<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakObat">Cetak PDF</a></p>	
</body>
</html>