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
		
	<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakSupplier">Cetak PDF</a></p>	
</body>
</html>