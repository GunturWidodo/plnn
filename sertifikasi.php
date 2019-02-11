<?php 
  include('server/upload.php');
  include('server/server.php');
  include('server/serverlogin.php');
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
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary" role="button" onclick="jumpScroll()" value="Scroll Page">Tambah Data</button>
            </div>
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
                  <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row">
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1" width="50px" style="text-align: center;">No</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">NIP</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Nama</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Sebutan Jabatan</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Unit</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Judul Sertifikasi</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Kode Sertifikasi</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Pelaksana</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">No Sertifikat</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Masa Berlaku</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">s/d</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Keterangan</th>
                        <th class="sortting_asc" tabindex="0" rowspan="1" colspan="1">Download</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
<?php                       
                      include('loadsertifikasi.php');
                      while($row1 = mysqli_fetch_assoc($query2)):
?>
                      <tr class="odd" role="row">
                        <td><?php echo $row1["id"]; ?></td>
                        <td><?php echo $row1["nip"]; ?></td>
                        <td><?php echo $row1["nama"]; ?></td>
                        <td><?php echo $row1["jabatan"]; ?></td>
                        <td><?php echo $row1["unit"]; ?></td>
                        <td><?php echo $row1["judul sertifikasi"]; ?></td>
                        <td><?php echo $row1["kode sertifikasi"]; ?></td>
                        <td><?php echo $row1["pelaksana"]; ?></td>
                        <td><?php echo $row1["no sertifikasi"]; ?></td>
                        <td><?php echo $row1["masa berlaku"]; ?></td>
                        <td><?php echo $row1["sd"]; ?></td>
                        <td><?php echo $row1["keterangan"]; ?></td>
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

                      for($i = 1; $i <= $pages; $i++){
                        if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $pages)){
                          if($i==$pages && $page <= $pages-5) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                          if ($i == $page) echo '<li class="page-item"><a class="page-link" href="?halaman='.$i.'">'.$i.'</a></li>';
                          else echo '<li class="page-item"><a class="page-link" href="?halaman='.$i.'">'.$i.'</a></li>';
                          if($i==1 && $page >= 6) echo '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
                        }
                      }
 
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
          <!--Form data pegawai-->
        <div class="row">
          <div class="col-5 col-sm-6 col-md-6" style="margin-left: 10px;">
              <h3>Input Data Pegawai</h3>
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
                <form method="post" action="sertifikasi.php" enctype="multipart/form-data">
                  <input type="file" name="myfile"> <br>
                  <button type="submit" name="save">upload</button>
                </form>
              </div>
            </div>
          <div class="col-xl-3 col-sm-6 col-mb-3">
            <h3>Import File Excel</h3>
            <hr>
              <div class="custom-file mb-3">
                <form method="POST" action="import.php" enctype="multipart/form-data">
                  <input class="costume-file-input" type="file" name="excel" id="costumefileUp">
                  <br>
                  <button type="submit" class="btn btn-primary">UPLOAD</button>
                </form>
              </div>            
          </div>
        </div>
        </div>
      </div>
    </div>
<script>
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
