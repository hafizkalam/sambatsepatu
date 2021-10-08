<?php

include "config.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$username = $_POST['username'];
$id  = $_POST['id'] ;
mysqli_query($koneksi,"update user set nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', username = '$username' where id_user = '$id' ") ;
header("location:admin_manageuser.php");
?>
