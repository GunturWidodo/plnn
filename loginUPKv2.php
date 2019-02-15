<?php 
  $db = mysqli_connect('localhost', 'root', '', 'registration');
  $query3 = "SELECT * FROM users WHERE usertype = 'peserta' OR usertype = ''";
  $result2 = mysqli_query($db, $query3);
  if (!$result2) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Penilai UPK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 
</head>
<body>
  <div id="nav">
    <nav class="navbar navbar-expand-sm navbar-custom">
      <h3 style="color: #fff;">Login Sebagai Penilai</h3>
      <a class="btn btn-warning ml-auto" href="admin.php" role="button" style="color: #008C9E;">Logout</a>          
  </nav>
  </div>
  <div class="jumbotron">
    <h1 style="color: black;">Selamat Datang !</h1>
  </div>

  <div>
    <h2 style="margin-left: 36%;">Daftar Peserta Penilaian UPK</h2>
    <hr id="garis">
  </div>

  <div class="tabelnilai">
    <div class="container">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#table1">Bagian 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#table2">Bagian 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#table3">Bagian 3</a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="table1" class="container tab-pane active"><br>
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Penilaian UPK
          </div>
          <!--Table-->
          <div class="card-body">
            <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="dataTable" class="table table-bordered dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row">
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1" width="50px">No</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Nama</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">NIP</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Penilaian</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <tr class="odd" role="row">
                        <?php while($row2= mysqli_fetch_array($result2)) :   ?>
                          <td><?php echo $row2["id"]; ?></td>
                          <td><?php echo $row2["nama"]; ?></td>
                          <td><?php echo $nip = $row2["nip"]; ?></td>
                        <?php #bgmana caranya link href dengan id yang bersesuaian  ?>
                        <td><a href="penilaian.php?nip=<?php echo $nip?>">Mulai Penilaian</a></td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        <div id="table2" class="container tab-pane fade"><br>
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Penilaian UPK
          </div>
          <!--Table-->
          <div class="card-body">
            <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="dataTable" class="table table-bordered dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row">
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1" width="50px">No</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Nama</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">NIP</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Penilaian</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td>NamaTest</td>
                        <td>DB123</td>
                        <td><a href="penilaian.php">Mulai Penilaian</a></td>
                      </tr>
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td>NamaTest</td>
                        <td>DB123</td>
                        <td><a href="penilaian.php">Mulai Penilaian</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        <div id="table3" class="container tab-pane fade"><br>
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Penilaian UPK
          </div>
          <!--Table-->
          <div class="card-body">
            <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="dataTable" class="table table-bordered dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row">
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1" width="50px">No</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Nama</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">NIP</th>
                        <th class="sortting_asc" tabindex="0" rowspan="2" colspan="1">Penilaian</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td>NamaTest</td>
                        <td>DB123</td>
                        <td><a href="penilaian.php">Mulai Penilaian</a></td>
                      </tr>
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td>NamaTest</td>
                        <td>DB123</td>
                        <td><a href="penilaian.php">Mulai Penilaian</a></td>
                      </tr>
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td>NamaTest</td>
                        <td>DB123</td>
                        <td><a href="penilaian.php">Mulai Penilaian</a></td>
                      </tr>
                      
                    </tbody>
                  </table>
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
</html>