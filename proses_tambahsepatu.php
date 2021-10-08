<?php include('config.php'); ?>

		<?php
		if(isset($_POST['submit'])){
			$jenis		= $_POST['jenis_sepatu'];
			$harga		= $_POST['harga_sepatu'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM sepatu WHERE jenis_sepatu='$jenis'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO sepatu(jenis_sepatu, harga_sepatu ) VALUES('$jenis', '$harga')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin_jenissepatu.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, Jenis Sepatu sudah terdaftar.</div>';
			}
		}
		?>
