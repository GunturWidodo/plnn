<?php
include ('server/serverbio.php');  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">

  <!--menyisipkan bootsrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>
<body>
<div id="nav">
    <nav class="navbar navbar-expand-sm navbar-custom">
      <h3 style="color: #fff;">Login Sebagai User</h3>
      <a class="btn btn-warning ml-auto" href="logout.php" role="button" name="logout" style="color: #008C9E;">Logout</a>          
  </nav>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <h2 style="color: black;">Profile Pendaftar UPK</h2>
  </div>
<div class="row">
  <div class="col-sm-3">
    <div class="container" id="con1">
      <img src="images/avatar.png" alt="Avatar" class="img-responsive" id="ava">
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-link">Logout</button>
      </div>
    </div>  
  </div>
  <!-- Bagian biodata -->
    <div class="col-sm-7">  
      <div class="container" id="bi">
        <h2> Biodata</h2>
        <hr>
      <div class="row">
        <form class="form" action="##" method="post" id="bioForm"></form>
          <div class="col-5 col-sm-6 col-md-6">
            <label for="Nama">Nama:</label>
            <input type="text" name="nama" placeholder="" required class="form-control" value="<?php echo ($nama); ?>" disabled="" />
          </div>
          <div class="col-5 col-sm-6 col-md-6">
            <label for="Nama">NIP:</label>
            <input type="text" name="nip" placeholder="" required class="form-control" value="<?php echo ($nip); ?>" disabled="" />
          </div>
      </div>
      <div class="row">
        <div class="col-5 col-sm-6 col-md-6">
          <label for="Nama">Unit:</label>
          <input type="text" name="unit" placeholder="" required class="form-control" value="<?php echo ($unit); ?>" disabled="" />
        </div>
        <div class="col-5 col-sm-6 col-md-6">
          <label for="Nama">Jabatan:</label>
          <input type="text" name="jabatan" placeholder="" required class="form-control" value="<?php echo ($jabatan); ?>" disabled="" />
        </div>
      </div>
      <div class="row">
        <div class="col-5 col-sm-6 col-md-6">
          <label for="Nama">Grade:</label>
          <input type="text" name="grade" placeholder="" required class="form-control" value="<?php echo ($grade); ?>" disabled="" />
        </div>
        <div class="col-5 col-sm-6 col-md-6">
          <label for="Nama">Tanggal Grade Terakhir:</label>
          <input type="text" name="tanggal" placeholder="" required class="form-control" value="<?php echo ($tanggal); ?>" disabled="" />
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="Nama">Judul UPK:</label>
          <input type="text" name="judul" placeholder="" required class="form-control" value="<?php echo ($judul); ?>" disabled="" />
        </div>
      </div>
      <hr>
  <!-- Bagian Upload -->
      <h4>Upload Berkas</h4>
      <hr>
      <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="berkas1" name="filename">
            <label class="custom-file-label" for="berkas1">Berkas 1</label>
      </div>
      <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="berkas2" name="filename">
            <label class="custom-file-label" for="berkas2">Berkas 2</label>
      </div>
      <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="berkas3" name="filename">
            <label class="custom-file-label" for="berkas3">Berkas 3</label>
      </div>
      <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="berkas4" name="filename">
            <label class="custom-file-label" for="berkas4">CV</label>
      </div>
      <div class="float-right">
        <button type="button" class="btn btn-success" style="margin-bottom: 10px;">Upload</button>
      </div>
    </div>
    </div>
  </div>
</div>
</body>
