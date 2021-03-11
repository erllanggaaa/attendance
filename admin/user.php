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
<title>ATTENDANCE APP - ADMIN [DATA USER]</title>
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

<div id="page-title">
    <h2>Data User</h2>
<div class="panel">
<div class="panel-body">
    <div class="example-box-wrapper">
    <button class="btn btn-info btn-md" data-toggle="modal" data-target="#ModalAdd">
                        <i class="glyph-icon icon-plus"> Tambah Data</i>
                    </button>
                   
<table id="data" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Nama</th>
    <th>Email</th>
    <th>No Telepon</th>
    <th>Jenis Kelamin</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
    <?php
    include('include/koneksi.php');
        $user = mysqli_query ($konek, "SELECT * FROM tbl_admin");
            if($user == false){
                  die ("Terjadi Kesalahan : ". mysqli_error($konek));
                    }
                while ($hasil = mysqli_fetch_array ($user)){                            
                            ?>
                                <tr>
                                    <td><?=$hasil['nama'];?></td>
                                    <td><?=$hasil['email'];?></td>
                                    <td><?=$hasil['no_telp'];?></td>
                                    <td><?=$hasil['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan';?></td></td>
                                    <td><a href="#" class="open_modal" title="Ubah" id="<?=$hasil['id_admin'];?>"><i class="glyph-icon icon-edit" aria-hidden="true"></i></a> |
                                        <a href="Delete-User?id_admin=<?=$hasil['id_admin'];?>" title="Hapus" onclick="return confirm(\'Anda yakin akan menghapus <?=$hasil['nama'];?>?\')"><span class="glyph-icon icon-trash" aria-hidden="true"></span></a>
                    </td>
                                </tr>
                                <?php
                        }
                    ?>
</tbody>
</table>
</div>
</div>
</div>


        <!-- Modal Popup Tambah Jabatan -->
        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="glyph-icon icon-plus"> <strong>Tambah Data User</strong></i></h4>
                    </div>
                    <div class="modal-body">
                        <form action="Tambah-User" name="modal_popup" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyph-icon icon-user"></i>
                                        </div>
                                        <input name="id_admin" type="hidden" class="form-control" value="<?php echo $hasiluser["id_user"]; ?>" readonly />
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" required 
                                            oninvalid="this.setCustomValidity('Harus diisi !')"
                                            oninput="setCustomValidity('')"/>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="L">
                                    </span>
                                  <div class="form-control">Laki-Laki</div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="P">
                                    </span>
                                  <div class="form-control">Perempuan</div>
                                </div>
                            </div>
                            <div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-tty"></i>
										</div>
										<input name="no_telp" maxLength="13" type="text" class="form-control" placeholder="No Telpon" onkeypress="return hanyaAngka(event)" required/>
									</div>
							</div>
                            <div class="form-group">
								<label>Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-envelope"></i>
										</div>
										<input name="email" type="email" class="form-control" placeholder="Email" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-lock"></i>
										</div>
										<input name="password" minlength="6" type="password" class="form-control" placeholder="Password" required/>
									</div>
							</div>
                            <div class="form-group">
								<label>Foto</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-camera-retro"></i>
										</div>
										<input name="foto" type="file" class="form-control" required/>
									</div>
							</div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-default"  data-dismiss="modal" aria-hidden="true">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Popup Karyawan Edit -->
        <div id="ModalUbahUser" class="modal fade" tabindex="-1" role="dialog"></div>
        
        
        
    </div><!-- /.content-wrapper -->
   
    </div><!-- ./wrapper -->
    <!-- Library Scripts -->
    <?php include('include/script-tambahan.php');?>

<?php include('include/footer.php');?>