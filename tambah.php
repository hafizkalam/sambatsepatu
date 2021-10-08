<?php 

	session_start();
	if(!isset($_SESSION['username'])){
  		header("location:login_page.php");
	} 

include('config.php'); 

?>

		<center><font size="6">Cuci Sepatu</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$total			= $_POST['total'];
			$jenis_sepatu		= explode(",",$_POST['jenis_sepatu']);
			$jenis_treatment = explode(",",$_POST['jenis_treatment']);
			$tanggal_masuk		= $_POST['tanggal_masuk'];
			$tanggal_keluar		= $_POST['tanggal_keluar'];
			$sistem_ambil		= $_POST['ambil'];
			$harga		= $_POST['harga'];
			$id_user = $_SESSION['id_user'] ;
			
			
				$sql = mysqli_query($koneksi, "INSERT INTO transaksi(
					total,id_user,jenis_sepatu,jenis_treatment, tanggal_masuk, tanggal_keluar, total_bayar, sistem_pengambilan) VALUES(
						'$total','$id_user','$jenis_sepatu[0]','$jenis_treatment[0]','$tanggal_masuk','$tanggal_keluar','$harga','$sistem_ambil')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			
		}

		$treatment = mysqli_query($koneksi, "SELECT * FROM treatment ") or die(mysqli_error($koneksi));
		$sepatu = mysqli_query($koneksi, "SELECT * FROM sepatu ") or die(mysqli_error($koneksi));

		?>

		<form action="index.php?page=tambah_sepatu" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Sepatu</label>
				<div class="col-md-6 col-sm-6 ">
				<input type="number" onChange ="select_harga()"value ="1"class="form-control" id="jumlah" name="total" min="1" max="10">
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Sepatu</label>
				<div class="col-md-6 col-sm-6 ">
				<select name="jenis_sepatu" id="sepatu" onChange = "select_harga()" class="form-control" required>
				<option value="">Pilih Jenis Sepatu</option>
						
				<?php
				while($ts = mysqli_fetch_assoc($sepatu)){?>
						<option value="<?php echo $ts['jenis_sepatu'].",".$ts['harga_sepatu'] ?>"><?php echo $ts['jenis_sepatu']." - Rp.". $ts['harga_sepatu']  ?></option>
						<?php 
					} ?>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Treatment</label>
				<div class="col-md-6 col-sm-6">
				<select name="jenis_treatment" id="treatment" onChange="select_harga()" class="form-control" required>
				<option value="">Pilih Treatment</option>
						
				<?php
				while($ts = mysqli_fetch_assoc($treatment)){
					$vaHarga[$ts['jenis_treatment']] = $ts['harga_treatment'];
					?>
						
						<option value="<?php echo $ts['jenis_treatment'].",".$ts['harga_treatment'] ?>"><?php echo $ts['jenis_treatment']." - Rp.". $ts['harga_treatment'] ?></option>
						<?php 
					} ?>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pengambilan</label>
				<div class="col-md-6 col-sm-6 ">
				<input type="date" class="form-control" value="<?php echo date('Y-m-d')?>"id="pengambilan" name="tanggal_masuk" min="1" max="10">
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pengembalian</label>
				<div class="col-md-6 col-sm-6 ">
				<input type="date" class="form-control" value="<?php echo date('Y-m-d')?>" id="pengembalian" name="tanggal_keluar" min="1" max="10">
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Penjemputan Dan Pengambilan</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="ambil" value="COD" required>COD
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="ambil" value="Pickup" required>Pickup
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Total Harga</label>
				<div class="col-md-6 col-sm-6 ">
				<input readonly type="text"  class="form-control" id="harga" name="harga">
				</div>
			</div>
			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
<script>
function select_harga(){
	var id_treatment=document.getElementById('treatment');
	var id_sepatu=document.getElementById('sepatu');
	var id_harga=document.getElementById('harga');
	var jumlah=document.getElementById('jumlah');
	var hargaTreament  = id_treatment.value.split(",");
	var hargaSepatu  = id_sepatu.value.split(",");
	id_harga.value = (parseInt(hargaTreament[1]) + parseInt(hargaSepatu[1])) * parseInt(jumlah.value);
}
</script>