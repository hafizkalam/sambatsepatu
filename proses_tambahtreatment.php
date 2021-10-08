<?php include('config.php'); 
?>

		<?php

		if(isset($_POST['submit'])){
            // echo "lkdsfjdklf" ;

			$jenis		= $_POST['jenis_treatment'];
			$harga		= $_POST['harga_treatment'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM treatment WHERE jenis_treatment='$jenis'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO treatment(jenis_treatment, harga_treatment ) VALUES('$jenis', '$harga')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin_jenistreatment.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, Jenis Treatment sudah terdaftar.</div>';
			}
		}
		?>
