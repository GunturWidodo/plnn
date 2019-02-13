<?php
session_start();
 $files;
 $user = $_SESSION["login_user"];

   
    if ($handle = opendir("../upload/berkas/".$user."/")) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        $files[] = "../upload/berkas/".$user."/" . $entry;
      }
    }
    closedir($handle);
  }

  # create new zip object
       $zip = new ZipArchive();
    
       # create a temp file &amp; open it
       $zipname = "test.zip";
       $zip->open($zipname, ZipArchive::CREATE);
 
       # loop through each file
       foreach($files as $file){
           # download file
           $download_file = file_get_contents($file);
 
           #add it to the zip
           $zip->addFromString(basename($file),$download_file);
       }
 
       # close zip
       
       $zip->close();
 
       # send the file to the browser as a download
       header('Content-disposition: attachment; filename='.$user.'.zip');
      header('Content-type: application/zip');
      readfile($zipname);
?>