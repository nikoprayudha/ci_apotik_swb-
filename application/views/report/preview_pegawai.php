<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pegawai</title>
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
<h2><p style="text-align: center">Data Pegawai</p></h2>
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
			<td><center><img width="100" align="center" src=<?=base_url("assets/upload")."/".$key->foto ?>></center></td>
		
		</tr>
			<?php } ?>
		</table>
		
	<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakPegawai">Cetak PDF</a></p>	
</body>
</html>