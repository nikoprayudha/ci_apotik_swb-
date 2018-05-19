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
                        <a href="<?=base_url()?>index.php/apotik"><i class="fa fa-dashboard fa-3x"></i>Home</a>
                    </li>
                     <li>
                        <a  style='background:#189c78;' href="<?=base_url()?>index.php/apotik/pegawai"> <i class="fa fa-desktop fa-3x"></i>Pegawai</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>index.php/apotik/obat"><i class="fa fa-qrcode fa-3x"></i>Obat</a>
                    </li>
                   <li>
                        <a   href="<?=base_url()?>index.php/apotik/supplier"><i class="fa fa-bar-chart-o fa-3x"></i> Supplier</a>
                    </li>   
                      <li  >
                        <a  href="<?=base_url()?>index.php/apotik/pembelian"><i class="fa fa-table fa-3x"></i> Pembelian </a>
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
                    <div class="col-md-12">
                     <h2>Admin Apotik</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                 <?php echo form_open_multipart('apotik/createPegawai'); ?>
                <div class="panel panel-primary">
                  <div class="panel-heading col-md-12">
                            Form Tambah Pegawai
                        </div>
                         
                <div class="panel-body">
                <div class="row col-md-12">
                <br>  
                <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_peg"/>
                                       </div>
                                            <label>Jenis Kelamin</label>
                                        <div class="radio"> <label>
                                             <label>
                                                <input type="radio" name="jk"  value="Laki-Laki"/>Laki-Laki
                                            </label>
                                            <label>
                                                    <input type="radio" name="jk" value="Perempuan"/>Perempuan
                                                </label>
                                            </div>
                                        </div> 
                                         <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Budha</option>
                                                <option>Hindu</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" name="alamat"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" placeholder="Telepon" name="telp" />
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="foto"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Profesi</label>
                                            <select class="form-control" name="profesi">
                                                <option>Administrator</option>
                                                <option>Kasir</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Username" name="username" />
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" />
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
   
    
</body>
</html>
