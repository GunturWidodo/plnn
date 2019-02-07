<!DOCTYPE html>
<html>
<head>
<title>ENTRI DATA DENGAN MENGGUNAKAN PLUGIN DARI PHPEXCEL</title>
</head>
<body>
	<?php 
		include('server.php');

		$db1 = mysqli_select_db($db, "registration");

		$sql = "SELECT * FROM users LIMIT 1";
		$query = mysqli_query($db, $sql);

		while ($row = mysqli_fetch_assoc($query)) {
			if ($row['nama']==0){
				echo "yas";
			}
			else{
				echo "no";
			}
		}
	 ?>
</form>
</body>
</html>
