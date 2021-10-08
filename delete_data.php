<?php

include "config.php";

$id  = $_GET['id'] ;
mysqli_query($koneksi,"delete from sepatu where id_sepatu = '$id' ") ;
header("location:admin_jenissepatu.php");
?>
