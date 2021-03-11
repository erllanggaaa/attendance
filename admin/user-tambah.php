<?php
include "include/koneksi.php";
$foto=$_FILES['foto']['name'];
if(strlen($foto)>0){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
	move_uploaded_file($_FILES['foto']
	['tmp_name'],"images/".$foto);
    }
}
if ($add = mysqli_query($konek, "INSERT INTO tbl_admin(id_admin, nama, email, password, no_telp, jenis_kelamin, foto) VALUES ('','".$_POST["nama"]."','".$_POST["email"]."', '".md5($_POST["password"])."', '".$_POST["no_telp"]."', '".$_POST["jenis_kelamin"]."', '$foto')")){
		echo "<script> alert('Data Berhasil Disimpan'); location.href='././Data-User' </script>";
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
?>