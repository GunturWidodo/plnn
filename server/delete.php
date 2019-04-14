<?php 

	$id = $_REQUEST['id'];

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	mysqli_query($db, "DELETE FROM sertifikasi WHERE id = '$id'");

	header('location: ../sertifikasi.php')
 ?>