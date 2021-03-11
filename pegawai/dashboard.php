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
<title>ATTENDANCE APP - ABSEN</title>
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
    <h2>Absen Pegawai</h2>
<div class="panel">
<div class="panel-body">
    <div class="example-box-wrapper">
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="Absen" enctype="multipart/form-data" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" placeholder="NIP" name="nip" value="<?php echo $nip; ?>" readonly required >                  
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" value="<?php echo $nama_pegawai; ?>" readonly required >
                </div>
                <div class="form-group">
                                <label>Keterangan</label>
                                    <div class="input-group">
                                        <select name="keterangan" id="showhide" class="form-control" onfocus="doComboFocus(this)" required="">
                                            <option selected disabled="disabled" value="">--</option>
                                            <option value="Datang">Datang</option>
                                            <option value="Pulang">Pulang</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                        </select>
                                    </div>
                </div>
                <div style="display:none;" id="tanggal" class="form-group">
                  <label for="tanggal">Tanggal <small>(tahun/bulan/tahun)</small></label>
                  <input type="text" class="form-control" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                </div>
            <div style="display:none;" id="jam" class="form-group">
                  <label for="jam">Jam</label>
                  <input type="text" class="form-control" name="jam" value="<?php echo date('H:i:s'); ?>">
            </div>
            <div style="display:none;" id="catatan" class="form-group">
                  <label for="catatan">Catatan</label>
                  <textarea name="catatan" rows="3" class="form-control textarea-sm" placeholder="Catatan"></textarea>
            </div>
            <div style="display:none;" id="bukti" class="form-group">
                  <label for="bukti">Surat Bukti</label>
                  <input type="file" class="form-control" name="surat_bukti">
            </div>
</div>
<div class="modal-footer">
                                <button class="btn btn-primary" type="submit">
                                    Absen
                                </button>
                            </div>
            </form>
          </div>
        </div>

        <?php include('include/script-tambahan.php');?>
        <script language="JavaScript" type="text/JavaScript">
		$(document).ready(function(){
			$('#showhide').on('change', function() {
				if ( this.value == 'Datang')
				{
					$("#tanggal").show();
					$("#jam").show();
                    $("#catatan").hide();
                    $("#bukti").hide();
				}
				else if ( this.value == 'Pulang')
				{
					$("#tanggal").show();
					$("#jam").show();
                    $("#catatan").hide();
                    $("#bukti").hide();
				}
                else if ( this.value == 'Izin')
				{
					$("#tanggal").show();
					$("#jam").show();
                    $("#catatan").show();
                    $("#bukti").show();
				}
				else if ( this.value == 'Sakit')
				{
					$("#tanggal").show();
					$("#jam").show();
                    $("#catatan").show();
                    $("#bukti").show();
				}
				else
				{
					
				}
			});
		});
	</script>

        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">
              <script type='text/javascript'>
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
		</script>
              </h3>
              <h3 class="box-title">
                  <!-- Menampilkan Jam (Aktif) -->
	<div id="clock"></div>
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 24) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 24;
		    }
		    if (curr_hour > 24) {
		        curr_hour = curr_hour - 24;
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
		//-->
		</script>
              </h3>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
</div>
</div>
<script src="../aset/plugins/select2/select2.full.min.js"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();
        });
    </script>

<?php include('include/footer.php');?>