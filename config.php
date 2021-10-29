<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("10.0.0.194","admin","Admin.123","sambatweb");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
