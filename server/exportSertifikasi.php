<?php  
  
$db = mysqli_connect('localhost', 'root', '', 'registration'); 
  
$setSql = "SELECT `id`, `nip`, `nama`, `jabatan`, `unit`, `kode_sertifikasi`, `judul_sertifikasi`, `pelaksana`, `no_sertifikasi`, `masa_berlaku`, `sampai_dengan`, `keterangan` FROM sertifikasi ";  
$setRec = mysqli_query($db, $setSql);  
  
$columnHeader = '';  
$columnHeader = "NO" . "\t" . "Nip" . "\t" . "Nama" . "\t" . "Jabatan" . "\t " . "Unit" . "\t" . "Kode Sertifiksi" . "\t" . "Judul Sertifikasi" . "\t" . "Pelaksana" . "\t" . "No Sertifikasi" . "\t" . "Masa Berlaku" . "\t" . "Expired" . "\t" . "Keterangan";  
  
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
header("Content-Disposition: attachment; filename=Database_Sertifikasi.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>