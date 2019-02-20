<?php
session_start();

//koneksi database
$conn = mysqli_connect('localhost', 'root', '', 'registration');

$user = $_SESSION["login_user"];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_assoc($result);

// Upload file
if (isset($_POST['save'])) {
    // nama file
    $filename1 = $_FILES['myfile']['name'];

    // ekstensi file
    $extension = pathinfo($filename1, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $time = time();
    $ran = rand();
    $filename = $ran.$time.$filename1;
    
    if(!file_exists("../upload/berkas/". $_SESSION["login_user"] ."/")){
        mkdir("../upload/berkas/". $_SESSION["login_user"] ."/");
    }

    $destination = '../upload/berkas/'. $_SESSION["login_user"] ."/" . $filename;
    
    if (!in_array($extension, ['zip', 'pdf', 'docx', 'png'])) {
        echo "You file extension must be .zip, .pdf, .docx, or png";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // size file
        echo "File too large!";
    } else {
        // pindahkan file temporary ke db
        if (move_uploaded_file($file, $destination)) {
            $sql = "UPDATE users SET berkas1 = '$filename' WHERE nip='$user'";
            if (mysqli_query($conn, $sql)) { 
?>
                <script type="text/javascript">
                    alert('Berhasil Mengupload Berkas 1');
                    window.location.href='../bio.php';
                </script>
            <?php     
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>