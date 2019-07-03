<form action="proses_edit.php" method="post" enctype="multipart/form-data">
	<?php 
		include "koneksi.php";
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$_GET[id]'");
		$data = mysqli_fetch_array($query);
	?>
	<table id="customers">
		<tr>
			<th>Id</th>
			<td>
				<input type="text" name="id" value="<?php echo $data['id_barang'] ?>" readonly>
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<td>
				<input type="text" name="name" value="<?php echo $data['nama'] ?>">
			</td>
		</tr>
		<tr>
			<th>Jenis</th>
			<td>
				<input type="text" name="jenis" value="<?php echo $data['jenis'] ?>">
			</td>
		</tr>
		<tr>
			<th>Stok</th>
			<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
		</tr>
		<tr>
			<th>Harga</th>
			<td>
				<input type="text" name="harga" value="<?php echo $data['harga'] ?>">
			</td>
		</tr>
			<th>Gambar</th>
			<td>
				<?php echo "<img src='images/".$data['gambar']."' width='100' height='100'>" ?>
				<input type="checkbox" name="ubah_gambar" value="true">
				<input type="file" name="gambar">
			</td>
		</tr>
		<tr><td></td>
			<td>
				<input type="submit" name="update" value="Update">
			</td>
		</tr>
	</table>
</form>