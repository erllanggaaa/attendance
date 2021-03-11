<?php
include "include/koneksi.php";
$foto=$_FILES['foto']['name'];
if(strlen($foto)>0){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
	move_uploaded_file($_FILES['foto']['tmp_name'],"images/".$foto);
	}
mysqli_query($konek,"update tbl_admin set foto='$foto' WHERE id_admin = '".$_POST['id_admin']."'");	
}
if ($edit = mysqli_query($konek, "UPDATE tbl_admin SET nama='".$_POST['nama']."', jenis_kelamin='".$_POST['jenis_kelamin']."', no_telp='".$_POST['no_telp']."', email='".$_POST['email']."', password='".md5($_POST["password"])."' WHERE id_admin = '".$_POST['id_admin']."'")){
		echo "<script> alert('Data Berhasil Diubah'); location.href='././Data-User' </script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>