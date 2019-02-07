<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'registration');

$sql = "SELECT * FROM sertifikasi";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    
    if (!in_array($extension, ['zip', 'pdf', 'docx', 'png'])) {
        echo "You file extension must be .zip, .pdf, .docx, or png";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "UPDATE sertifikasi SET download = '$filename' WHERE id=id";
            if (mysqli_query($conn, $sql)) { 
?>
                <script type="text/javascript">
                    alert('Berhasil Mengupload');
                    window.location.href='sertifikasi.php';
                </script>
            <?php     
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Download file
if (isset ($_GET['file_id'])) {
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

    //Update count
    exit;
}
?>