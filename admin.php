<?php  
include('serverlogin.php');
  if (!isset($_SESSION["admin"])) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
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
        <a class="btn btn-warning ml-auto" href="logout.php" role="button" style="color: #008C9E;">Logout</a>          
</nav>
</div>
<div id="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a id="admins" href="admin.php" style="color: #008C9E; font-size: 30px">ADMIN</a>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-newspaper" style="margin-right: 10px;"></i>Pages</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="daftar.php">Daftar</a>
                    </li>
                    <li>
                        <a href="bio.php">Profile Pendaftar UPK</a>
                    </li>
                    <li>
                        <a href="loginUPKv2.php">Peserta UPK</a>
                    </li>
                    <li>
                        <a href="penilaian.php">Penilaian UPK</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Page Content -->
  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="pageInfo">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin</li>
        </ol>
        <div class="row" style="margin-left: 30px;">
          <div class="col-xl-3 col-sm-6 col-mb-3" style="margin-left: 130px;">
            <a href="sertiffront.php">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="mr-5">Sertifikai Pegawai</div>
                </div>
                <div class="card-footer text-white clearfix small z-1">
                  <img src="sertifikasi.png" alt="sertifikasi" height="100px" width="100px" style="margin-left: 100px;">
                </div>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-sm-6 col-mb-3" style="margin-left: 250px;">
            <a href="upkfront.php">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="mr-5">Penilaian UPK</div>
                </div>
                <div class="card-footer text-white clearfix small z-1">
                  <img src="akun.png" alt="sertifikasi" height="100px" width="100px" style="margin-left: 100px;">
                </div>
              </div>
            </a>
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