<?php

    $absolute_path = dirname($_SERVER['SCRIPT_FILENAME']);
    $locale_path = $absolute_path.'/locale';
    bindtextdomain('webinria', $locale_path);
    bind_textdomain_codeset ('webinria', 'UTF-8');
    textdomain('webinria');
    if (isset($_REQUEST['lang']) && $_REQUEST['lang'] == "fr") {
        putenv("LANG=fr_FR");
        setlocale(LC_ALL,"fr_FR");
        $lang = "fr";
        $lang_content = "fr";
    } else {
        putenv("LANG=en_US");
        setlocale(LC_ALL,"en_US");
        $lang = "en";
        $lang_content = "en-us";
    }

    if (isset($title)) {
        $title = " - ".$title;
    } else {
        $title = "";
    }

    $page = explode(".",basename($_SERVER["SCRIPT_NAME"]));
    $page = $page[0];

?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo "$lang"; ?>" lang="<?php echo "$lang"; ?>">
    <head>
        <base href="<?php echo $site_root; ?>/"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="<?php echo "$lang_content"; ?>" />
        <title>Alexandre Gramfort - Telecom ParisTech <?= $title ?></title>

        <meta name="ROBOTS" content="ALL" />
        <meta name="Copyright" content="(c) 2007-2012 Copyright content:  Copyright design: Alexandre Gramfort" />
        <!-- (c) Copyright 2007 by Alexandre Gramfort All Rights Reserved. -->

        <meta name="verify-v1" content="o8pXHqVtLtfyLzBnsv8Uca2MgaF8MpUjdZEXbf1DqAI=" />

        <style type="text/css" media="screen">
            @import "css/style.css";
            @import "css/jquery.thickbox.css";
            <?php if (isset($css)) echo '@import "css/'.$css.'";'; ?>
        </style>

        <!-- import the DOM logic from external javascript files -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/global.js"></script>
        <script type="text/javascript" src="js/jquery.thickbox.js"></script>
        <script type="text/javascript" src="js/util.js"></script>

    </head>

    <body>

    <!-- begin div.full -->
    <div id="full">

        <!-- begin div.main -->
        <div id="main">

            <!-- <div id="menu">
                <span id="presentationBtn">Presentation</span>
                <span id="softwareBtn">Software</span>
                <span id="publisBtn">Publications</span>
                <span id="linksBtn">Links</span>
            </div> -->

            <!-- begin div.header -->
            <div id="header">
                <!-- begin div.lang -->
                <div id="header-right">
                    <?php if ($page != "index"): ?>
                        <a href="index.<?= $lang ?>.html">&larr; <?= _("Home") ?></a>
                    <?php endif ?>
                    <?php

                    if ($lang == "fr")
                        echo '<a href="'.$page.'.en.html"><img src="img/flag_en.png" alt="english"/></a>';
                    else
                        echo '<a href="'.$page.'.fr.html"><img src="img/flag_fr.png" alt="french"/></a>';

                    ?>
                </div>
                <!-- end div.lang -->
                <!-- begin div.picture -->
                <div id="picture">
                    <img src="img/picture.jpg" alt="my picture" class="" />
                </div>
                <!-- end div.picture -->
                <!-- begin div.title -->
                <div id="title">
                    Alexandre Gramfort<br />
                    <small>
                    <?php echo "<em>"._("Assistant Professor")."</em>"; ?><br />
                    <!-- <a href="http://www.nmr.mgh.harvard.edu/martinos/flashHome.php"><?= _("Martinos Center for Biomedical Imaging") ?></a><br />
                    Harvard - Massachusetts General Hospital, Boston, USA -->
                    <a href="http://www.telecom-paristech.fr/"><?= _("Telecom ParisTech") ?></a><br />
                    <a href="http://www.tsi.telecom-paristech.fr/" title="Département Traitement du Signal et des Images">TSI</a> Department - <a href="http://www.tsi.telecom-paristech.fr/aao/" title="Groupe AAO">AAO</a> Team
                    <!-- INRIA Saclay Ile-de-France, CEA Neurospin -->
                    </small>
                </div>
                <!-- end div.title -->
            </div>
            <!-- end div.header -->
            
            <div id="content">
                