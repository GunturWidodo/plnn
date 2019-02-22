<?php
session_start();
 $files;
 $user = $_SESSION["login_user"];

  # create new zip object
$zip = new ZipArchive;
$tmp_file = tempnam('.','');
    if ($zip->open($tmp_file, ZipArchive::CREATE) === TRUE)
    {
        if ($handle = opendir("../upload/berkas/".$user."/"))
        {
            // Add all files inside the directory
            while (false !== ($entry = readdir($handle)))
            {
                if ($entry != "." && $entry != "..")
                {
                    $zip->addFile("../upload/berkas/".$user."/" . $entry);
                }
            }
            closedir($handle);
        }
     
        $zip->close();
    }
       # send the file to the browser as a download
      header('Content-disposition: attachment; filename='.$user.'.zip');
      header('Content-type: application/zip');
      readfile($tmp_file);
      unlink($tmp_file);
?>