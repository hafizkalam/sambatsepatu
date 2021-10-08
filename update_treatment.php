<?php

include "config.php";

$jenis_treatment = $_POST['jenis_treatment'];
$harga_treatment = $_POST['harga_treatment'];
$id  = $_POST['id'] ;
mysqli_query($koneksi,"update treatment set jenis_treatment  = '$jenis_treatment', harga_treatment = '$harga_treatment' where id_treatment = '$id' ") ;
header("location:admin_jenistreatment.php");
?>
