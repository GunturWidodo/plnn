<?php  
$db = mysqli_connect('localhost', 'root', '', 'registration');

if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);

    $sql = "SELECT * FROM sertifikasi WHERE download = '$fileName'";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($query);
    $nip = $row['nip'];
    $kode = $row['kode_sertifikasi'];

    $filePath = '../upload/sertifikat/' . $nip . $kode . "/" .$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=\"${fileName}\"");
        header("Content-Type: octet/stream");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}
 //readfile("upload/sertifikat" . $nip . "/" .$file);
?>