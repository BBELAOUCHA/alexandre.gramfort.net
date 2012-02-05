<?php
include_once("config.php");
include_once("header.inc.php");
if (isset($_REQUEST['p']))
    $path = $_REQUEST['p'];
else
    die("Unknown path!");

exec('ls files/'.$path,$ls);
?>

<div class="part_title">
    <a href=""><img height="50px" align="center" src="img/home.png"></a> <?php echo _("Browsing : data/").$path; ?>
</div>

<?php
    if (count($ls)==0) {
        echo '<div class="part_content">'._("Empty path!").'</div>';
        include_once("footer.inc.php");
        die();
    }
    $path_is_valid = false;
    $path_parts = explode("/",$path);
    $path_parts = array_diff($path_parts,array(""));
    $path = implode("/",$path_parts);
?>

<div class="part_content" style="font-size:smaller">

<?php

    if (count($path_parts) > 0) {
        $parent_parts = $path_parts;
        array_pop($parent_parts);
        echo "<img height='25px' align='center' src='img/folder.png'>";
        $parent = implode("/",$parent_parts);
        echo "<a href='data/$parent'>..</a><br/>";
    }

    if ((count($ls) == 1) && !(is_dir("files/$path/$ls[0]"))){
        echo "<code>";
        $fp = fopen ($ls[0], 'r');
        $content = fread($fp, filesize($ls[0]));
        fclose ($fp);
        echo nl2br($content);
        echo "</code>";
    } else {
        $readme_key = array_search("README.txt", $ls);
        if ($readme_key) {
            $fp = fopen ("files/$path/$ls[$readme_key]", 'r');
            $content = fread($fp, filesize("files/$path/$ls[$readme_key]"));
            fclose ($fp);
            echo nl2br($content);
            echo "<h3>"._("Files")."</h3>";
        }
        foreach ($ls as $key => $file) {
            if (is_dir("files/$path/$file"))
                echo "<img height='25px' align='center' src='img/folder.png'>";

            $real_path = "data/$path/$file";
            $real_path = str_replace("//", "/", $real_path);
            // $ext = strrchr($file, ".");
            // echo $ext;
            echo "<a href='$real_path'>".$file."</a><br/>";
        }
    }

?>


<?php
    if (count($path_parts) > 1) {
?>

<h3 style="text-align:center">
    <?php
        if (count($ls) == 1) {
            echo "<a href='download/".$path."'>"._("Download file");
        } else {
            echo "<a href='download/".$path."'>"._("Download all files");
        }
    ?>
    <img height="30px" align="center" src="img/download.png"/>
    </a>
</h3>

<?php
    }
?>

</div>

<?php
include_once("footer.inc.php");
?>