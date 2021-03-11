<?php
session_start();

if (!isset($_SESSION["email"])) {
	header("location: ././login?pesan=masuk-dulu");
	exit;
}

$nip=$_SESSION["nip"];
$id_jabatan=$_SESSION["id_jabatan"];
$nama_pegawai=$_SESSION["nama_pegawai"];
$email=$_SESSION["email"];

include "include/koneksi.php";
include "include/fungsi_tgl.php";
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html> 
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>ATTENDANCE APP - DETAIL ABSEN</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" href="../favicon.ico">

<?php include('include/css.php');?>
<?php include('include/script.php');?>


</head>


    <body>
    
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="././dashboard" class="logo-content-small" title="Attendance App"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="././dashboard" class="logo-content-big" title="Attendance App">
            Attendance <i>App</i>
        </a>
        <a href="././dashboard" class="logo-content-small" title="Attendance App">
            Attendance <i>App</i>
        </a>
    </div>
    
    
    <div id="header-nav-left">
    <div class="user-account-btn dropdown">
   <span class="bs-badge"><strong>Anda login sebagai <?php echo $nama_pegawai; ?></strong></span>
    </div>
    </div>


    <div id="header-nav-right">
       
        
        <div class="dropdown">
            <a href="././logout" data-placement="bottom" class="popover-button-header tooltip-button" title="Logout">
                <i class="glyph-icon icon-power-off"></i>
            </a>
            
               
        </div>
    </div><!-- #header-nav-right -->

</div>
        <div id="page-sidebar">
    <div class="scroll-sidebar">
        

<?php
include('include/menu.php');
?>


    </div>
</div>


<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<!-- Sparklines charts -->

<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<!-- Flot charts -->

<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot-resize.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot-stack.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot-pie.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot-tooltip.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/flot/flot-demo-1.js"></script>

<!-- PieGage charts -->

<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="../demo/monarch/assets/widgets/charts/piegage/piegage-demo.js"></script>

<div id="page-title">
    <h2>Detail Absen</h2>
<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
	<div class="example-box-wrapper">
        <a href="././Histori-Absen">
    <button class="btn btn-info btn-md">
                        <i class="glyph-icon icon-backward"> Kembali</i>
                    </button></a>
                   
</h3>
<div class="example-box-wrapper">
<table class="table">
    <?php
    $id_absen=$_GET['id_absen'];
					$sql = mysqli_query($konek, "SELECT * FROM tbl_absen where id_absen='$id_absen'"); // jika tidak ada filter maka tampilkan semua entri
					$hasil_data = mysqli_fetch_assoc($sql);// fetch query yang sesuai ke dalam array
                    ?><thead>
                            <tr>
                            <th><img src="././images/<?=$hasil_data['surat_bukti'];?>" alt="Surat Bukti" title="Surat Bukti" width="215" height="140"></center></th>
                            <tr>
							<tr>
                                <th>NIP</th>
								<th>:&emsp;<?=$hasil_data['nip'];?></th>
                            <tr>
                            <tr>
                                <th>Nama</th>
                                <th>:&emsp;<?php echo $nama_pegawai;?></th>
                            <tr>
                            <tr>
                                <th>Waktu</th>
                                <th>:&emsp;<?php echo tgl_indo($hasil_data['tanggal']); ?>, Jam <?=$hasil_data['jam'];?></th>
                            <tr>
                            <tr>
                                <th>Keterangan</th>
                                <th>:&emsp;<?=$hasil_data['keterangan'];?></th>
                            <tr>
                            <tr>
                                <th>Catatan</th>
                                <th>:&emsp;<?=$hasil_data['catatan'];?></th>
                            <tr>
                            </thead>
</table>
</div>
</div>
</div>
* Keterangan <b>Datang</b> & <b>Pulang</b> Tidak memakai Catatan dan Surat Bukti *<br>
* Hanya Keterangan <b>Izin</b> & <b>Sakit</b> Yang memakai Catatan dan Surat Bukti*

</div><!-- /.content-wrapper -->
   
    </div><!-- ./wrapper -->
    <!-- Library Scripts -->
    <?php include('include/script-tambahan.php');?>
    <!-- Bootstrap Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="../demo/monarch/assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="../demo/monarch/assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'yyyy-mm-dd'
        });
    });

</script>

<?php include('include/footer.php');?>