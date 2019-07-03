<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dasboard</title>
	<link rel="stylesheet" type="text/css" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/styleTable.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<style type="text/css">
		.table{
			margin-left: 20px;
			border-collapse: collapse;
		}
		table.table th th, table.table ttr td{
			padding: 10px 20px;
		}
		.judul{
			max-width: 350%;
			background: #E0FFFF;
			margin-top: 10px;
			margin-left: 100px;
			margin-right: 100px;
			margin-bottom: 10px;
			border: 1px solid black;
  			border-radius: 10px;
		}
		h1{
			text-align: center;
			font-size:63px;
			margin: 2px;
		}
		.total_atas{
			width: 250px;
  			background-color: red;
  			color: white;
  			border: none;
  			border-radius: 4px;
  			float: right;
		}
	</style>
</head>
<body>
<nav class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
<p class="profile-top">Selamat Datang <?php
 echo "<b>".$_SESSION['username']."</b>"; ?></p>	
</nav>

<div class="sidenav" id="sideNavigation">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="dasboard_admin.php?page=home"> Dasboard</a>
		<a href="dasboard_admin.php?page=dataBarang"> Data Barang</a>
		<a href="dasboard_admin.php?page=pembelian"> Data Pembelian</a>
		<a href="dasboard_admin.php?page=penjualan"> Data Penjualan</a>
		<a href="dasboard_admin.php?page=laporanPem"> Lap Barang Masuk</a>
		<a href="dasboard_admin.php?page=laporanPen"> Lap Barang Keluar</a>
	
	<hr>
	<a href="logout.php">Logout</a>
</div>

<!--container-->
<div id="container">
	<div class="judul">
<center><h1>Filosofi Kopi</h1></center>
</div>
<hr style="width: 80%; float: center">
<?php 
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	switch ($page) {
		case 'home':
			include "halaman/data_barang.php";
			break;
		case 'dataBarang':
			include "halaman/data_barang.php";
			break;
		case 'update':
			include "edit.php";
			break;
		case 'delete':
			include "proses_delete.php";
			break;
		case 'pembelian':
			include "halaman/data_pembelian.php";
			break;
		case 'penjualan':
			include "halaman/data_penjualan.php";
			break;
		case 'laporanPem':
			include "halaman/laporanA.php";
			break;
		case 'laporanPen':
			include "halaman/laporanB.php";
			break;
		default:
			echo "<center><h1>Halaman tidak ada</h1</center>";
			break;
	}

}else{
		include "halaman/data_barang.php";
}
?>
</div>
<!--//container-->
<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("container").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("container").style.marginLeft = "0";
}
</script>
</body>
</html>