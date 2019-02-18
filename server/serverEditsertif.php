<?php 
$db = mysqli_connect('localhost', 'root', '', 'registration');
$nip = $_REQUEST['nip'];

	if (isset($_POST['simpan'])) {
		$nip = mysqli_real_escape_string($db, $_POST['nip']);
		$nama = mysqli_real_escape_string($db, $_POST['nama']);
		$jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
		$unit = mysqli_real_escape_string($db, $_POST['unit']);
		$kode = mysqli_real_escape_string($db, $_POST['kode']);
		$judul = mysqli_real_escape_string($db, $_POST['judul']);
		$pelaksana = mysqli_real_escape_string($db, $_POST['pelaksana']);
		$nomor = mysqli_real_escape_string($db, $_POST['nomor']);
		$masa = mysqli_real_escape_string($db, $_POST['dari']);
		$sampai = mysqli_real_escape_string($db, $_POST['sampai']);
	}

	$sql = "UPDATE sertifikasi SET nip = '$nip', nama='$nama', jabatan = '$jabatan' , unit = '$unit', kode_sertifikasi = '$kode', judul_sertifikasi = '$judul', pelaksana = '$pelaksana', nomor_sertifikasi = '$nomor', masa_berlaku = '$masa', sampai_dengan = '$sampai' WHERE nip = $nip";			

	if (mysqli_query($db, $sql)){
		header('editsertifikasi.php');
	}
	else{
		die("error");
	}
?>