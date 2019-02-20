<?php 
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	$id = $_REQUEST['nip'];

	$sql = "SELECT * FROM sertifikasi WHERE nip='$id'";
	$query = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($query)){
	    $nip = $row['nip'];
	    $nama = $row['nama'];
	    $jabatan = $row['jabatan'];
	    $unit = $row['unit'];
	    $kode = $row['kode_sertifikasi'];
	    $judul = $row['judul_sertifikasi'];
	    $pelaksana = $row['pelaksana'];
	    $nomor = $row['no_sertifikasi'];
	    $masa = $row['masa_berlaku'];
		$sampai = $row['sampai_dengan'];
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
		$masa = mysqli_real_escape_string($db, $_POST['dari']);
		$sampai = mysqli_real_escape_string($db, $_POST['sampai']);

		$sql = "UPDATE sertifikasi SET nip='$nip', nama='$nama', jabatan='$jabatan' , unit='$unit', kode_sertifikasi='$kode', judul_sertifikasi='$judul', pelaksana='$pelaksana', no_sertifikasi='$nomor', masa_berlaku='$masa', sampai_dengan='$sampai' WHERE nip='$id'";			
		mysqli_query($db, $sql);
		header('editsertifikasi.php');

		if (!mysqli_query($db, $sql)){
			die("error");
		}
	}
?>