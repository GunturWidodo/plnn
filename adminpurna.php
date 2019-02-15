<?php 
include('server/server.php');
include('server/serverlogin.php');
  
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Purnabakti</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="script" href="admin.js">

  <!--menyisipkan bootsrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <!--Font Awesome-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
<div id="nav">
  <nav class="navbar navbar-expand-sm navbar-custom">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
      <i class="fas fa-align-left"></i>
    </button>
    <a class="btn btn-warning ml-auto" href="server/logout.php" role="button" style="color: #008C9E;">Logout</a>          
  </nav>
</div>
<div id="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="admin.php" style="font-size: 30px">ADMIN</a>
            <p>Informasi Purnabakti</p>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="upkfront.php"><i class="fas fa-info-circle" style="margin-right: 10px;"></i> Info</a>
            </li>
            <li>
                <a href="akun.php"><i class="fas fa-user-circle" style="margin-right: 10px;"></i> Rekap Purna Bakti</a>
            </li>
            <li>
                <a href="upk.php"><i class="fas fa-database" style="margin-right: 10px;"></i> Database Purna Bakti</a>
            </li>
        </ul>
    </nav>
    <!-- Page Content -->
  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="pageInfo">
        <ol class="breadcrumb shadow-nohover">
          <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
          <li class="breadcrumb-item active"><a href="upkfront.php">Info Purnabakti</a></li>
          <li class="breadcrumb-item active">Database Purnabakti</li>
        </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Tabel Purnabakti
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div id="dataTable_filter" class="dataTables_filter" style="margin-left: 20px; margin-bottom: 10px">
                  <label>Search:</label>
                  <input class="form-control form-control-sm" type="search" placeholder="" aria-controls="dataTable">
                  <a class="btn btn-primary ml-auto" href="login.php" role="button" style="margin-top: 5px">Cari</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%; font-size: 12px" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row">
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1" width="50px" style="text-align: center;">No</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1">NIPEG</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1">Nama</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1">Unit</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1">Penetapan diklat</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1" style="text-align: center;" >Surat Rekomendasi</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1" style="text-align: center;" width="100px">Tanggal Mulai</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="1" colspan="1" width="100px" style="text-align: center;">Tanggal Selesai</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="2" colspan="1" style="text-align: center;">Berkas Resitusi Umroh</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="1" colspan="1" style="text-align: center;">Surat Udiklat</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="1" colspan="1" style="text-align: center;">Status</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <?php
                        $query1 = "SELECT * FROM purna";
                        $result1 = mysqli_query($db, $query1);
                        if (!$result1) {
                          printf("Error: %s\n", mysqli_error($db));
                          exit();
                        }

                        $halaman = 20;
                        $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $query2 = mysqli_query($db, "SELECT * FROM purna LIMIT $mulai, $halaman");
                        $sql = mysqli_query($db, $query1);
                        $total = mysqli_num_rows($sql);
                        $pages = ceil($total/$halaman);
                        $no = $mulai+1;

                        while($row1 = mysqli_fetch_assoc($query2)):
                      ?>
                      <tr class="odd" role="row">
                        <td><?php echo $row1["id"]; ?></td>
                        <td><?php echo $row1["nipeg"]; ?></td>
                        <td><?php echo $row1["nama"]; ?></td>
                        <td><?php echo $row1["unit"]; ?></td>
                        <td><?php echo $row1["penetapan"]; ?></td>
                        <td><?php echo $row1["rekom"]; ?></td>
                        <td><?php echo $row1["mulai"]; ?></td>
                        <td><?php echo $row1["selesai"]; ?></td>
                        <td><?php echo $row1["resitusi"]; ?></td>
                        <td><?php echo $row1["udiklat"]; ?></td>
                        <td><?php echo $row1["status"]; ?></td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                  <div class="page">
                    <ul class="pagination">
<?php 
                      if($page > 1){
                        echo '<li class="page-item"><a class="page-link" href="?halaman='.($page-1).'">Prev</a></li>';
                      }
?>
<?php 
                      for($i = 1; $i <= $pages; $i++){
                        if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $pages)){
                          if($i==$pages && $page <= $pages-5) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                          if ($i == $page) echo '<li class="page-item"><a class="page-link" href="?halaman='.$i.'">'.$i.'</a></li>';
                          else echo '<li class="page-item"><a class="page-link" href="?halaman='.$i.'">'.$i.'</a></li>';
                          if($i==1 && $page >= 6) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                        }
                      }
?>
<?php 
                      if($page < $pages){
                        echo '<li class="page-item"><a class="page-link" href="?halaman='.($page+1).'">Next</a></li>';
                      }
?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>   
</body>
<script>
  $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
</script>
</html>
</body>
