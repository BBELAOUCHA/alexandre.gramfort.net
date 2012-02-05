<?php
    // phpinfo();
    // die();
    $title = _("Alexandre Gramfort - Publications");
    $css = 'hal.css';
    include("config.php");
    include("inc/header.inc.php");

?>

<h1>
    <?= _("Publications on HAL") ?>
</h1>

<div class="part_content">
<div style="float:right; margin-top:10px; font-style:italic">
    <a href="http://hal.inria.fr/index.php?action_todo=search&amp;submit=1&amp;s_type=simple&amp;f[0]=@*&amp;v[0]=gramfort" title="HAL - INRIA - Gramfort">
        <?php echo _("My publications on HAL"); ?>
    </a>
</div>

<?php
 $url = "http://haltools.inrialpes.fr/Public/afficheRequetePubli.php?auteur_exp=Alexandre,%20Gramfort&annee_publideb=2006&annee_publifin=2010&typdoc=('ART_ACL','ART_SCL','COMM_ACT','COMM_SACT','CONF_INV','COURS','COVS','DOUV','HDR','MEM','OTHER','OUVS','PATENT','REPORT','THESE','UNDEFINED','ART_VULG','PRES_CONF')&NbAffiche=20&CB_auteur=oui&CB_titre=oui&CB_article=oui&CB_DOI=oui&langue=Anglais&tri_exp=annee_publi&tri_exp2=typdoc&tri_exp3=date_publi&ordre_aff=TA&Fen=Aff&css=../css/VisuRubriqueEncadre.css&noHeader";
 $http_page = file_get_contents($url,FILE_USE_INCLUDE_PATH);
 echo $http_page;
?>
</div>

<?php

include("inc/footer.inc.php");

?>

