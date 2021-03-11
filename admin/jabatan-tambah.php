<?php
include "include/koneksi.php";

if ($add = mysqli_query($konek, "INSERT INTO tbl_jabatan(id_jabatan, nama_jabatan) VALUES ('','".$_POST["nama_jabatan"]."')")){
		echo "<script> alert('Data Berhasil Disimpan'); location.href='././Data-Jabatan' </script>";
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
?>