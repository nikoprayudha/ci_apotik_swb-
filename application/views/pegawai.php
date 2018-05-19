<?php $this->load->view('header');?>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?=base_url()?>assets/img/find_user.jpg" class="user-image img-responsive"/>
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

                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                     <a href="<?=base_url()?>index.php/apotik/createPegawai"><button type="button" class="btn btn-success btn-circle">Create <i class="fa fa-plus"></i></button></a>
                     <a href="<?=site_url()?>/cetak"><button type="button" class="btn btn-danger btn-circle">Print <i class="fa fa-print"></i></button></a>
                      <br>
                      <br>     
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tabel Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="pegawaitabel">
                                    <thead>
                                        <tr>
                                            <th>Id Pegawai</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Foto</th>
                                            <th>Profesi</th>
                                            <th>Username</th>
                                            <th>Edit</th>
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
            $('#pegawaitabel').DataTable({
                "processing":true,
                "serverSide":true,
                "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
                "ajax":{
                    url : "<?php echo site_url('apotik/data_server_pegawai')?>",
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
                        "data":"foto",
                        "render":function(data,type,full,meta){
                            return '<img width="150" src="<?=base_url()?>assets/upload/'+data+'">';
                        }
                    },
                      {
                        "targets":7,
                        "data":"profesi",
                    },
                      {
                        "targets":8,
                        "data":"username",
                    },
                    {
                        "targets":9,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/apotik/updatePegawai/'+data["idPgw"]+'"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>';
                    }
                    },
                    {
                        "targets":10,
                        "data":null,
                        "searchable":false,
                        "render":function(data,type,full,meta){
                            return '<a href="<?=site_url()?>/apotik/deletePegawai/'+data["idPgw"]+'"><button class="btn btn-danger btn-xs" onClick="return doconfirm();" ><span class="glyphicon glyphicon-trash"></span></button></a>';
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
