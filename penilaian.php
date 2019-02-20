<?php 
  $id = $_REQUEST['nip'];
  $kategori = "";
  include('server/server.php');

  $sql = "SELECT * FROM users WHERE nip='$id'";
  $query = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_array($query)){
    $nama = $row['nama'];
    $nip = $row['nip'];
    $judul = $row['judul'];
    $unit = $row['unit'];
    $jabatan = $row['jabatan'];
    $grade = $row['grade'];
    $lulus = $row['lulus'];
    $a = $row['a'];    $b = $row['b'];    $c = $row['c'];    $d = $row['d'];
    $bobot = $row['bobot'];
    $nilai = $row['nilai'];
    $presentasi = $row['presentasi'];
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tabel Penilaian UPK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">

  <!--menyisipkan bootsrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <!--Print as PDF-->
  <script>
    function printContent(x){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(x).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>

</head>
<body>
<div id="nav">
    <nav class="navbar navbar-expand-sm navbar-custom">
      <h3 style="color: #fff;">Login Sebagai Penilai</h3>
      <a class="btn btn-warning ml-auto" href="server/logout.php" role="button" style="color: #008C9E;">Logout</a>          
  </nav>
</div>
  <div class="jumbotron jumbotron-fluid">
    <h2 style="color: black;">Penilaian UPK</h2>
  </div>
<div class="container">
  <div class="row">
    <div class="col-xl-3 col-sm-6 col-mb-3">
      <form>
        <h4>Profile</h4>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" placeholder="" required class="form-control" value="<?php echo ($nama); ?>" disabled="" />
        <br>
        <label for="nip">NIP:</label>
        <input type="text" name="nip" placeholder="" required class="form-control" value="<?php echo ($nip); ?>" disabled="" />
        <br>
        <label for="judul">Judul UPK:</label>
        <input type="text" name="judul" placeholder="" required class="form-control" value="<?php echo ($judul); ?>" disabled="" />
        <br>
      </form>
      <!--<a class="btn btn-info" type="submit" name="don" href="server/donlod.php" style="margin-top: 5px; margin-bottom: 10px;">Unduh Semua Berkas</a>-->
      <button type="submit" name="don" onclick="window.location.href='server/donlod.php'" class="btn btn-primary">Unduh Semua Berkas</button>
    </div>
    <div class="col-xl-3 col-sm-4 col-mb-3" style="margin-left: 50px;">
      <form action="#" method="post">
        <h4>Nilai</h4>
        <div class="row">
          <div class="col-4">
            <label for="kategory" style="font-size: 12px; text-align: center">Kategori UPK: </label>
            <input type="text" maxlength="1" name="kategori" placeholder="" required class="form-control" value="" id="kategori" style="text-transform: uppercase;" />
          </div>
          <div class="col-4">
            <label for="bobot" style="font-size: 12px; text-align: center">Bobot Kompetensi</label>
            <input type="text" maxlength="2" name="bobot" placeholder="" required class="form-control" value="" id="bobot"/>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <label for="bobot" style="font-size: 12px; text-align: center">Bobot Lulus Seleksi Administrasi</label>
            <input type="text" maxlength="2" name="bobotL" placeholder="" required class="form-control" value="" id="bobotL"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-4">
            <label for="nilaiA">A:</label>
            <input type="text" maxlength="2" name="nilaiA" placeholder="" required class="form-control" value="" id="na" />
          </div>
          <div class="col-4">
            <label for="nilaiB">B:</label>
            <input type="text" maxlength="2" name="nilaiB" placeholder="" required class="form-control" value="" id="nb" />
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="nilaiC">C:</label>
            <input type="text" maxlength="2" name="nilaiC" placeholder="" required class="form-control" value="" id="nc"/>
          </div>
          <div class="col-4">
            <label for="nilaiD">D:</label>
            <input type="text" maxlength="2" name="nilaiD" placeholder="" required class="form-control" value="" id="nd"/>
          </div>
        </div>
        <br>
        <button type="submit" name="nilai" class="btn btn-success" onclick="getVal()">Nilai</button>
      </form>
    </div>
      
    <div class="col-6" style="margin-left: -50px;">
      <h4>Tabel Penilaian</h4>
      <div class="card-body">
          <div id="print" class="table-responsive">
            <!--<p style="margin-bottom:-1px; text-transform: uppercase;" id="setKategori"></p>-->
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="tblData" class="table table-bordered dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                    <thead style="text-align: center; font-size: 12px;">
                      <tr>
                        <th class="sortting_asc" style="text-align: left;" tabindex="0" rowspan="1" colspan="14" id="setKategori"><?php echo 'Kategori UPK: '.$kategori.'' ?></th>
                      </tr>
                      <tr role="row">
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1" width="50px" style="text-align: center;">No</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1">Nama</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1">NIP</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1">Unit</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1">Jabatan</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1">Grade</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1" style="text-align: center;">Bobot Lulus Seleksi Administrasi</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="1" colspan="4" style="text-align: center;">Hard Competence</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="3" colspan="1" style="text-align: center;">Bobot Kompetensi</th>
                        <th class="sortting_asc align-middle" tabindex="0" rowspan="1" colspan="2" style="text-align: center;">Kesimpulan</th>
                      </tr>
                      <tr>
                        <th colspan="4">Penilaian Makalah & Kontribusi</th>
                        <th colspan="2">Penilaian Hard + Soft</th>
                      </tr>
                      <tr>
                        <th class="align-middle" id="a">A</th>
                        <th class="align-middle" id="b">B</th>
                        <th class="align-middle" id="c">C</th>
                        <th class="align-middle" id="d">D</th>
                        <th>Nilai Total</th>
                        <th class="align-middle">Presentasi</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center; font-size: 12px;">
                      <tr class="odd" role="row">
                        <td>1</td>
                        <td style="text-align: center;"><?php echo $nama; ?></td>
                        <td style="text-align: center;"><?php echo $nip; ?></td>
                        <td style="text-align: center;"><?php echo $unit; ?></td>
                        <td style="text-align: center;"><?php echo $jabatan; ?></td>
                        <td style="text-align: center;"><?php echo $grade; ?></td>
                        <td id="bobotLulus" style="text-align: center;"><?php echo $lulus; ?></td>
                        <td id="kolA" style="text-align: center;"><?php echo $a; ?></td>
                        <td id="kolB" style="text-align: center;"><?php echo $b; ?></td>
                        <td id="kolC" style="text-align: center;"><?php echo $c; ?></td>
                        <td id="kolD" style="text-align: center;"><?php echo $d; ?></td>
                        <td id="setBobot" style="text-align: center;"><?php echo $bobot; ?></td>
                        <td id="nilai" style="text-align: center;"><?php echo $nilai; ?></td>
                        <td id="pres" style="text-align: center;"><?php echo $presentasi; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="printContent('print')">Unduh</button>
        <button type="submit" class="btn btn-success" onclick="tableToExcel('tblData')">Export</button>
        <button type="submit" class="btn btn-primary">Berita Acara</button>
    </div>
  </div>
</div>
<script type="text/javascript">
  var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
</body>
</html>