<?php
session_start();
require_once('koneksi.php');
$email = mysqli_real_escape_string($konek, $_POST['email']);
$password = mysqli_real_escape_string($konek, $_POST['password']);
$password = md5($_POST['password']);
$result = mysqli_query($konek,"select * from tbl_pegawai where email='".$email."' and password='".$password."'");
$getUser = mysqli_num_rows($result);


if ($getUser > 0) {
	$getDataUser = mysqli_fetch_assoc($result);
		$_SESSION['nip']=$getDataUser['nip'];
		$_SESSION['id_jabatan']=$getDataUser['id_jabatan'];
		$_SESSION['nama_pegawai']=$getDataUser['nama_pegawai'];
		$_SESSION['email']=$getDataUser['email'];
		header('location: ../dashboard');
        exit();
}
else
{
		header('location: ../login?pesan=gagal');
}

?>