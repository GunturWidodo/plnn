<?php include ("server/server.php")  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Selamat datang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">

  <!--menyisipkan bootsrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

</head>
<body id="bod">
  <div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="Logo.png" class="img-responsive" alt="" id="logo" />
          <h4 style="text-align: center;">Pendaftaran UPK</h4>
          <input type="text" name="nama" placeholder="Nama" required class="form-control input-lg" value="" />

          <input type="text" name="nip" placeholder="NIP" required class="form-control input-lg" value="" />

          <input type="text" name="unit" placeholder="Unit" required class="form-control input-lg" value="" />

          <input type="text" name="jabatan" placeholder="Jabatan" required class="form-control input-lg" value="" />

          <input type="text" name="grade" placeholder="Grade" required class="form-control input-lg" value="" />

          <input type="text" name="tanggal" placeholder="Tanggal Grade Terakhir" required class="form-control input-lg" value="" />

          <input type="text" name="judul" placeholder="Judul UPK" required class="form-control input-lg" value="" />

          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="" />

          <input type="password2" class="form-control input-lg" name="password2" placeholder="Konfirmasi Password" required="" />

          <div class="pwstrength_viewport_progress"></div>
          
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Daftar</button>
            
        </form>

      </section>  
      </div>
      
      <div class="col-md-4"></div>
      
  </div>
</body>
</html>
