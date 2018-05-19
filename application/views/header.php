<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APOTIK KWB</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?=base_url()?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet" />
        <!-- datatables min css-->
    <link href="<?=base_url()?>assets/DataTables/datatables.min.css" rel="stylesheet" />
      
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background:#189c78; padding:20px 2px;" href="">ADMINISTRATOR</a> 
            </div>  <!-- /.navbar-header  -->

<!-- logut div  -->
<div style="color: white;
padding: 15px 10px 1px 10px;
float: right;
font-size: 16px;">  
<a href="<?=base_url()?>index.php/login/logout" class="btn btn-warning square-btn-adjust">Logout</a>
</div>
<!-- div  clock-->
<div style="color: white;
padding: 20px 20px 0px;
float: right;
font-size: 16px;">
<b><div id="clock"></div></b>
</div>
<!-- div date -->
 <div style="color: white;
padding: 20px 20px 0px 0px;
float: right;
font-style:italic;
font-family:sans-serif;
font-size: 16px;">
         <b><script type='text/javascript'>
                    <!--
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //-->
                    function showTime() {
                    var a_p = "";
                    var today = new Date();
                    var curr_hour = today.getHours();
                    var curr_minute = today.getMinutes();
                    var curr_second = today.getSeconds();
                    if (curr_hour < 12) {
                    a_p = "AM";
                    } else {
                    a_p = "PM";
                    }
                    if (curr_hour == 0) {
                    curr_hour = 12;
                    }
                    if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                    }
                    curr_hour = checkTime(curr_hour);
                    curr_minute = checkTime(curr_minute);
                    curr_second = checkTime(curr_second);
                    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                    }
                    function checkTime(i) {
                    if (i < 10) {
                    i = "0" + i;
                    }
                    return i;
                    }
                    setInterval(showTime, 500);
                    //
                    </script>
                    </b>
    </div>    

    </nav> <!-- navbar-default navbar-cls-top  -->