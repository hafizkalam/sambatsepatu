<?php

include "config.php";

$id  = $_GET['id'] ;
mysqli_query($koneksi,"delete from treatment where id_treatment = '$id' ") ;
header("location:admin_jenistreatment.php");
?>
