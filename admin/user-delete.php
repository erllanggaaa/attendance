<?php

include "include/koneksi.php";

if($delete = mysqli_query ($konek, "DELETE from tbl_admin WHERE id_admin = '".$_GET['admin']."'")){
    echo "<script> alert('Data Berhasil Dihapus'); location.href='././Data-User' </script>";
    exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>