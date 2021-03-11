<?php
session_start();

$_SESSION['nip']='';
$_SESSION['id_jabatan']='';
$_SESSION['nama_pegawai']='';
$_SESSION['email']='';

unset($_SESSION['nip']);
unset($_SESSION['id_jabatan']);
unset($_SESSION['nama_pegawai']);
unset($_SESSION['email']);

session_unset();
session_destroy();
header ("Location: ././login?pesan=logout");

?>