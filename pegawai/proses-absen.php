<?php
session_start();
include "include/koneksi.php";

$surat_bukti=$_FILES['surat_bukti']['name'];
if(strlen($surat_bukti)>0){
	if(is_uploaded_file($_FILES['surat_bukti']['tmp_name'])){
	move_uploaded_file($_FILES['surat_bukti']
	['tmp_name'],"images/".$surat_bukti);
    }
}
if ($add = mysqli_query($konek, "INSERT INTO tbl_absen(nip, tanggal, jam, keterangan, catatan, surat_bukti) VALUES ('".$_SESSION["nip"]."','".$_POST["tanggal"]."','".$_POST["jam"]."','".$_POST["keterangan"]."','".$_POST["catatan"]."','$surat_bukti')")){
		echo "<script> alert('Absen Berhasil'); location.href='././dashboard' </script>";
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
?>