
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Penjualan</title>
    <style>
        table{
            border-collapse: collapse;  width:50%; margin: 0 auto;
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
<table>
    <tr>
      
      <td colspan="" style="text-align: center; border: 0px">
      <br>
        <b>Apotik Sumber Waras</b><br>
        <b>Anda Waras Kami Senang</b><br>
        <b>Jl.Gondorejo , Oro Oro Ombo, Kota Batu</b><br>
      </td>
    
    </tr>
  </table>
<hr width="50%" align="center">
<h2><p style="text-align: center">Data Penjualan</p></h2>
    <table>
        <tr>
          <th>No Penjualan</th>
          <th>:</th>
          <th><?php echo $penjualan[0]->idPnj?></th><tr>
          <th>Pelanggan</th>
          <th>:</th>
          <th><?php echo $penjualan[0]->nama_plg?></th><tr>
          <th>Obat</th>
          <th>:</th>
          <th><?php echo $penjualan[0]->nama_obat?></th><tr>
          <th>Jenis</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->jenis_obat?></th><tr>
          <th>Tanggal Penjualan</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->tanggal?></th><tr>
          <th>Jumlah</th>
          <th ;">:</th>
          <th><?php echo $penjualan[0]->jumlah?></th><tr>
          <th>Harga</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->harga?></th><tr>
          <th>Total</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->total?></th><tr>
          <th>Bayar</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->bayar?></th><tr>
          <th>Kembalian</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->kembalian?></th><tr>
          <th>Petugas</th>
          <th >:</th>
          <th><?php echo $penjualan[0]->nama_peg?></th><tr>
        </tr>
           
        </table>
 <hr width="50%" align="center">
  <table>
    <tr>   
      <td colspan="" style="text-align: center; border: 0px">
      <br>
        <b>Nb : barang Yang di Beli </b><br>
        <b>tidak dapat di kembalikan</b><br>
        <b>Apotik SWB - Jl.Gondorejo , Oro Oro Ombo, Kota Batu</b><br>
      </td>
      
    </tr>
  </table>
</body>
</html>



