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
<h2><p style="text-align: center">Data Pembelian</p></h2>
	<table >
		<tr>
            
			<th bgcolor="#FFBB09">Id Pembelian</th>
			<th bgcolor="#FFBB09">Suplier</th>
			<th bgcolor="#FFBB09">Perusahaan</th>
			<th bgcolor="#FFBB09">Obat</th>
			<th bgcolor="#FFBB09">Tanggal Beli</th>
			<th bgcolor="#FFBB09">Jumlah</th>
			<th bgcolor="#FFBB09">Harga</th>
			<th bgcolor="#FFBB09">Total</th>
			<th bgcolor="#FFBB09">Bayar</th>
			<th bgcolor="#FFBB09">Kembalian</th>
			<th bgcolor="#FFBB09">Pegawai</th>
		</tr>

		<?php $no=0; foreach ($pembelian_tampil as $key) { 
		$no++; 
		?>
		<tr>
			<td><?php echo $key->idPem ?></td>
			<td><?php echo $key->nama_sup ?></td>
			<td><?php echo $key->perusahaan ?></td>
			<td><?php echo $key->nama_obat ?></td>
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
		
	<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakPembelian">Cetak PDF</a></p>	
</body>
</html>