<?php 

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
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
		$password = sha1($password);
		$password2 = sha1($password2);

		$sql = "INSERT INTO users (nama, nip, unit, jabatan, grade, tanggal, judul, password) VALUES ('$nama', '$nip', '$unit', '$jabatan', '$grade', '$tanggal','$judul', '$password')";

		if($password != $password2){
			echo '<script language="javascript">';
			echo 'alert("Konvirmasi password tidak cocok")';
			echo '</script>';
			
		}
		else if ($password == $password2){
			mysqli_query($db, $sql);
			header('location: login.php');	
		}
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

	if (isset($_POST['nilai'])) {
		$lulus = mysqli_real_escape_string($db, $_POST['bobotL']);
		$a = mysqli_real_escape_string($db, $_POST['nilaiA']);
		$b = mysqli_real_escape_string($db, $_POST['nilaiB']);
		$c = mysqli_real_escape_string($db, $_POST['nilaiC']);
		$d = mysqli_real_escape_string($db, $_POST['nilaiD']);
		$bobot = mysqli_real_escape_string($db, $_POST['bobot']);
		
		$sql = "UPDATE users SET lulus=$lulus, a='$a',b='$b',c='$c',d='$d', bobot='$bobot' WHERE nip='$id'";
		mysqli_query($db, $sql);
		echo '<script language="javascript">';
		echo 'alert("'.$id.'")';
		echo '</script>';
	}
  ?>
