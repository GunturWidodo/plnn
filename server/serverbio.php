<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'registration');
	$db = mysqli_select_db($con,"registration");

	$user = $_SESSION["login_user"];
	$sql = "SELECT * FROM users WHERE nip='$user'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)){
		$nama = $row['nama'];
		$nip = $row['nip'];
		$unit = $row['unit'];
		$jabatan = $row['jabatan'];
		$grade = $row['grade'];
		$tanggal = $row['tanggal'];
		$judul = $row['judul'];
	}

	if (!isset($_SESSION["login_user"])) {
		#kasi muncul allert
		header('location:login.php');
	}
 ?>