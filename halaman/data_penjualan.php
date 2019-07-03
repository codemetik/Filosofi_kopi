<div class="data_barang">
	<a href="halaman/barang_keluar/input_barang_jual.php"><input type="submit" value="Barang Keluar"></a>
<br>
<br>
	<div style="overflow-x:auto;">
<table id="customers">
	<tr>
		<th style="width: 30px;">ID Jual</th>
		<th style="width: 250px;">Tanggal</th>
		<th style="width: 100px;">ID barang</th>
		<th style="width: 100px;">Nama Barang</th>
		<th style="width: 200px;">Barang Keluar</th>
		<th style="width: 200px;">Total Harga</th>
		<th style="width: 100px;">Opsi</th>
	</tr>
	<?php 
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT Z.id_jual, tanggal, Y.id_barang, nama_barang, brg_keluar,(harga + harga_jual) * brg_keluar AS Total
FROM barang Y
JOIN tb_harga X ON Y.id_barang = X.id_barang
JOIN tb_transaksi_jual Z ON Y.id_barang = Z.id_barang")or die(mysqli_error());
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $data['id_jual']; ?></td>
		<td><?php echo $data['tanggal']; ?></td>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['brg_keluar']; ?></td>
		<td><?php echo $data['Total']; ?></td>
		<td class="pilih">
		<?php echo "<a href='halaman/barang_keluar/delete_keluar.php?id_jual=".$data['id_jual']."'>
			<input type='submit' name='hapus' value='Hapus'></a>"?>
		</td>
	</tr>
<?php } ?>
</table>
	</div>
</div>