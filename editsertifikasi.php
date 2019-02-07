<?php  ?>

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
        <a class="btn btn-warning ml-auto" href="login.php" role="button" style="color: #008C9E;">Logout</a>          
</nav>
</div>
<div id="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="admin.php" style="font-size: 30px">ADMIN</a>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
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
      <div class="row">
          <div class="col-5 col-sm-6 col-md-6" style="margin-left: 10px;">
              <h3>Edit Data Pegawai</h3>
              <hr>
              <div class="forms">
                <form>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="nama" placeholder="NIP" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">  
                      <input type="text" name="nip" placeholder="Nama" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">  
                      <input type="text" name="jabatan" placeholder="Sebutan Jabatan" required class="form-control input-lg" value="" />
                    <br>
                    </div>            
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="unit" placeholder="Unit" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                  <div class="row">  
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="kode" placeholder="Kode Sertifikasi" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">  
                      <input type="text" name="judul" placeholder="Judul Sertifikasi" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">  
                      <input type="text" name="pelaksana" placeholder="Pelaksana" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="nosertifikat" placeholder="No Sertifikasi" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="dari" placeholder="Masa Berlaku Dari" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="sampai" placeholder="Masa Berlaku Sampai" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                    <form>
                      <div class="custom-file mb-3">
                        <input required="" type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Upload Berkas</label>
                      </div>
                      <button type="button" class="btn btn-success">Save</button>

                    </form>
                    </div>
                  </div>
                </form>
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