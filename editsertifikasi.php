<?php 
  include ('server/serverEditsertif.php');
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
        <a class="btn btn-warning ml-auto" href="server/login.php" role="button" style="color: #008C9E;">Logout</a>          
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
            <li>
                <a href="sertiffront.php"><i class="fas fa-info-circle" style="margin-right: 10px;"></i> Info</a>
            </li>
            <li>
                <a href="sertifikasi.php"><i class="fas fa-certificate" style="margin-right: 10px;"></i> Sertifikasi</a>
            </li>
        </ul>
    </nav>
    <!-- Page Content -->

  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="bread">
        <ol class="breadcrumb shadow-nohover">
          <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
          <li class="breadcrumb-item active"><a href="sertifikasi.php">Sertifikasi</a></li>
          <li class="breadcrumb-item active">Edit Sertfikasi</li>
        </ol>
      </div>
      <div class="row"> 
          <div class="col-5 col-sm-6 col-md-6" style="margin-left: 10px;">
              <h3>Edit Data Pegawai</h3>
              <hr>
              <div class="forms">
                <form method="post">
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="nip">NIP :</label>
                      <input type="text" name="nip" placeholder="NIP" required class="form-control input-lg" value="<?php echo $nip; ?>" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="nama">Nama :</label>  
                      <input type="text" name="nama" placeholder="Nama" required class="form-control input-lg" value="<?php echo $nama ?>" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                    <label for="jabatan">Jabatan :</label>  
                      <input type="text" name="jabatan" placeholder="Sebutan Jabatan" required class="form-control input-lg" value="<?php echo $jabatan ?>" />
                    <br>
                    </div>            
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="uiit">Unit :</label>
                      <input type="text" name="unit" placeholder="Unit" required class="form-control input-lg" value="<?php echo $unit ?>" />
                    <br>
                    </div>
                  </div>
                  <div class="row">  
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="kode">Kode Sertifiasi :</label>
                      <input type="text" name="kode" placeholder="Kode Sertifikasi" required class="form-control input-lg" value="<?php echo $kode ?>" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                    <label for="judul">Judul Sertifikasi</label>  
                      <input type="text" name="judul" placeholder="Judul Sertifikasi" required class="form-control input-lg" value="<?php echo $judul ?>" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                    <label for="peaksana">Pelaksana :</label>  
                      <input type="text" name="pelaksana" placeholder="Pelaksana" required class="form-control input-lg" value="<?php echo $pelaksana ?>" />
                    <br>  
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="nomor">Nomor Sertifikat :</label>
                      <input type="text" name="nomor" placeholder="No Sertifikasi" required class="form-control input-lg" value="<?php echo $nomor ?>" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="masa">Masa Beerlaku Dari :</label>
                      <input type="text" name="dari" placeholder="Masa Berlaku Dari" required class="form-control input-lg" value="<?php echo $masa ?>" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">
                      <label for="sampai">Masa Berlaku Sampai :</label>
                      <input type="text" name="sampai" placeholder="Masa Berlaku Sampai" required class="form-control input-lg" value="<?php echo $sampai ?>" />
                    <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                    <form>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02"/>
                            <label class="custom-file-label" for="inputGroupFile02">Berkas Sertifikasi</label>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
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

            $('#inputGroupFile02').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
</html>
</body>