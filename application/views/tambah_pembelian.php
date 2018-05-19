<?php $this->load->view('header');?>

           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../../assets/img/find_user.jpg" class="user-image img-responsive"/>
                    <center><ul class="list-unstyled user-info">
                    <a class="btn btn-success btn-xs btn-circle" style="width:12px; height:12px;margin-right:5px;  "></a>
                    <font style="margin-top:-30px;color:white;">Online</font> 
                    <br>
                    <br>
                </ul>
                </center>  
                    </li>
                
                    <li>
                        <a href="<?=base_url()?>index.php/apotik"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>
                     <li>
                        <a href="<?=base_url()?>index.php/apotik/pegawai"> <i class="fa fa-desktop fa-3x"></i> Pegawai</a>
                    </li>
                    <li>
                    <a href="<?=base_url()?>index.php/apotik/obat"><i class="fa fa-qrcode fa-3x"></i> Obat</a>
                    </li>
                 <li>
                    <a href="<?=base_url()?>index.php/apotik/supplier"><i class="fa fa-bar-chart-o fa-3x"></i> Supplier</a>
                    </li>   
                      <li >
                        <a  style='background:#189c78;' href="<?=base_url()?>index.php/apotik/pembelian"><i class="fa fa-table fa-3x"></i> Pembelian </a>
                    </li>
                    <li  >
                        <a  href="<?=base_url()?>index.php/apotik/pelanggan"><i class="fa fa-edit fa-3x"></i> Pelanggan</a>
                    </li>               
                     <li  >
                        <a  href="<?=base_url()?>index.php/apotik/penjualan"><i class="fa fa-table fa-3x"></i>Penjualan</a>
                    </li>   
           
                </ul>
            </div>
        </nav>  
    <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Admin Apotik</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>    
                  <hr/>
 <!-- ______________________________________________________________________________ -->                 
   
                      <br>     
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Tabel Obat
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="obatampil">
                                    <thead>
                                        <tr>
                                            <th>Id Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jenis Obat</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                <tbody>

                                </tbody>
                                </table>
                            </div> <!--End Tables responsive-->
                        </div>  <!--End panel body -->
                    </div> <!--End Advanced Tables -->
               
<!-- ______________________________________________________________________________ -->
        
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Tabel Supplier
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="suppliertampil">
                                    <thead>
                                        <tr>
                                            <th>Id Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                        </tr>
                                    </thead>
                                <tbody>

                                </tbody>
                                </table>
                            </div> <!--End Tables responsive-->
                        </div>  <!--End panel body -->
                    </div> <!--End Advanced Tables -->
 
<!-- ______________________________________________________________________________ --> 
     <div class="panel panel-success">
                        <div class="panel-heading">
                            Tabel Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="pegawaitampil">
                                    <thead>
                                        <tr>
                                            <th>Id Pegawai</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Profesi</th>
                                        </tr>
                                    </thead>
                                <tbody>

                                </tbody>
                                </table>
                            </div> <!--End Tables responsive-->
                        </div>  <!--End panel body -->
                    </div> <!--End Advanced Tables -->
