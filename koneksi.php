<?php 
$koneksi = mysqli_connect("localhost","root","","filosofi_kopi");
/*$koneksi = mysqli_connect("localhost","id9897691_juliagustusmei","juliagustus","id9897691_julinur");*/ 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>