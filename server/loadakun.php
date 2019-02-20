<?php 
    $query1 = "SELECT * FROM users";
    $result1 = mysqli_query($db, $query1);
    if (!$result1) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }

    $halaman = 15;
    $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $query2 = mysqli_query($db, "SELECT * FROM users WHERE usertype = 'peserta' OR usertype = '' LIMIT $mulai, $halaman");
    $sql = mysqli_query($db, $query1);
    $total = mysqli_num_rows($sql);
    $pages = ceil($total/$halaman);

    if (isset($_GET['search'])) {
        $query1 = "SELECT * FROM sertifikasi WHERE nama LIKE '%$searchquery%'OR keterangan LIKE '%$searchquery%'";
        $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $query2 = mysqli_query($db, "SELECT * FROM sertifikasi WHERE nama LIKE '%$searchquery%'OR nip LIKE '%$searchquery%' usertype = 'peserta' OR usertype = '' LIMIT $mulai, $halaman");
        $sql = mysqli_query($db, $query1);
        $total = mysqli_num_rows($sql);
        $pages = ceil($total/$halaman);
    }
?>