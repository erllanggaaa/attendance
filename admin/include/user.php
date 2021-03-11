<?php
session_start();
require_once('koneksi.php');
$email = mysqli_real_escape_string($konek, $_POST['email']);
$password = mysqli_real_escape_string($konek, $_POST['password']);
$password = md5($_POST['password']);
$result = mysqli_query($konek,"select * from tbl_admin where email='".$email."' and password='".$password."'");
$getUser = mysqli_num_rows($result);


if ($getUser > 0) {
	$getDataUser = mysqli_fetch_assoc($result);
		$_SESSION['id_admin']=$getDataUser['id_admin'];
		$_SESSION['nama']=$getDataUser['nama'];
		$_SESSION['email']=$getDataUser['email'];
		$_SESSION['foto']=$getDataUser['foto'];
		header('location: ../dashboard');
        exit();
}
else
{
		header('location: ../login?pesan=gagal');
}

?>