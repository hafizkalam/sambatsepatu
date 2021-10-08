<html>
<head>
<!-- Bootstrap -->
<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
    <!-- Local Theme Style -->
    <link href="assets/css/akademik.css" rel="stylesheet">
</head>

<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Selamat Datang Di Sambat Cleaning Shoes</h3>
		<div class="card-text">
			<form action="proses_daftar.php" method="post">
                <div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" class="form-control form-control-sm" name="nama" id="nama" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control form-control-sm" name="alamat" id="alamat" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">No Telepon</label>
					<input type="text" class="form-control form-control-sm" name="no_telp" id="no_telp" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" class="form-control form-control-sm" name="username" id="username" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control form-control-sm" name="password" id="password">
				</div>
				
				<button type="submit" name="submit" value="login" class="btn btn-primary btn-block">Daftar</button>
				
				<div class="sign-up">
					Sudah Punya Akun? <a href="login_page.php">Login</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>


</html>

