<?php

include "include/koneksi.php";

if($delete = mysqli_query ($konek, "DELETE from tbl_pegawai WHERE nip = '".$_GET['nip']."'")){
    echo "<script> alert('Data Berhasil Dihapus'); location.href='././Data-Pegawai' </script>";
    exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>