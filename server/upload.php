<?php 
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    $user = $_SESSION["login_user"];
    $sql = "SELECT * FROM test";
    $result = mysqli_query($db, $sql);

    $files = mysqli_fetch_assoc($result);

    if (isset($_FILES['myfile'])) {
        $name_array = $_FILES['myfile']['name'];
        $tmp_name_array = $_FILES['myfile']['tmp_name'];
        $type_array = $_FILES['myfile']['type'];
        $size_array = $_FILES['myfile']['size'];
        $error_array = $_FILES['myfile']['error'];

        for ($i=0; $i < count($tmp_name_array); $i++) { 
            $name_array[$i] = rand().$name_array[$i];
        }

        // ekstensi file
        $extension = pathinfo($name_array[0], PATHINFO_EXTENSION);
        $extension2 = pathinfo($name_array[1], PATHINFO_EXTENSION);
        $extension3 = pathinfo($name_array[2], PATHINFO_EXTENSION);
        $extension4 = pathinfo($name_array[3], PATHINFO_EXTENSION);
        
        if(!file_exists("../upload/berkas/". $_SESSION["login_user"] ."/")){
            mkdir("../upload/berkas/". $_SESSION["login_user"] ."/");
        }

        $destination = '../upload/berkas/'. $_SESSION["login_user"] ."/" . $name_array[0];
        $destination2 = '../upload/berkas/'. $_SESSION["login_user"] ."/" . $name_array[1];
        $destination3 = '../upload/berkas/'. $_SESSION["login_user"] ."/" . $name_array[2];
        $destination4 = '../upload/berkas/'. $_SESSION["login_user"] ."/" . $name_array[3];

        if (!in_array($extension, ['zip', 'pdf', 'docx', 'png']) &&
            !in_array($extension2, ['zip', 'pdf', 'docx', 'png']) &&
            !in_array($extension3, ['zip', 'pdf', 'docx', 'png']) &&
            !in_array($extension4, ['zip', 'pdf', 'docx', 'png'])) {
            echo "You file extension must be .zip, .pdf, .docx, or png";
        } else {
        //for ($i=0; $i < count($tmp_name_array); $i++) { 
            if (move_uploaded_file($tmp_name_array[0], $destination)) {
                $sql = "UPDATE users SET berkas1='$name_array[0]' WHERE nip='$user'";
                mysqli_query($db, $sql);
            } else {
                echo "move_uploaded_file function failed for ".$name_array[0]."<br>";
            }
            if (move_uploaded_file($tmp_name_array[1], $destination2)) {
                $sql = "UPDATE users SET berkas2='$name_array[1]' WHERE nip='$user'";
                mysqli_query($db, $sql);
            } else {
                echo "move_uploaded_file function failed for ".$name_array[1]."<br>";
            }
            if (move_uploaded_file($tmp_name_array[2], $destination3)) {
                $sql = "UPDATE users SET berkas3='$name_array[2]' WHERE nip='$user'";
                mysqli_query($db, $sql);
            } else {
                echo "move_uploaded_file function failed for ".$name_array[2]."<br>";
            }
            if (move_uploaded_file($tmp_name_array[3], $destination4)) {
                $sql = "UPDATE users SET cv='$name_array[3]' WHERE nip='$user'";
                mysqli_query($db, $sql);
            } else {
                echo "move_uploaded_file function failed for ".$name_array[3]."<br>";
            }
        //}
        echo "<script type=\"text/javascript\"> alert('Berhasil Mengupload Semua Berkas'); window.location.href='../bio.php'; </script>";
        }
    }
?>
