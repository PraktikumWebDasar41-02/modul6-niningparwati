<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
<form method="POST" action="tampil.php">
	Nama <input type="text" name="nama" value=""> <br>
	NIM	 <input type="text" name="nim" value=""><br>
	<input type="submit" name="kirim" value="kirim">
</form>
</body>
</html>

<?php 
session_start();

if (isset($_POST['kirim'])) {
	$nama1 = $_POST['nama'];
	$nim1  = $_POST['nim'];

	if ($nama1 == $_SESSION['nama']) {
		echo "Nama yang Anda masukan terdaftar di Database <br>";
	}else{
		echo "Nama yang Anda masukan tidak terdaftar di Database <br>";
	}

	if ($nim1 = $_SESSION['nim']) {
		echo "NIM yang Anda masukan terdaftar di Database <br>";
	}else{
		echo "NIM yang Anda masukan tidak terdaftar di Database <br>";
	}

	//header("Location:tampil.php");
}
 ?>