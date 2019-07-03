
<a href="input.php">Tambah Data</a>
<br>
<br>
<table id="customers">
	<tr>
		<th>Id</th>
		<th>Nama </th>
		<th>Jenis</th>
		<th>Harga</th>
		<th>Gambar</th>
	</tr>
		<?php 
		include "koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * FROM barang")or die(mysqli_error());
		while($data = mysqli_fetch_array($query)){
		?>
	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['jenis']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo "<img src='images/".$data['gambar']."' width='100' height='100'>" ?></td>
	</tr>
<?php } ?>
</table>