<!-- ______________________________________________________________________________ -->           
                  <hr/>
                 <?php echo form_open_multipart('apotik/createPembelian'); ?>
                <div class="panel panel-primary">
                  <div class="panel-heading col-md-12">
                            Form Tambah Pembelian
                        </div>
                         
                <div class="panel-body">
                <div class="row col-md-12">
                <br>  
                <?php echo validation_errors(); ?>

                                        <div class="form-group">
                                            <label>Obat</label>
                                           <select class="form-control" name="idObat">
                                               <option>---pilih obat-----</option>
                                               <?php foreach($obt->result() as $ob) { ?>
                                                <option name=><?php echo $ob->idObat ?></option>
                                               <?php } ?>
                                           </select>
                                       </div>

                                        <div class="form-group">
                                            <label>Supplier</label>
                                           <select class="form-control" name="idSup">
                                              <option>---pilih supplier-----</option>
                                               <?php foreach($spl->result() as $sup) { ?>
                                                 <option><?php echo $sup->idSup ?></option>
                                               <?php } ?>
                                           </select>
                                       </div>

                                        <div class="form-group">
                                            <label>Tanggal Beli</label>
                                            <input type="date" class="form-control" name="tgl_beli" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" class="form-control" name="jumlah" id="jumlah" 
                                            onkeyup="kali();">
                                        </div>

                                         <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga" 
                                            onkeyup="kali();">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="text" class="form-control" name="total" id="total" 
                                            onkeyup="kurang()">
                                        </div>

                                        <div class="form-group">
                                            <label>Bayar</label>
                                            <input type="text" class="form-control" name="bayar" id="bayar" 
                                            onkeyup="kurang()">
                                        </div>

                                        <div class="form-group">
                                            <label>Kembalian</label>
                                            <input type="text" class="form-control" name="kembalian" id="kembalian">
                                        </div>

                                         <div class="form-group">
                                            <label>Pegawai</label>
                                           <select class="form-control" name="idPgw">
                                              <option>---pilih pegawai-----</option>
                                               <?php foreach($pgw->result() as $peg) { ?>
                                                 <option><?php echo $peg->idPgw ?></option>
                                               <?php } ?>
                                           </select>
                                       </div>

                                           
                                         
                            <button type="submit" class="btn btn-primary btn-md" value="Simpan">Simpan</button> &nbsp;
                            <button type="reset" class="btn btn-success btn-md" value="Reset">Reset</button>
                        <?php echo form_close(); ?>
                          
                                                                
                    </div> <!--End col -->
                </div> <!--End row -->
            </div>
            </div>
                
        
        </div>  <!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer');?>

<script type="text/javascript">
        $(document).ready(function() {
            $('#obatampil').DataTable({
                "processing":true,
                "serverSide":true,
                "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('apotik/data_tampil_obat')?>",
                    type: "POST"
                },
                "columnDefs":
                [
                    {
                        "targets":0,
                        "data":"idObat",
                    },
                    {
                        "targets":1,
                        "data":"nama_obat",
                    },
                    {
                        "targets":2,
                        "data":"jenis_obat",
                    },
                    {
                        "targets":3,
                        "data":"jumlah",
                    },
                    {
                        "targets":4,
                        "data":"harga",
                    },
                ]
            });
        });
    </script>

<!-- ____________________________________________________________________________________ -->

  <script type="text/javascript">
        $(document).ready(function() {
            $('#suppliertampil').DataTable({
                "processing":true,
                "serverSide":true,
                "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('apotik/data_tampil_supplier')?>",
                    type: "POST"
                },
                "columnDefs":
                [
                    {
                        "targets":0,
                        "data":"idSup",
                    },
                    {
                        "targets":1,
                        "data":"nama_sup",
                    },
                    {
                        "targets":2,
                        "data":"perusahaan",
                    },
                    {
                        "targets":3,
                        "data":"alamat",
                    },
                    {
                        "targets":4,
                        "data":"telp",
                    },
                ]
            });
        });
    </script>

<!-- ____________________________________________________________________________________ -->

<script type="text/javascript">
        $(document).ready(function() {
            $('#pegawaitampil').DataTable({
                "processing":true,
                "serverSide":true,
                "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('apotik/data_tampil_pegawai')?>",
                    type: "POST"
                },
                "columnDefs":
                [   
                    {
                        "targets":0,
                        "data":"idPgw",
                    },
                    {
                        "targets":1,
                        "data":"nama_peg",
                    },
                    {
                        "targets":2,
                        "data":"jk",
                    },
                    {
                        "targets":3,
                        "data":"agama",
                    },
                    {
                        "targets":4,
                        "data":"alamat",
                    },
                     {
                        "targets":5,
                        "data":"telp",
                    },
                     {
                        "targets":6,
                        "data":"profesi",
                    },
                ]
            });
        });
    </script>

    <script>
function kali() {
      var txtFirstNumberValue = document.getElementById('jumlah').value;
      var txtSecondNumberValue = document.getElementById('harga').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
function kurang() {
      var txtFirstNumberValue = document.getElementById('bayar').value;
      var txtSecondNumberValue = document.getElementById('total').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('kembalian').value = result;
      }
}
</script>
</body>
</html>
