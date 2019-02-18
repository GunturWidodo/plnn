<?php  
  
$db = mysqli_connect('localhost', 'root', '', 'registration'); 
  
$setSql = "SELECT `id` `nama`, `nip`, `unit`, `jabatan`, `grade`, `tanggal`, `berkas1`, `berkas2`, `berkas3`, `cv`, `talent1`, `talent2`, `talent3` FROM users WHERE usertype = 'peserta' OR usertype = ''";  
$setRec = mysqli_query($db, $setSql); 

$no = 1;   
  
$columnHeader = '';  
$columnHeader = "NO" . "\t" . "Nama" . "\t" . "NIP" . "\t" . "Unit" . "\t " . "Jabatan" . "\t" . "Grade" . "\t" . "Tanggal grade terakhir" . "\t" . "Berkas 1" . "\t" . "Berkas 2" . "\t" . "Berkas 3" . "\t" . "CV" . "\t" . "Kriteria Talent 1" . "\t" . "Kriteria Talent 2" . "\t" . "Kriteria Talent 3" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Rekap_Pendaftar.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>