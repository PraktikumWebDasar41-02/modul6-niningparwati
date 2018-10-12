<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman View</title>
</head>
<body>
	<form method="POST">
	<table border="1">
	<tr>
		<h1>Tampilkan Data Mahsiswa</h1>
		<th>NAMA</th>
		<th>NIM</th>
		<th>KELAS</th>
		<th>JENIS KELAMIN</th>
		<th>HOBI</th>
		<th>FAKULTAS</th>
		<th>ALAMAT</th>
	</tr>

	<tr>
		<td><?php echo $_SESSION['nama']; ?></td>
		<td><?php echo $_SESSION['nim']; ?></td>
		<td><?php echo $_SESSION['kelas']; ?></td>
		<td><?php echo $_SESSION['jk']; ?></td>
		<td><?php echo $_SESSION['hobi']; ?></td>
		<td><?php echo $_SESSION['fakultas']; ?></td>
		<td><?php echo $_SESSION['alamat']; ?></td>
	</tr>

	<tr></tr>
	<tr></tr>
</table>
<br>
<input type="submit" name="edit" value="EDIT">
</form>
</body>
</html>

<?php 
$conn=mysqli_connect('localhost','root','','d_modul6');
if (isset($_POST['edit'])) {
$ambil=mysqli_query($conn, "SELECT * FROM t_pendaftaran('nama',nim,'kelas','jenis_kelamin','hobi','fakultas','alamat')");
?>
	Nama : 
	<?php $ambil['nama']; echo "<br>"; ?>
	NIM : 
	<?php  $ambil['nim']; echo "<br>"; ?>
	Kelas : 
	<?php $ambil['kelas']; echo "<br>"; ?>
	Jenis Kelamin : 
	<?php $ambil['jk']; echo "<br>"; ?>
	Hobi : 
	<?php $ambil['hobi']; echo "<br>"; ?>
	Fakultas : 
	<?php $ambil['fakultas']; echo "<br>"; ?>
	Alamat : 
	<?php $ambil['alamat']; echo "<br>";
}  ?>
