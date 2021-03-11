<?php
include "include/koneksi.php";
$foto=$_FILES['foto']['name'];
if(strlen($foto)>0){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
	move_uploaded_file($_FILES['foto']['tmp_name'],"images/pegawai/".$foto);
	}
mysqli_query($konek,"update tbl_pegawai set foto='$foto' WHERE nip = '".$_POST['nip']."'");	
}
if ($edit = mysqli_query($konek, "UPDATE tbl_pegawai SET nama_pegawai='".$_POST['nama_pegawai']."', id_jabatan='".$_POST['id_jabatan']."', tgl_lahir='".$_POST['tgl_lahir']."', jenis_kelamin='".$_POST['jenis_kelamin']."', agama='".$_POST['agama']."', alamat='".$_POST['alamat']."', no_telp='".$_POST['no_telp']."', email='".$_POST['email']."', password='".md5($_POST["password"])."', aktif='".$_POST['aktif']."' WHERE nip = '".$_POST['nip']."'")){
		echo "<script> alert('Data Berhasil Diubah'); location.href='././Data-Pegawai' </script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>