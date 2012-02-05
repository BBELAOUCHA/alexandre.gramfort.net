<?php

    $locale_path = $site_root.'/locale';
    bindtextdomain('webinria', $locale_path);
    textdomain('webinria');
    if (isset($_REQUEST['lang']) && $_REQUEST['lang'] == "fr") {
        putenv("LANG=fr_FR");
        setlocale(LC_ALL,"fr_FR");
        $lang = "fr";
        $lang_content = "fr";
    }
    else {
        putenv("LANG=en_US");
        setlocale(LC_ALL,"en_US");
        $lang = "en";
        $lang_content = "en-us";
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo "$lang"; ?>" lang="<?php echo "$lang"; ?>">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="<?php echo "$lang_content"; ?>" />

        <title>Alexandre Gramfort - INRIA</title>

        <meta name="ROBOTS" content="ALL" />
        <meta name="Copyright" content="(c) 2007 Copyright content:  Copyright design: Alexandre Gramfort" />
        <!-- (c) Copyright 2007 by Alexandre Gramfort All Rights Reserved. -->

        <base href=<?php echo $site_root; ?>/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

        <!-- import the DOM logic from external javascript files -->
        <script type="text/javascript" src="js/util.js"></script>

    </head>

    <body>

    <!-- begin div.full -->
    <div id="full">

        <!-- begin div.main -->
        <div id="main" style="width: 1100px">
