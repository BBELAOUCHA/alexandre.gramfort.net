<?php
    // phpinfo();
    // die();
    include("config.php");
    include("inc/header.inc.php");
?>

<script type="text/javascript" charset="utf-8" src="js/index.js"> </script>

<div id="collapse_expand">
    <span id="expand-text"><img src="img/expand_icon.gif" alt="expand"/> <?= _("Expand all") ?></span>
    <span id="collapse-text" class="hidden"><img src="img/collapse_icon.gif" alt="collapse"/> <?= _("Collapse all") ?></span>
</div>

<div class="part_content">
    <table cellspacing="0" cellpadding="5" border="0">
        <tr>
            <td style="text-align:right;width:200px"><em><strong>Email : </strong></em></td>
            <td>
                <script type="text/javascript" charset="utf-8">
                // <![CDATA[
                echo_email();
                // ]]>
                </script>
            </td>
        </tr>
        <tr>
            <td style="text-align:right;width:200px"><em><strong><?php echo _("Research interests"); ?> : </strong></em></td>
            <td>
                <?php echo _("Brain functional imaging (MEG, EEG, fMRI), Computational Neurosciences, Signal and Image Processing, Computer Vision, Machine Learning"); ?>
            </td>
        </tr>
        <tr>
            <td style="text-align:right"></td>
            <td style="text-align:center">
                <a href="phd.<?php echo $lang; ?>.html">.:<?php echo _("PhD Thesis web page") ?>:.</a>
            </td>
        </tr>
    </table>
</div>

<!-- begin div.resume -->
<div id="resume" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Resume")." :."; ?>
    </div>
    <div class="part_content">

        <?= _("I'm currently a research fellow at the <a href=\"http://www.nmr.mgh.harvard.edu/martinos/flashHome.php\">Martinos Center</a> for Biomedical Imaging in Boston working with <a href=\"http://www.nmr.mgh.harvard.edu/martinos/people/showPerson.php?people_id=70\" title=\"Matti Hamalainen\">Matti Hamalainen</a>. I was previously postdoctoral fellow in the INRIA <a href=\"http://parietal.saclay.inria.fr/\" title=\"INRIA Parietal\">Parietal Project Team</a>.  I obtained my PhD in 2009 from <a href=\"http://www.telecom-paristech.fr//\">Telecom ParisTech</a> under the supervision of <a href=\"http://www-sop.inria.fr/members/Maureen.Clerc/?>.html\">Maureen Clerc</a>
        and <a href=\"http://www-sop.inria.fr/members/Olivier.Faugeras/\">Olivier Faugeras</a>. I did my PhD jointly at <a href=\"http://www-sop.inria.fr\">INRIA in Sophia Antipolis</a> and the <a href=\"http://di.ens.fr\">Computer Science Department at the Ecole normale supérieure</a> in Paris. I graduated from the <a href=\"http://www.polytechnique.edu\">Ecole Polytechnique</a> in 2006 after a double masters degree at <a href=\"http://www.telecom-paristech.fr//\">Telecom ParisTech</a> and the <a href=\"http://www.cmla.ens-cachan.fr/Cmla/DeaMVA/index.html\">Ecole normale supérieure in  Cachan (DEA MVA)</a>. My research interests are on brain functional imaging (MEG, EEG, fMRI) where I apply my background in signal and image processing, scientific computing, numerical methods, data mining and machine learning.") ?>
    </div>
</div>
<!-- end div.resume -->

<!-- begin div.publications -->
<div id="publis" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Publications")." :."; ?>
    </div>
    <div class="part_content">
        <div style="float:right; margin-top:10px; font-style:italic">
            <a href="http://hal.inria.fr/index.php?action_todo=search&amp;submit=1&amp;s_type=simple&amp;f[0]=@*&amp;v[0]=gramfort" title="HAL - INRIA - Gramfort">
                <?php echo _("My publications on HAL"); ?>
            </a>
        </div>
        
        <?php

            include_once 'publis.inc.php';

        ?>
    </div>
</div>
<!-- end div.publications -->

<!-- begin div.software -->
<div id="software" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Software")." :."; ?>
    </div>
    <div class="part_content">
        <ul>
            <li>
                <a href="http://openmeeg.gforge.inria.fr">
                    <?php echo _("OpenMEEG"); ?>
                </a>
                <?php echo " - "._("C++ package for low-frequency bio-electromagnetism
including the EEG/MEG forward problem. OpenMEEG implements the Symmetric BEM which has shown to provide very accurate solutions. Some features: parallel processing, Python Bindings, Matlab integration with <a href='http://fieldtrip.fcdonders.nl/'>Fieldtrip</a>."); ?>
            </li>
            <li>
                <a href="http://embal.gforge.inria.fr">
                    <?php echo _("EMBAL (Soon available)"); ?>
                </a>
                <?php echo " - "._("Matlab toolbox that implements many solvers for M/EEG inverse modeling (L2 a.k.a MN or WMN, L1, L21, L212, Total-Variation, LORETA, HEAT, sLORETA, dSPM, Gamma-MAP, Bayesian approach with Restricted Maximum Likelihood etc.)."); ?>
            </li>
            <li>
                <a href="http://eeglab-plugins.gforge.inria.fr">
                    <?php echo _("EEGLAB Plugins"); ?>
                </a>
                <?php echo " - "._("A set of <a href='http://sccn.ucsd.edu/eeglab/'>EEGLAB</a> plugins for single trial analysis."); ?>
            </li>
            <li>
                <a href="http://scikit-learn.sourceforge.net">
                    <?php echo _("Scikit Learn"); ?>
                </a>
                <?php echo " - "._("A Python project for machine learning."); ?>
            </li>
        </ul>
    </div>
</div>
<!-- end div.software -->

<!-- begin div.links -->
<div id="links" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Links")." :."; ?>
    </div>
    <div class="part_content">
        <a href="http://www.linkedin.com/in/alexandregramfort"><?php echo _("@LinkedIn"); ?></a>
        <img src="img/linkedin.gif" alt="linkedIn"/><br />
        <a href="http://www.mathworks.com/matlabcentral/fileexchange/authors/54402"><?php echo _("@Matlab File Exchange"); ?></a>
        <img src="img/matlab_logo.gif" alt="Matlab"/><br />
        <a href="http://twitter.com/agramfort"><?php echo _("@Twitter"); ?></a><br />
        <a href="http://github.com/agramfort"><?php echo _("@GitHub"); ?></a><br />
        <!-- <a href="http://alexandre.gramfort.net/tech"><?php echo _("My blog"); ?></a><br />
        <a href="http://alexandre.gramfort.net" class="hidden"><?php echo _("My personal blog"); ?></a> -->
    </div>
</div>
<!-- end div.links -->

<?php

include("inc/footer.inc.php");

?>

