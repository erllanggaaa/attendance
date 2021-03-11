<?php
session_start();
include "include/koneksi.php";

$foto=$_FILES['foto']['name'];
if(strlen($foto)>0){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
	move_uploaded_file($_FILES['foto']
	['tmp_name'],"images/pegawai/".$foto);
    }
}
if ($add = mysqli_query($konek, "INSERT INTO tbl_pegawai(nip, nama_pegawai, id_jabatan, tgl_lahir, jenis_kelamin, agama, alamat, no_telp, email, password, foto, aktif, id_admin) VALUES ('".$_POST["nip"]."','".$_POST["nama_pegawai"]."','".$_POST["id_jabatan"]."','".$_POST["tgl_lahir"]."','".$_POST["jenis_kelamin"]."','".$_POST["agama"]."','".$_POST["alamat"]."','".$_POST["no_telp"]."','".$_POST["email"]."','".md5($_POST["password"])."','$foto','Y','".$_SESSION["id_admin"]."')")){
		echo "<script> alert('Data Berhasil Disimpan'); location.href='././Data-Pegawai' </script>";
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
?>