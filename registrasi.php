<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
	<form 	method="POST" action="login.php">
		<H1>FROM REGISTRASI</H1><br>
		Nama	<input type="text" name="nama" value=""><br>
		NIM		<input type="text" name="nim" value=""><br>
		Kelas	<input type="text" name="kelas" value=""><br>
		Jenis Kelamin <br>
		<input type="checkbox" name="jk" value="Perempuan">Perempuan
		<input type="checkbox" name="jk" value="Laki-Laki">Laki-Laki<br>
		Hobi	<br>
		<input type="checkbox" name="hobi" value="Mendaki">mendaki<br>
		<input type="checkbox" name="hobi" value="Membaca">Membaca <br>
		<input type="checkbox" name="hobi" value="Berenang">Berenang <br>
		<input type="checkbox" name="hobi" value="Travelling">Travelling <br>
		Fakultas	
		<select name="fakultas">
			<option value="FIT">FIT</option>
			<option value="FKB">FKB</option>
			<option value="FEB">FEB</option>
			<option value="FIK">FIK</option>
			<option value="FTE">FTE</option>
			<option value="FIF">FIF</option>
			<option value="FRI">FRI</option>
		</select><br>
		Alamat	<input type="textarea" name="alamat" value=""><br>
		<br>
		<input type="submit" name="submit" value="SUBMIT">
	</form>
	<br>
	<br>

</body>
</html>

<?php 
session_start();

$conn=mysqli_connect('localhost','root','','d_modul6');
	if ($conn==true ) {
		echo "berhasil <br>";
	}
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];

	$_SESSION['nama'] = $nama;
	$_SESSION['nim']  = $nim;
	$_SESSION['kelas'] = $kelas;
	$_SESSION['jk']  = $jk;
	$_SESSION['hobi'] = $hobi;
	$_SESSION['fakultas']  = $fakultas;
	$_SESSION['alamat']  = $alamat;

	if (strlen($nama)>35) {
		echo "Inputan nama max 35 karakter<br>";
	}else{
		echo "Inputan nama berhasil <br>";
	}

	if (strlen($nim)==10) {
		echo "Inputan nim berhasil <br>";
	}else{
		echo "Inputan nim harus 10 karakter <br>";
	}

	
	$masuk=mysqli_query($conn, "INSERT INTO t_pendaftaran VALUES('$nama', $nim, '$kelas', '$jk', '$hobi', '$fakultas', '$alamat')");
	if ($masuk) {
		echo "Behasil masuk ke database <br>";
	}else{
		echo "Gagal masuk ke database";
	}
	header("Locatiion:login.php");
}
 ?>