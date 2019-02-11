<?php 
	$query1 = "SELECT * FROM sertifikasi";
	$result1 = mysqli_query($db, $query1);
	if (!$result1) {
		printf("Error: %s\n", mysqli_error($db));
		exit();
	}

	$halaman = 15;
	$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$query2 = mysqli_query($db, "SELECT * FROM sertifikasi LIMIT $mulai, $halaman");
	$sql = mysqli_query($db, $query1);
	$total = mysqli_num_rows($sql);
	$pages = ceil($total/$halaman);
	$no = $mulai+1;

	if (isset($_GET['search'])) {
		$halaman = 15;
		$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
		$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
		$query2 = mysqli_query($db, "SELECT * FROM sertifikasi WHERE nama LIKE '%$searchquery%'OR keterangan LIKE '%$searchquery%' LIMIT $mulai, $halaman");
		$sql = mysqli_query($db, $query1);
		$total = mysqli_num_rows($sql);
		$pages = ceil($total/$halaman);
		if ($pages = 1) {
			$page = 1;
		}
		$no = $mulai+1;
	}
 ?>
