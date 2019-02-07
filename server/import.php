<?php
  // memanggil koneksi
  require_once __DIR__.'/koneksi.php';

  // memanggil class PHPExcel
  require_once __DIR__.'/PHPExcel.php';
  require_once __DIR__.'/PHPExcel/IOFactory.php';

  // load excel
  $file = $_FILES['excel']['tmp_name'];
  $load = PHPExcel_IOFactory::load($file);
  $sheets = $load->getActiveSheet()->toArray(null,true,true,true);

  $i = 1;
  foreach ($sheets as $sheet) {

    // karena data yang di excel di mulai dari baris ke 2
    // maka jika $i lebih dari 1 data akan di masukan ke database
    if ($i > 1) {
      // nama ada di kolom A
      // sedangkan alamat ada di kolom B
      $sql = 'INSERT INTO sertifikasi SET';
      $sql .= ' no="'.$sheet['A'].'",';
      $sql .= ' nip="'.$sheet['B'].'",';
      $sql .= ' nama="'.$sheet['C'].'",';
      $sql .= ' jabatan="'.$sheet['D'].'",';
      $sql .= ' unit="'.$sheet['E'].'",';
      $sql .= ' kode="'.$sheet['F'].'",';
      $sql .= ' judul="'.$sheet['G'].'",';
      $sql .= ' pelaksana="'.$sheet['H'].'",';
      $ssql .= ' nosertif="'.$sheet['I'].'",';
      $sql .= ' dari="'.$sheet['J'].'",';
      $sql .= ' sampai="'.$sheet['K'].'",';
      $sql .= ' ket="'.$sheet['L'].'"';

      mysqli_query($koneksi,$sql);
    }

    $i++;
  }

  if($i >= 2) {
    ?>
    <script type="text/javascript">
      alert('Berhasil Mengupload');
      window.location.href='sertifikasi.php';
    </script>
  <?php 
  } 
?>