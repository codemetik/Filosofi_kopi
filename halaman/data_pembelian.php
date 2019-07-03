<div class="data_barang">
	<a href="halaman/barang_masuk/input_barang.php"><input type="submit" value="Barang Masuk"></a>
<br>
<br>
	<div style="overflow-x:auto;">
<table id="customers">
	<tr>
		<th style="width: 30px;">ID transaksi</th>
		<th style="width: 250px;">Tanggal</th>
		<th style="width: 100px;">ID barang</th>
		<th style="width: 100px;">Nama Barang</th>
		<th style="width: 200px;">Barang Masuk</th>
		<th style="width: 200px;">Total Harga</th>
		<th style="width: 100px;">Opsi</th>
	</tr>
	<?php 
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT Z.id_transaksi, tanggal, Y.id_barang, nama_barang, brg_masuk, harga * brg_masuk AS Total
FROM barang Y
JOIN tb_harga X ON Y.id_barang = X.id_barang
JOIN tb_transaksi Z ON Y.id_barang = Z.id_barang")or die(mysqli_error());
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $data['id_transaksi']; ?></td>
		<td><?php echo $data['tanggal']; ?></td>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['brg_masuk']; ?></td>
		<td><?php echo $data['Total']; ?></td>
		<td class="pilih">
		<?php echo "<a href='halaman/barang_masuk/delete_masuk.php?id_transaksi=".$data['id_transaksi']."'>
			<input type='submit' name='hapus' value='Hapus'></a>"?>
		</td>
	</tr>
<?php } ?>
</table>
	</div>
</div>