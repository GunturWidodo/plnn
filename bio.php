<?php
  //include('server/serverlogin.php');
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

  <!--Font Awesome-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
<div id="nav">
    <nav class="navbar navbar-expand-sm navbar-custom">
      <h3 style="color: #fff;">Login Sebagai User</h3>
      <a class="btn btn-warning ml-auto" href="server/logout.php" role="button" name="logout" style="color: #008C9E;">Logout</a>          
  </nav>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <h2 style="color: black;">Profile Pendaftar UPK</h2>
  </div>
<div class="row">
  <div class="col-sm-2">
  </div>
  <!-- Bagian biodata -->
    <div class="col-sm-8">  
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
      <h3>Upload Berkas</h3>
      <hr>
      <div class="row">
        <div class="col">
          <form method="post" action="server/uploadBerkas.php" enctype="multipart/form-data">
            <h5>Berkas 1 
              <?php 
              $query = mysqli_query($db, $sql);
              while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['berkas1'])) {
                  echo '<i class="fas fa-check" style="color: #1ae03f;"></i>';
                } else {
                  echo " ";
                }
              }
              ?>
            </h5>
            <input id="filename" type="text" class="form-control" disabled="">
            <input style="padding:10px 0" id="upload" type="file" name="myfile"> <br>
            <button class="btn btn-info" type="submit" name="save">Upload</button>
          </form>
        </div>
        <hr>
        <div class="col">
          <h5>Berkas 2 
              <?php 
              $query = mysqli_query($db, $sql);
              while ($row = mysqli_fetch_array($query)) {
                $berkas22 = $row['berkas2'];
                if (!empty($berkas22)) {
                  echo '<i class="fas fa-check" style="color: #1ae03f;"></i>';
                } else {
                  echo " ";
                }
              }
             ?>
             </h5>
          <form method="post" action="server/uploadBerkas2.php" enctype="multipart/form-data">
            <input id="filename2" type="text" class="form-control" disabled="">
            <input style="padding:10px 0" id="upload2" type="file" name="myfile"> <br>
            <button class="btn btn-info" type="submit" name="save2">Upload</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
        <h5>Berkas 3 
            <?php 
            $query = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($query)) {
              if (!empty($row['berkas3'])) {
                echo '<i class="fas fa-check" style="color: #1ae03f;"></i>';
              } else {
                echo " ";
              }
            }
           ?>
        </h5>
          <form method="post" action="server/uploadBerkas3.php" enctype="multipart/form-data">
            <input id="filename3" type="text"  class="form-control" disabled="">
            <input style="padding:10px 0" id="upload3" type="file" name="myfile"> <br>
            <button class="btn btn-info" type="submit" name="save3">Upload</button>
          </form>
        </div>
        <hr>
        <div class="col">
          <h5>CV 
              <?php 
              $query = mysqli_query($db, $sql);
              while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['cv'])) {
                  echo '<i class="fas fa-check" style="color: #1ae03f;"></i>';
                } else {
                  echo " ";
                }
              }
             ?>
          </h5>
          <form method="post" action="server/uploadcv.php" enctype="multipart/form-data">
            <input id="filename4" type="text"  class="form-control" disabled="">
            <input style="padding:10px 0" id="upload4" type="file" name="myfile"> <br>
            <button class="btn btn-info" type="submit" name="save4" style="margin-bottom: 50px;">Upload</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
        <h5>Berkas 3 
            <?php 
            $query = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($query)) {
              if (!empty($row['berkas3'])) {
                echo '<i class="fas fa-check" style="color: #1ae03f;"></i>';
              } else {
                echo " ";
              }
            }
           ?>
        </h5>
          <form method="post" action="server/uploadBerkas3.php" enctype="multipart/form-data">
            <input id="filename3" type="text"  class="form-control" disabled="">
            <input style="padding:10px 0" id="upload3" type="file" name="myfile"> <br>
            <button class="btn btn-info" type="submit" name="save3">Upload</button>
          </form>
        </div>
        <div class="col">
          <h5>haaaaaaaa</h5>
          <form action="server/uplod.php" method="post" enctype="multipart/form-data">ssssssss</form>

        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
  document.getElementById('upload').onchange = uploadOnChange;
  document.getElementById('upload2').onchange = uploadOnChange2;
  document.getElementById('upload3').onchange = uploadOnChange3;
  document.getElementById('upload4').onchange = uploadOnChange4;

  function uploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
      filename = filename.substring(lastIndex + 1);
    }
    document.getElementById('filename').value = filename;
  }

  function uploadOnChange2() {
    var filename2 = this.value;
    var lastIndex = filename2.lastIndexOf("\\");
    if (lastIndex >= 0) {
      filename2 = filename2.substring(lastIndex + 1);
    }
    document.getElementById('filename2').value = filename2;
  }

  function uploadOnChange3() {
    var filename3 = this.value;
    var lastIndex = filename3.lastIndexOf("\\");
    if (lastIndex >= 0) {
      filename3 = filename3.substring(lastIndex + 1);
    }
    document.getElementById('filename3').value = filename3;
  }

  function uploadOnChange4() {
    var filename4 = this.value;
    var lastIndex = filename4.lastIndexOf("\\");
    if (lastIndex >= 0) {
      filename4 = filename4.substring(lastIndex + 1);
    }
    document.getElementById('filename4').value = filename4;
  }
</script>
</html>