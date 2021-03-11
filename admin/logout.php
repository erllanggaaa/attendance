<?php
session_start();

$_SESSION['id_admin']='';
$_SESSION['nama']='';
$_SESSION['email']='';
$_SESSION['foto']='';

unset($_SESSION['id_admin']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['foto']);

session_unset();
session_destroy();
header ("Location: ././login?pesan=logout");

?>