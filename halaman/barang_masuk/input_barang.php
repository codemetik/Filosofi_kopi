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
  width: 150px;
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
include "../../koneksi.php";
$cari_kd=mysqli_query($koneksi, "SELECT max(id_transaksi)as kode from tb_transaksi");
$tm_cari=mysqli_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'], 1,3);
$tambah=$kode+1;
if ($tambah<10) {
		$id="T00".$tambah;
	}else{
		$id="T0".$tambah;
	}
?>
<div class="input">
<form action="proses_masuk.php" method="post" enctype="multipart/form-data">
	<table id="customers">
		<tr>
			<th>ID Transaksi</th>
			<td>
				<input type="text" name="id" value="<?php echo $id; ?>" readonly>
			</td>
		</tr>
		<tr>
			<th>Tanggal</th>
			<td>
				<input type="text" name="tanggal" value="<?php echo "". date("Y-m-d"); ?>">
			</td>
		</tr>
		<tr>
			<th>ID Barang</th>
			<td>
				<select name="id_barang" onchange='changeValue(this.value)' required>
					<option value="">-Pilih-</option>
 <?php 
 $query=mysqli_query($koneksi, "SELECT  * FROM barang order by id_barang asc"); 
 $result = mysqli_query($koneksi, "SELECT * FROM barang");  
 $jsArray = "var prdName = new Array();\n";
 while ($row = mysqli_fetch_array($result)) {  
 echo '<option name="id_barang"  value="' . $row['id_barang'] . '">' . $row['id_barang'] . '</option>';  
 $jsArray .= "prdName['" . $row['id_barang'] . "'] = {nama:'" . addslashes($row['nama'])."', stok:'" . addslashes($row['stok'])."', harga:'" . addslashes($row['harga'])."'};\n";
  }
  ?>
				</select>
			</td>
		</tr>
		<tr><th>Nama Barang</th>
			<td><input type="text" name="nama" id="nama" readonly></td>
			<td><input type="text" name="stok" id="stok" readonly></td>
			<td><input type="text" name="harga" id="harga" readonly></td>
		</tr>
		<tr>
			<th>Barang Masuk</th>
			<td><input type="text" name="masuk" id="masuk" onchange="total()"></td>
			<td><input type="text" name="hasil" id="hasil" readonly></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="simpan"></td></tr>
	</table>
	
</form>
</div>
</body>
</html>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('nama').value = prdName[id].nama;
    document.getElementById('stok').value = prdName[id].stok;
    document.getElementById('harga').value = prdName[id].harga;
};

function total() {
	var harga_barang = parseInt(document.getElementById('masuk').value) * parseInt(document.getElementById('harga').value);
	var total_harga = harga_barang;
	document.getElementById('hasil').value = total_harga;
}
</script>