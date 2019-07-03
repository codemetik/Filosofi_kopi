<?php 

include "koneksi.php";

if (isset($_POST['simpan'])) {

$id = $_POST['id'];
$nm = $_POST['name'];
$jns = $_POST['jenis'];
$stk = $_POST['stok'];
$hrg = $_POST['harga'];
$gbr = $_FILES['gambar']['name'];

$query = "INSERT INTO barang(id_barang, nama, jenis, stok, harga, gambar) VALUES('$id','$nm','$jns', $stk,'$hrg','$gbr')";
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gbr);
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Data berhasil di upload !'); history.go(-1);</script>";
	header("location:dasboard_admin.php?page=home");
}else{
	echo "<script>alert('Data gagal di upload !'); history.go(-1);</script>";
}

}
?>