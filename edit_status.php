<?php

include "config.php";

$id  = $_GET['id'] ;
mysqli_query($koneksi,"update transaksi set status = 1 where id_transaksi = '$id' ") ;
header("location:admin_transaksi.php");
?>
