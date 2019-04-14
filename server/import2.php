<?php 

$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST["import"])) {
	$filename = $_FILES["file"]["tmp_name"];

	if ($_FILES["file"]["size"] > 0) {
		$file = fopen($filename, "r");
		while (($getData = fgetcsv($file, 0, ";")) !== FALSE) {
			$sql = "INSERT INTO sertifikasi (nip, nama, jabatan, unit, kode_sertifikasi, judul_sertifikasi, pelaksana, no_sertifikasi, masa_berlaku, sampai_dengan, keterangan) VALUES ('".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."')";

			$result = mysqli_query($db, $sql);

			if (!isset($result)) {
				echo "<script type=\"text/javascript\">
            		alert(\"Invalid File:Please Upload CSV File.\");
            		window.location = \"index.php\"
              		</script>";    
			}
			else {
            	echo "<script type=\"text/javascript\">
            		alert(\"CSV File has been successfully Imported.\");
            		window.location = \"sertifikasi.php\"
           			</script>";
        	}
		}

		fclose($file);

	}
}

?>