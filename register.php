<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
</head>
<body>
<h1>Register Baru</h1>
<div class="login">
	<p class="log">Silahkan Lengkapi Data Anda</p>

<form action="submit_register.php" method="post">
	<label>Username*</label>
	<input class="log" type="text" name="username" placeholder="Username...">
	<label>Password*</label>
	<input class="log" type="password" name="password" placeholder="Password...">

	<input class="tombol" type="submit" value="register">
</form>
</div>
</body>
</html>