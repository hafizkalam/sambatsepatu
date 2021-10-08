<?php
session_start();
if(!isset($_SESSION['username'])){
	  header("location:login_page.php");
} 
$id_user=$_SESSION['id_user'];
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Cuci Sepatu Anda</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Jenis Sepatu</th>
					<th>Treatment Sepatu</th>
					<th>Tanggal Pesan</th>
					<th>Tanggal Selesai</th>
					<th>Jenis Pengambilan</th>
					<th>Total Bayar</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$cWhere = "where id_user='$id_user'" ; 
				$sql = mysqli_query($koneksi, "SELECT * FROM transaksi where transaksi.id_user = '$id_user' ") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['jenis_sepatu'].'</td>
							<td>'.$data['jenis_treatment'].'</td>
							<td>'.$data['tanggal_masuk'].'</td>
							<td>'.$data['tanggal_keluar'].'</td>
							<td>'.$data['sistem_pengambilan'].'</td>
							<td>'.$data['total_bayar'].'</td>
							<td>'.$data['status'].'</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
