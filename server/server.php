<?php 
	session_start();

	//membuat koneksi ke database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//tombol daftar
	if (isset($_POST['submit'])) {
		$nama = mysqli_real_escape_string($db, $_POST['nama']);
		$nip = mysqli_real_escape_string($db, $_POST['nip']);
		$unit = mysqli_real_escape_string($db, $_POST['unit']);
		$jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
		$grade = mysqli_real_escape_string($db, $_POST['grade']);
		$tanggal = mysqli_real_escape_string($db, $_POST['tanggal']);
		$judul = mysqli_real_escape_string($db, $_POST['judul']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		$password = sha1($password);
		$sql = "INSERT INTO users (nama, nip, unit, jabatan, grade, tanggal, judul, password) VALUES ('$nama', '$nip', '$unit', '$jabatan', '$grade', '$tanggal', '$judul', '$password')";
		mysqli_query($db, $sql);

		header('location: login.php');	
	}
  ?>