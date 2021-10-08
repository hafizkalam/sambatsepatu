<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$alamat		= $_POST['alamat'];
			$no_telp	= $_POST['no_telp'];
			$username		= $_POST['username'];
			$password	= $_POST['password'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO user(nama, alamat, no_telp, username, password ) VALUES('$nama', '$alamat', '$no_telp', '$username', '$password')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="login_page.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, username sudah terdaftar.</div>';
			}
		}
		?>
