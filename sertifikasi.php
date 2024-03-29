<?php 
  include('server/server.php');
  include('server/import2.php');
  include('server/serverlogin.php');
  if (!isset($_SESSION["admin"])) {
    header('location: login.php');
  }
  $searchquery = "";


  $query3 = "SELECT * FROM sertifikasi";
  $result2 = mysqli_query($db, $query3);
  if (!$result2) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
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
        <a class="btn btn-warning ml-auto" href="server/logout.php" role="button" style="color: #008C9E;">Logout</a>          
</nav>
</div>
<div id="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="admin.php" style="font-size: 30px">ADMIN</a>
            <p>Sertfikasi Pegawai</p>
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
      <div class="pageInfo">
        <ol class="breadcrumb shadow-nohover">
          <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
          <li class="breadcrumb-item"><a href="sertiffront.php">Info Sertifikasi</a></li>
          <li class="breadcrumb-item">Sertifikasi</li>
        </ol>
      </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Sertifikasi
            <div class="d-flex justify-content-end" style="margin-top: -25px;"><a class="btn btn-info ml-auto" href="server/exportSertifikasi.php" role="button"  >Eksport Tabel</a></div>
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary" role="button" onclick="jumpScroll()" value="Scroll Page" style="margin-top: 5px">Tambah Data</button>
            </div>
          </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div id="dataTable_filter" class="dataTables_filter" style="margin-left: 20px; margin-bottom: 10px">
                  <label>Search:</label>
                  <?php 
                    if (isset($_GET['search'])) {
                      $searchquery=$_GET['search'];
                    }
                  ?>
                  <script type="text/javascript">
                    document.onkeydown=function(evt){
                      var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
                      if (keyCode == 13) {
                        document.formsearch.submit();
                      }
                    }
                  </script>
                  <form name="formsearch" action="#" method="GET">
                    <input class="form-control form-control-sm" type="search" name="search" placeholder="" aria-controls="dataTable"> 
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" style = "font-size: 14px">
                  <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row" style="white-space: nowrap">
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1" width="50px" style="text-align: center;">No</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">NIP</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Nama</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Sebutan Jabatan</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Unit</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Kode Sertifikasi</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Judul Sertifikasi</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Pelaksana</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">No Sertifikat</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Masa Berlaku</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Expired</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Keterangan</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Download</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Edit</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Hapus</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <?php
                        include('server/loadsertifikasi.php');
                        while($row1 = mysqli_fetch_assoc($query2)):
                      ?>
                      <tr class="odd" role= "row">
                        <td><?php echo $id = $row1["id"]; ?></td>
                        <td><?php echo $nip = $row1["nip"]; ?></td>
                        <td><?php echo $row1["nama"]; ?></td>
                        <td><?php echo $row1["jabatan"]; ?></td>
                        <td><?php echo $row1["unit"]; ?></td>
                        <td><?php echo $row1["kode_sertifikasi"]; ?></td>
                        <td><?php echo $row1["judul_sertifikasi"]; ?></td>
                        <td><?php echo $row1["pelaksana"]; ?></td>
                        <td><?php echo $row1["no_sertifikasi"]; ?></td>
                        <td><?php echo $row1["masa_berlaku"]; ?></td>
                        <td><?php echo $row1["sampai_dengan"]; ?></td>
                        <td><?php echo $row1["keterangan"]; ?></td>
                        <td><a href="server/download.php?file=<?php echo $row1["download"] ?>"><?php echo $row1["download"] ?></a></td>
                        <td><a href="editsertifikasi.php?id=<?php echo $id?>">Edit</a></td>
                        <td><a href="server/delete.php?id=<?php echo $id?>">Hapus</a></td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>                      
                  </table>
                  <div class="page">
                  <!--<form><input type="checkbox" id="tes" name="descending" value="desc">teada namana</form>
                  <script type="text/javascript">
                    $('#tes').on('change', function() {
                      location.reload();
                    });
                  </script> -->

                    <ul class="pagination">
                    <?php 
                    $url = '?halaman=';
                    if (isset($_GET['search'])) {
                      $url =  '?search=' . $searchquery . '&halaman=';
                      if($page > 1){
                      echo '<li class="page-item"><a class="page-link" href="'.$url.''.($page-1).'">Prev</a></li>';
                      }
                      for($i = 1; $i <= $pages; $i++){
                        if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $pages)){
                          if($i==$pages && $page <= $pages-5) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                          if ($i == $page) echo '<li class="page-item active"><a class="page-link" href="'.$url.''.$i.'">'.$i.'</a></li>';
                          else echo '<li class="page-item"><a class="page-link" href="'.$url.''.$i.'">'.$i.'</a></li>';
                          if($i==1 && $page >= 6) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                        }
                        }
                        if($page < $pages){
                          echo '<li class="page-item"><a class="page-link" href="'.$url.''.($page+1).'">Next</a></li>';
                      }
                    } else {
                      if($page > 1){
                      echo '<li class="page-item"><a class="page-link" href="'.$url.''.($page-1).'">Prev</a></li>';
                      }
                      for($i = 1; $i <= $pages; $i++){
                        if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $pages)){
                          if($i==$pages && $page <= $pages-5) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                          if ($i == $page) echo '<li class="page-item active"><a class="page-link" href="'.$url.''.$i.'">'.$i.'</a></li>';
                          else echo '<li class="page-item"><a class="page-link" href="'.$url.''.$i.'">'.$i.'</a></li>';
                          if($i==1 && $page >= 6) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                        }
                        }
                        if($page < $pages){
                          echo '<li class="page-item"><a class="page-link" href="'.$url.''.($page+1).'">Next</a></li>';
                      }
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
          <!--Form data pegawai-->
        <div class="row">
          <div class="col-5 col-sm-6 col-md-6" style="margin-left: 10px;">
              <h3>Input Data Pegawai</h3>
              <hr>
              <div class="forms">
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-5 col-sm-6 col-md-6">
                      <input type="text" name="nip" placeholder="NIP" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                    <div class="col-5 col-sm-6 col-md-6">  
                      <input type="text" name="nama" placeholder="Nama" required class="form-control input-lg" value="" />
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
                      <input type="text" name="nomor" placeholder="No Sertifikasi" required class="form-control input-lg" value="" />
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
                    <div class="col">
                      <input type="text" name="ket" placeholder="Keterangan" required class="form-control input-lg" value="" />
                    <br>
                    </div>
                  </div>
                    <div class="col-5 ml-auto">
                      <button type="submit" name="simpan" class="btn btn-success" style="margin-top: 10px; margin-left: -410px">Simpan</button> 
                    </div>
                    <br>
                    <h5>Gunakan fitur edit pada tabel diatas untuk mengupload berkas sertifikasi</h4>
                </form>
                
              </div>
            </div>
          <div class="col-xl-3 col-sm-6 col-mb-3">
            <h3>Input Data Pegawai</h3>
            <hr>
            <h4>Cara import file</h4>
            <ol>
              <li>Ubah file .xlsx/.xls (excel) menjadi file csv</li>
              <li>Hilangkan row pertama pada tabel yang berisi header (nip, nama, jabatan, dst) bila ada</li>
              <li>Browse file csv yang akan di upload</li>
              <li>Maksimum row yang dapat di import adalah 110 row</li>
            </ol>
            <div class="col">
              <form method="post" action="" enctype="multipart/form-data">
                <input id="upload" type="file" name="file"> <br>
                <button type="submit" name="import" class="btn btn-success" style="margin-top: 10px; margin-left: 189px">Import</button> 
              </form>
            </div> 
          </div>
        </div>
        </div>
      </div>
    </div>

  <script>
  document.getElementById('upload').onchange = uploadOnChange;
  function uploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
      filename = filename.substring(lastIndex + 1);
    }
    document.getElementById('filename').value = filename;
  }

    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
  });
    function jumpScroll() {
      window.scroll(0,5700); // horizontal and vertical scroll targets
    }
    $('costumefileUp').on('change',function(){
                  //get the file name
                  var fileName = $(this).val();
                  //replace the "Choose a file" label
                  $(this).next('.custom-file-label').html(fileName);
    })


  </script>
</body>