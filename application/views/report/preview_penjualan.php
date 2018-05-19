
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Penjualan</title>
    <style>
        table{
            border-collapse: collapse;  width:30%; margin: 0 auto;
        }
        table th{
            border: 0px solid #000; padding: 5px; font-weight:bold; text-align: left;
        }
        table td{
            border:1px solid #000; padding: 3px; vertical-align: top;
        }
    </style>
</head>

<body>
<h2><p style="text-align: center">Data Penjualan</p></h2>
    <table>
        <tr>
            <th>No Penjualan</th> <th>:</th><th><?php echo $penjualan[0]->idPnj?></th><tr>
             <th>Pelanggan</th> <th>:</th><th><?php echo $penjualan[0]->nama_plg?></th><tr>
            <th>Obat</th> <th>:</th><th><?php echo $penjualan[0]->nama_obat?></th><tr>
             <th>Jenis</th> <th >:</th><th><?php echo $penjualan[0]->jenis_obat?></th><tr>
             <th>Tanggal Penjualan</th> <th >:</th><th><?php echo $penjualan[0]->tanggal?></th><tr>
              <th>Jumlah</th> <th ;">:</th><th><?php echo $penjualan[0]->jumlah?></th><tr>
              <th>Harga</th> <th >:</th><th><?php echo $penjualan[0]->harga?></th><tr>
              <th>Total</th> <th >:</th><th><?php echo $penjualan[0]->total?></th><tr>
              <th>Bayar</th> <th >:</th><th><?php echo $penjualan[0]->bayar?></th><tr>
              <th>Kembalian</th> <th >:</th><th><?php echo $penjualan[0]->kembalian?></th><tr>
              <th>Petugas</th> <th style="text-align:center;">:</th><th><?php echo $penjualan[0]->nama_peg?></th><tr>
        </tr>
           
        </table>
        
    <p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakPenjualan/<?php echo $penjualan[0]->idPnj ?>">Cetak PDF</a></p>  
</body>
</html>



