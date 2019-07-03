<!DOCTYPE html>
<html>
<head>
	<title>Penjualan kopi</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
</head>
<body>
<h1>Selamat Datang di Cafe Mix Coffee</h1>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
<div class="login">
	<p class="log">Silahkan Login</p>

<form action="submit_login.php" method="post">
	<label>Username</label>
	<input class="log" type="text" name="username" placeholder="Username...">
	<label>Password</label>
	<input class="log" type="password" name="password" placeholder="Password...">

	<input class="tombol" type="submit" value="login">
	<center class="cent">
		<a href="register.php" class="link">Register</a>
	</center>
</form>
</div>
</body>
</html>