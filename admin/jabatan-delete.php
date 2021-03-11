<?php

include "include/koneksi.php";

if($delete = mysqli_query ($konek, "DELETE from tbl_jabatan WHERE id_jabatan = '".$_GET['nipid_jabatan']."'")){
    echo "<script> alert('Data Berhasil Dihapus'); location.href='././Data-Jabatan' </script>";
    exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>