<?php 

include "../../koneksi.php";

$id = $_GET['id_transaksi'];
$query2 = "DELETE FROM tb_transaksi WHERE id_transaksi='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);
if ($sql2) {
	header("location:../../dasboard_admin.php?page=pembelian");
}else{
	echo "Data gagal di Hapus <a href='dasboard_admin.php?page=dataBarang'>Kembali</a>";
}
?>