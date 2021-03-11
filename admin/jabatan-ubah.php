<?php
include "include/koneksi.php";

if ($edit = mysqli_query($konek, "UPDATE tbl_jabatan SET nama_jabatan='".$_POST['nama_jabatan']."' WHERE id_jabatan = '".$_POST['id_jabatan']."'")){
		echo "<script> alert('Data Berhasil Diubah'); location.href='././Data-Jabatan' </script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>