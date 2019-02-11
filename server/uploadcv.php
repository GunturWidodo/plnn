<?php
session_start();

//koneksi database
$conn = mysqli_connect('localhost', 'root', '', 'registration');

$user = $_SESSION["login_user"];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_assoc($result);

// Upload file
if (isset($_POST['save4'])) {
    // nama file
    $filename1 = $_FILES['myfile']['name'];

    // ekstensi file
    $extension = pathinfo($filename1, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $time = time();
    $ran = rand();
    $filename = $ran.$time.$filename1;

    $destination = '../upload/berkas/' . $filename;
    
    if (!in_array($extension, ['zip', 'pdf', 'docx', 'png'])) {
        echo "You file extension must be .zip, .pdf, .docx, or png";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // size file
        echo "File too large!";
    } else {
        // pindahkan file temporary ke db
        if (move_uploaded_file($file, $destination)) {
            $sql = "UPDATE users SET cv = '$filename' WHERE nip='$user'";
            if (mysqli_query($conn, $sql)) { 
?>
                <script type="text/javascript">
                    alert('Berhasil Mengupload CV');
                    window.location.href='../bio.php';
                </script>
            <?php     
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Download file
/*if (isset ($_GET['file_id'])) {
    $id = $_GET['file_id']; 

    //mengambil file
    $sql = "SELECT * FROM sertifikasi WHERE id=$id";
    $result = mysqli_query($conn, $sql);  

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $file['download'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='. basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length:' . filesize('upload/' . $file['download']));
        readfile('upload/' . $file['download']);
    }
    
    exit;
}*/
?>