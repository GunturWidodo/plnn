<?php 
	session_start();	
	
	//tombol login
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	if (isset($_POST['go'])) {
		$nip = mysqli_real_escape_string($db, $_POST['nip']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = sha1($password);

		$query = "SELECT * FROM users WHERE nip = '$nip' AND password = '$password'";
		$result = mysqli_query($db, $query);

		$row = mysqli_fetch_array($result);
		$usertype = $row['usertype'];

		if (mysqli_num_rows($result) == 1) {
			if ($usertype == "admin") {
				$_SESSION["admin"] = $nip;
				$_SESSION["login_user"] = $nip;
				header('location: admin.php');
			} else if ($usertype == "penguji") {
				#$_SESSION["penguji"] = $nip;
				header('location: loginUPKv2.php');
			} else {
				$_SESSION["login_user"] = $nip;
				header('location: bio.php');
			}
		} else {
			echo '<script language="javascript">';
			echo 'alert("Kombinasi nip/password tidak cocok")';
			echo '</script>';
		}
	}
?>
