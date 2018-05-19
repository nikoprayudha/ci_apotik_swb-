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
                        <a href="<?=base_url()?>index.php/apotik/pembelian"><i class="fa fa-table fa-3x"></i> Pembelian </a>
                    </li>
                    <li  >
                        <a href="<?=base_url()?>index.php/apotik/pelanggan"><i class="fa fa-edit fa-3x"></i> Pelanggan</a>
                    </li>               
                     <li  >
                        <a style='background:#189c78;' href="<?=base_url()?>index.php/apotik/penjualan"><i class="fa fa-table fa-3x"></i>Penjualan</a>
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
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                     <a href="<?=base_url()?>index.php/apotik/createPenjualan"><button type="button" class="btn btn-success btn-circle">Create <i class="fa fa-plus"></i></button></a>
                     <a href="<?=base_url()?>index.php/cetak/viewExcel"><button type="button" class="btn btn-success btn-lg-circle">Print Excel <i class="fa fa-print"></i></button></a>
                      <br>
                      <br>     
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tabel Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="penjualantabel">
                                    <thead>
                                        <tr>
                                            <th>Id Penjualan</th>
                                            <th>Pelanggan</th>
                                            <th>Obat</th>
                                            <th>Jenis Obat</th>
                                            <th>Tanggal Jual</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Bayar</th>
                                            <th>Kembalian</th>
                                            <th>Pegawai</th>
                                            <th>Print</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                <tbody>

                                </tbody>
                                </table>
                            </div> <!--End Tables responsive-->
                        </div>  <!--End panel body -->
                    </div> <!--End Advanced Tables -->
                </div> <!--End col -->
            </div> <!--End row -->
                
        
        </div>  <!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer');?>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#penjualantabel').DataTable({
                "processing":true,
                "serverSide":true,
                "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('apotik/data_server_penjualan')?>",
                    type: "POST"
                },
                "columnDefs":
                [   
                    {
                        "targets":0,
                        "data":"idPnj",
                    },
                    {
                        "targets":1,
                        "data":"nama_plg",
                    },
                    {
                        "targets":2,
                        "data":"nama_obat",
                    },
                    {
                        "targets":3,
                        "data":"jenis_obat",
                    },
                    {
                        "targets":4,
                        "data":"tanggal",
                    },
                     {
                        "targets":5,
                        "data":"jumlah",
                    },
                    {
                        "targets":6,
                        "data":"harga",
                    },
                      {
                        "targets":7,
                        "data":"total",
                    },
                      {
                        "targets":8,
                        "data":"bayar",
                    },
                      {
                        "targets":9,
                        "data":"kembalian",
                    },
                      {
                        "targets":10,
                        "data":"nama_peg",
                    },
                    {
                        "targets":11,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/apotik/printPenjualan/'+data["idPnj"]+'"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-print"></span></button></a>';
                        }
                    },
                    {
                        "targets":12,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/apotik/deletePenjualan/'+data["idPnj"]+'"><button class="btn btn-danger btn-xs" onClick="return doconfirm();" ><span class="glyphicon glyphicon-trash"></span></button></a>';
                        }
                    },
                ]
            });
        });
    </script>
    <script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
    
</body>
</html>
