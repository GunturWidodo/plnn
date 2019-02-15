<?php 
?>
<!DOCTYPE html>
 
<html lang="en">
<head>
  <title>Purna Bakti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<div class="bar">
  <nav class="navbar navbar-expand-sm navbar-custom" style=" background-color: #008c9e" >
  <a class="navbar-brand" href="#">
    <img src="images/pln.jpg" alt="Logo" style="width:40px;">
  </a>
    <a class="navbar-brand" href="#" style="color: #fff; font-size: 27px"><b>PLN</b></a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff; font-size: 18px">Surat Rekomendasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff; font-size: 18px">Keberangkatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff; font-size: 18px">Resitusi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff; font-size: 18px">Surat Udiklat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff; font-size: 18px">Status</a>
      </li>
    </ul>
  </nav>
</div>
<h2 style="text-align: center; margin-top: 50px;"><b>Alur Tahapan</b></h2>
<hr width="25%" color="grey">
    <div class="status" style="margin-left: 90px; margin-top: 60px;">
      <div class="row" style="margin-top: 30px">
        <div class="col-xl-3 col-sm-4 col-mb-3">
          <div class="card bg-info" style="width: 180px; margin-left: 130px;">
            <div class="card-body text-center">
              <p class="card-text" style="color: white; font-size: 17px;"><b>Surat Rekomendasi</b></p>
            </div>
          </div>
        </div>
        <i class="fas fa-arrow-right fa-2x" style="margin-top: 19px; margin-left: -38px; color: #343a40;"></i>
        <div class="col-2">
          <div class="card bg-info" style="width: 200px; margin-left: px;" >
            <div class="card-body text-center">
              <p class="card-text" style="color: white; font-size: 17px"><b>Jadwal Keberangkatan</b></p>
            </div>
          </div>
        </div>
        <i class="fas fa-arrow-right fa-2x" style="margin-top: 19px; margin-left: -23px; color: #343a40;"></i>
        <div class="col-2">
          <div class="card bg-info" style="width: 150px; margin-left: 5px; height: 90px">
            <div class="card-body text-center">
              <p class="card-text" style="color: white; font-size: 20px"><b>Restitusi</b></p>
            </div>
          </div>
        </div>
         <i class="fas fa-arrow-right fa-2x" style="margin-top: 19px; margin-left: -69px; color: #343a40;"></i>
        <div class="col-2">
           <div class="card bg-info" style="width: 150px; margin-left: 5px; height: 90px">
            <div class="card-body text-center">
              <p class="card-text" style="color: white; font-size: 18px"><b>Surat Udiklat</b></p>
            </div>
          </div>
        </div>
         <i class="fas fa-arrow-right fa-2x" style="margin-top: 19px; margin-left: -69px; color: #343a40;"></i>
        <div class="col-2">
          <div class="card bg-info" style="width: 150px; margin-left: 10px; height: 90px">
            <div class="card-body text-center">
              <p class="card-text" style="color: white; font-size: 20px"><b>Status</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="d-flex justify-content-center">
<div style="width: 500px; border-style: solid; border-color: #008c9e; margin-top: 90px;">
  <form style="border: 2px; border-radius:5px;">
    <fieldset>
      <legend style="margin-top: 5px; margin-left: 15px; text-align: center">Jadwal Keberangkatan</legend><br>
        <p>
            <label style="margin-left: 15px">Masukkan Jadwal Keberangkatan Anda :</label>
            <input type="date" name="tanggal" />
        </p>
        <div class="d-flex justify-content-end">
        <p>
            <input type="submit" name="submit" value="Submit" style="background-color: #4CAF50; color: white; margin-right: 22px" />
        </p>
        </div>
    </fieldset>
  </form>
</div>
</div>
<br>
<br>
  <h2 style="margin-left: 20px; text-align:center; margin-top: 20px";><b>Upload Berkas</b></h2>
      <hr width="25%" color ="black">
      <br><br>
      <div class="container">
      <div class="row">
        <div class="col">
          <form method="post" action="server/uploadBerkas.php" enctype="multipart/form-data">
            <h4>Surat Permintaan Pembayaran</h4>
            <input id="filename" type="text" class="form-control" disabled=""> 
            <input id="upload" type="file" name="myfile"> <br>
            <button class="btn btn-success" type="submit" name="save" style="margin-top: 5px;">Upload</button>
          </form>
        </div>
      <hr>
      <div class="col">
        <h4>Kwitansi Pegawai</h4> 
        <form method="post" action="server/uploadBerkas2.php" enctype="multipart/form-data">
          <input id="filename2" type="text" class="form-control" disabled="">
          <input id="upload2" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit" name="save2" style="margin-top: 5px;">Upload</button>
        </form>
      </div>
    </div>
      <div class="row" >
        <div class="col">
        <h4>Kwitansi Biro Perjalanan</h4>
        <form method="post" action="server/uploadBerkas3.php" enctype="multipart/form-data">
          <input id="filename3" type="text"  class="form-control" disabled="">
          <input id="upload3" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit" name="save3" style="margin-top: 5px;">Upload</button>
        </form>
      </div>
      <div class="col">
        <h4>Fotocopy Rekening</h4>
        <form method="post" action="server/uploadcv.php" enctype="multipart/form-data">
          <input id="filename4" type="text"  class="form-control" disabled="">
          <input id="upload4" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit name="save4" style="margin-top: 5px; margin-bottom: 10px;">Upload</button>
        </form>
      </div>
      

      <div class="row">
      <div class="col" style="margin-left: 15px">

        <h4>Fotocopy Passport</h4>
        <form method="post" action="server/uploadcv.php" enctype="multipart/form-data">
          <input id="filename4" type="text"  class="form-control" disabled="">
          <input id="upload4" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit name="save4" style="margin-top: 5px; margin-bottom: 10px;">Upload</button>
        </form>
      </div>

      <div class="col" style="margin-left: 60px">
        <h4>Fotocopy Visa</h4>
        <form method="post" action="server/uploadcv.php" enctype="multipart/form-data">
          <input id="filename4" type="text"  class="form-control" disabled="">
          <input id="upload4" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit name="save4" style="margin-top: 5px; margin-bottom: 10px;">Upload</button>
        </form>
      </div>

      <div class="col">
        <h4>Fotocopy Kartu Keluarga</h4>
        <form method="post" action="server/uploadcv.php" enctype="multipart/form-data">
          <input id="filename4" type="text"  class="form-control" disabled="">
          <input id="upload4" type="file" name="myfile"> <br>
          <button class="btn btn-success" type="submit name="save4" style="margin-top: 5px; margin-bottom: 10px;">Upload</button>
        </form>
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

</body>
</html>


