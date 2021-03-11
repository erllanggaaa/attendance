<?php
session_start();

if (!isset($_SESSION["email"])) {
	header("location: ././login?pesan=masuk-dulu");
	exit;
}

$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
$foto=$_SESSION["foto"];

include "include/koneksi.php";
include "include/fungsi.php";
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
<title>ATTENDANCE APP - ADMIN [REKAP ABSEN]</title>
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

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">

<div id="page-title">
    <h2>Rekap Absen</h2>
<div class="panel">
<div class="panel-body">
    <div class="example-box-wrapper">

         <!-- Main content -->
         <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="Cetak-Rekap-Absen" target="_blank" method="POST" name="formrekap">
                    <div class="row">
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-3">
                            <div class="input-group">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-search"></i>
                                        </div>
                                        <input id="tglawal" name="tglawal" type="text" class="form-control" value="" style="width: 100%;" placeholder="Tanggal Awal">
                                    </div>
                            </div>
                        <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-3">
                            <div class="input-group">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <label>s/d</label>
                                        </div>
                                        <input id="tglakhir" name="tglakhir" type="text" class="form-control" value="" style="width: 100%;" placeholder="Tanggal Akhir">
                                    </div>
                            </div>
                        <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                  <br>
                  <div class="laporanrekap">
                        <?php
                            include "laporan-rekap-absen.php";
                        ?>
                  </div>
                <br>
                    <a href="go"><button class="btn btn-info" type="submit">Cetak</button></a>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div>
        
    </div><!-- /.content-wrapper -->
   
    </div><!-- ./wrapper -->
    <!-- Library Scripts -->
    <?php include('include/script-tambahan.php');?>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();
        });
    </script>
<script language="JavaScript" type="text/JavaScript">
$(document).ready(function(){
    $('#tglakhir').on('change', function() {
      var a=document.formrekap.tglawal.value;
      var b=document.formrekap.tglakhir.value;
        $.ajax({
            url: "laporan-rekap-absen.php",
            type: "POST",
            data : {tgl1: a, tgl2: b,},
            success: function (ajaxData){
                $(".laporanrekap").html(ajaxData);
            }
        });
    });
}); 
</script>
    <script>
        $(document).ready(function(){
    $('#data').DataTable();
});
    </script>
<?php include('include/footer.php');?>