<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre film yang disukai</td>
		<td>
			<input type="checkbox" name="genre[]" value="Horror">Horror<br>
			<input type="checkbox" name="genre[]" value="Action">Action<br>
			<input type="checkbox" name="genre[]" value="Anime">Anime<br>
			<input type="checkbox" name="genre[]" value="Thriller">Thriller<br>
			<input type="checkbox" name="genre[]" value="Animasi">Animasi<br>
		</td>
	</tr>
	<tr>
		<td>Tempat wisata tujuan travelling</td>
		<td>
			<input type="checkbox" name="travel[]" value="Bali">Bali<br>
			<input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat<br>
			<input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan<br>
			<input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung<br>
			<input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo<br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
