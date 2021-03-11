<?php
session_start();

if (!isset($_SESSION["email"])) {
	header("location: ././login?pesan=masuk-dulu");
	exit;
}

$id_admin=$_SESSION["id_admin"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
$foto=$_SESSION["foto"];
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
<title>ATTENDANCE APP - ADMIN</title>
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
   <span class="bs-badge"><strong>Anda login sebagai <?php echo $nama; ?> - Administrator</strong></span>
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

                    <div class="col-md-12">
        <div class="row mrg20B">
            <div class="col-md-12">
                <a href="././Data-Pegawai" title="Jumlah Pegawai" class="tile-box tile-box-shortcut btn-primary">
                
                    <span class="bs-badge badge-absolute"><?php
		include('include/koneksi.php');
        $query = mysqli_query($konek,"SELECT * FROM tbl_pegawai");
        $count = mysqli_num_rows($query);
        echo $count;
        ?>
        </span>
                    <div class="tile-header">
                        Total Pegawai
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-users"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Aktivitas Terakhir Absen Pegawai
                </h3>

                <?php
                include("include/koneksi.php");
                include("include/fungsi_tgl.php");
                $sql = mysqli_query($konek, "SELECT a.id_absen, a.nip, a.tanggal, a.jam, a.keterangan, b.nama_pegawai FROM tbl_absen a JOIN tbl_pegawai b ON a.nip=b.nip WHERE a.id_absen ORDER by a.id_absen DESC limit 10");
                if($sql == false){
                    die ("Terjadi Kesalahan : ". mysqli_error($konek));
                }
                while ($hasil = mysqli_fetch_array ($sql)){
                    ?>
                <div class="example-box-wrapper">
                    <div class="timeline-box timeline-box-left">
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-red">
                                    <i class="glyph-icon icon-user"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-info"><?=$hasil['nama_pegawai'];?></div> <span class="bs-label label-success"><?=$hasil['keterangan'];?></span>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            <?php echo tgl_indo($hasil['tanggal']); ?>, Jam <?=$hasil['jam'];?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</div>

        
<?php include('include/footer.php');?>