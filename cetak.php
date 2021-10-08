<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:login_page.php");
}
include('config.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sambat Cleaning Shoes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

    <!-- SEARCH FORM -->
    


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->

    <!-- Main content -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Transaksi</h3>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>No Telp</th>
                  <th>Sistem Pengamilan</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Jenis Sepatu</th>
                  <th>Jenis Treatment</th>
                  <th>Sistem Pengambilan</th>
                  <th>Total Bayar</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT transaksi.*,user.nama, user.no_telp FROM transaksi left join user on user.id_user = transaksi.id_user ") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						$button = ($data['status']) ? "<button type='button' class='btn btn-success'><i class='fas fa-check'></i></button>" : "<a type='button' href='edit_status.php?id=".$data['id_transaksi']."' class='btn btn-danger'><i class='fas fa-times'></i></a>" ;
            echo '
						<tr>
							<td>'.$no.'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['no_telp'].'</td>              
              <td>'.$data['sistem_pengambilan'].'</td>
              <td>'.$data['tanggal_masuk'].'</td>
              <td>'.$data['tanggal_keluar'].'</td>
							<td>'.$data['jenis_sepatu'].'</td>
              <td>'.$data['jenis_treatment'].'</td>
							<td>'.$data['sistem_pengambilan'].'</td>
							<td>'.$data['total_bayar'].'</td>
							<td>'.$button.'</td>
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
                </tfoot>
              </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
</div>
      <!-- /.card -->

    <!-- /.content -->

  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
		window.print();
	</script>
</body>
</html>
