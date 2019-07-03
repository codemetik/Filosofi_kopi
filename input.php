<!DOCTYPE html>
<html>
<head>
	<title>Input Barang</title>
	<link rel="stylesheet" type="text/css" href="css/styleTable.css">
	<style type="text/css">
.input{
	width: 650px;
	background: #7FFFD4;
	/*meletakan form ke tengah*/
	margin: 100px auto;
	padding: 30px 20px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  max-width: 100%;
  background-color: #FF0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #E67E22;
}
	</style>
	<script type="text/javascript">
		var loadFile = function(event){
			var output = document.getElementById('output');
			output.src=URL.createObjectURL(event.target.files[0]);
		}
	</script>
</head>
<body>
<?php
include "koneksi.php";
$cari_kd=mysqli_query($koneksi, "SELECT max(id_barang)as kode from barang");
$tm_cari=mysqli_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'], 1,4);
$tambah=$kode+1;
if ($tambah<10) {
		$id="K000".$tambah;
	}else{
		$id="K00".$tambah;
	}
?>
<div class="input">
<form action="proses.php" method="post" enctype="multipart/form-data">
	<table id="customers">
		<tr>
			<th>Id</th>
			<td>
				<input type="text" name="id" value="<?php echo $id; ?>" readonly>
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<th>Jenis</th>
			<td>
				<input type="text" name="jenis">
			</td>
		</tr>
		<tr>
			<th>Stok</th>
			<td>
				<input type="text" name="stok">
			</td>
		</tr>
		<tr>
			<th>Harga</th>
			<td>
				<input type="text" name="harga">
			</td>
		</tr>
			<th>Gambar</th>
			<td>
				<img id="output" height="190" width="200">
				<input type="file" accept="images/*" onchange="loadFile(event)" name="gambar" id="gambar" required>
			</td>
		</tr>
		<tr><td></td><td><input type="submit" name="simpan"></td></tr>
	</table>
	
</form>
</div>
</body>
</html>