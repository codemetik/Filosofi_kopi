<div class="data_barang">
<a href="input.php"><input type="submit" value="Tambah Barang Baru"></a>

<?php 
include "koneksi.php";
$qu = mysqli_query($koneksi,"SELECT CONCAT('Rp ',FORMAT(SUM(harga*stok),0)) AS Total FROM barang");
while ($dat = mysqli_fetch_array($qu)) {
?>
<div class="total_atas">Total : <input type="text" name="total" value="<?php echo $dat['Total']; ?>" readonly></div>
<?php } ?>
<br>
<br>
<div style="overflow-x:auto;">
<table id="customers">
	<tr>
		<th style="width: 30px;">Id Barang</th>
		<th style="width: 90px;">Nama </th>
		<th>Jenis</th>
		<th>Stok</th>
		<th>Total</th>
		<th>Harga</th>
		<th>Gambar</th>
		<th style="width: 200px;" colspan="2">Pilih</th>
	</tr>
		<?php 
		include "koneksi.php";
		$query = mysqli_query($koneksi, "SELECT id_barang, nama , jenis, stok, CONCAT('Rp ',FORMAT(harga*stok,0)) AS Total, CONCAT('Rp ', FORMAT(harga,0)) AS harga, gambar FROM barang")or die(mysqli_error());
		while($data = mysqli_fetch_array($query)){
		?>
	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['jenis']; ?></td>
		<td><?php echo $data['stok']; ?></td>
		<td><?php echo $data['Total']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo "<img src='images/".$data['gambar']."' width='100' height='100'>" ?></td>
	<td class="pilih">
		<a href="dasboard_admin.php?page=update&id=<?php echo $data['id_barang'] ?>">
			<input type="submit" name="Edit" value="Edit"></a> <!--| <?php /*echo "<a href='proses_delete.php?id=".$data['id_barang']."'>
			<input type='submit' name='hapus' value='Hapus'></a>"*/?>-->
		</td>
	</tr>
<?php } ?>
</table>
</div>
</div>