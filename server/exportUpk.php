<?php  
  
$db = mysqli_connect('localhost', 'root', '', 'registration'); 
  
$setSql = "SELECT `id`, `nama`, `nip`, `unit`, `jabatan`, `grade`, `lulus`, `a`, `b`, `c`, `d`, `bobot`, `nilai`, `presentasi` FROM users WHERE usertype = 'peserta' OR usertype = ''";  
$setRec = mysqli_query($db, $setSql);  
  
$columnHeader = '';  
$columnHeader = "NO" . "\t" . "Nama" . "\t" . "NIP" . "\t" . "Unit" . "\t " . "Jabatan" . "\t" . "Grade" . "\t" . "Bobot Lulus Seleksi Administrasi" . "\t" . "A" . "\t" . "B" . "\t" . "C" . "\t" . "D" . "\t" . "Bobot Kompetensi" . "\t" . "Nilai Total" . "\t" . "Presentasi" . "\t";  
  
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
header("Content-Disposition: attachment; filename=Database_UPK.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>