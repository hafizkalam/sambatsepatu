<?php

include "config.php";

$jenis_sepatu = $_POST['jenis_sepatu'];
$harga_sepatu = $_POST['harga_sepatu'];
$id  = $_POST['id'] ;
mysqli_query($koneksi,"update sepatu set jenis_sepatu = '$jenis_sepatu', harga_sepatu = '$harga_sepatu' where id_sepatu = '$id' ") ;
header("location:admin_jenissepatu.php");
?>
