<?php 
	#session_start();

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

	if (isset($_POST['simpan'])) {
		$nip = mysqli_real_escape_string($db, $_POST['nip']);
		$nama = mysqli_real_escape_string($db, $_POST['nama']);
		$jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
		$unit = mysqli_real_escape_string($db, $_POST['unit']);
		$kode = mysqli_real_escape_string($db, $_POST['kode']);
		$judul = mysqli_real_escape_string($db, $_POST['judul']);
		$pelaksana = mysqli_real_escape_string($db, $_POST['pelaksana']);
		$nomor = mysqli_real_escape_string($db, $_POST['nomor']);
		$dari = mysqli_real_escape_string($db, $_POST['dari']);
		$sampai = mysqli_real_escape_string($db, $_POST['sampai']);
		$ket = mysqli_real_escape_string($db, $_POST['ket']);
		
		$sql = "INSERT INTO sertifikasi (nip, nama, jabatan, unit, kode_sertifikasi, judul_sertifikasi, pelaksana, no_sertifikasi, masa_berlaku, sampai_dengan, keterangan) VALUES ('$nip', '$nama', '$jabatan', '$unit', '$kode', '$judul', '$pelaksana', '$nomor', '$dari', '$sampai', '$ket')";
		mysqli_query($db, $sql);

		#header('location: ./sertifikasi.php');	
	}
  ?>
