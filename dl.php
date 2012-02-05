<?php
    include("config.php");
    if (isset($_REQUEST['p']))
        $path = $_REQUEST['p'];
    else
        die("Unknown path!");

    require_once('zip.lib.php');

    $zip = new zipfile();
    $cmd = "/usr/bin/find files/$path -name \"*\" | grep -v svn | grep -v DS_Store";
    exec($cmd,$files);

    if (count($files) == 0) {
        die("No files to download");
    }

    foreach ($files as $key => $filename) {
        if (!is_dir($filename)) {
            $fp = fopen ($filename, 'r');
            $content = fread($fp, filesize($filename));
            fclose ($fp);
            $filename = str_replace("files/","",$filename);
            $zip->addfile($content,$filename);
        }
    }

    $archive = $zip->file();

    $archive_name = str_replace("//","/",$path);
    $archive_name = str_replace("/","_",$archive_name);
    header('Content-Type: application/x-zip');
    header('Content-Disposition: inline; filename='.$archive_name.'.zip');

    echo $archive;
?>
