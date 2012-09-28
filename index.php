<?php
    // phpinfo();
    // die();
    include("config.php");
    include("inc/header.inc.php");
?>

<script type="text/javascript" charset="utf-8" src="js/index.js"> </script>

<div id="about">
    <div>
        <a href="http://about.me/agramfort"><?php echo _("@About.me"); ?></a><br />
        <a href="http://twitter.com/agramfort"><?php echo _("@Twitter"); ?></a><br />
        <a href="http://github.com/agramfort"><?php echo _("@GitHub"); ?></a><br />
        <a href="http://www.linkedin.com/in/alexandregramfort"><?php echo _("@LinkedIn"); ?></a>
        <br />
        <a href="http://www.mathworks.com/matlabcentral/fileexchange/authors/54402"><?php echo _("@Matlab"); ?></a>
    </div>
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
                <?php echo _("Brain functional imaging (MEG, EEG, fMRI), Computational Neurosciences, Signal and Image Processing, Computer Vision, Scientific Computing, Machine Learning"); ?>
            </td>
        </tr>
        <!-- <tr>
            <td style="text-align:right"></td>
            <td style="text-align:center">
                <a href="phd.<?php echo $lang; ?>.html">.:<?php echo _("PhD Thesis web page") ?>:.</a>
            </td>
        </tr> -->
    </table>
</div>

<div id="collapse_expand">
    <span id="expand-text"><img src="img/expand_icon.gif" alt="expand"/> <?= _("Expand all") ?></span>
    <span id="collapse-text" class="hidden"><img src="img/collapse_icon.gif" alt="collapse"/> <?= _("Collapse all") ?></span>
</div>

<!-- begin div.resume -->
<div id="resume" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Biosketch")." :."; ?>
    </div>
    <div class="part_content">

        <?= _("I'm currently assistant professor at <a href=\"http://telecom-paristech.fr/\" title=\"Telecom ParisTech\">Telecom ParisTech</a>. I used to be research fellow at the <a href=\"http://www.nmr.mgh.harvard.edu/martinos/flashHome.php\">Martinos Center</a> for Biomedical Imaging at Harvard in Boston working with <a href=\"http://www.nmr.mgh.harvard.edu/martinos/people/showPerson.php?people_id=70\" title=\"Matti Hamalainen\">Matti Hamalainen</a>, as well at the INRIA <a href=\"http://parietal.saclay.inria.fr/\" title=\"INRIA Parietal\">Parietal Project Team</a> in Neurospin-CEA Saclay. I obtained <a href=\"phd.en.html\" title=\"PhD Alexandre Gramfort\">my PhD</a> in 2009 from <a href=\"http://www.telecom-paristech.fr//\">Telecom ParisTech</a> under the supervision of <a href=\"http://www-sop.inria.fr/members/Maureen.Clerc/?>.html\">Maureen Clerc</a> and <a href=\"http://www-sop.inria.fr/members/Olivier.Faugeras/\">Olivier Faugeras</a>. My research interests are on mathematical modeling and the computational aspects of brain imaging (MEG, EEG, fMRI, dMRI). I am more generally interested in biomedical signal and image processing with a taste for scientific computing, numerical methods, data mining and machine learning.") ?>
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
including the EEG/MEG forward problem. OpenMEEG implements the Symmetric BEM which has shown to provide very accurate solutions. Some features: parallel processing, Python Bindings, Matlab integration with <a href='http://fieldtrip.fcdonders.nl/'>Fieldtrip</a> and <a href='http://neuroimage.usc.edu/brainstorm/'>BrainStorm</a>."); ?>
            </li>
            <li>
                <a href="http://scikit-learn.sourceforge.net">
                    <?php echo _("Scikit Learn"); ?>
                </a>
                <?php echo " - "._("A Python project for machine learning."); ?>
            </li>
            <li>
                <a href="http://martinos.org/mne">
                    <?php echo _("MNE"); ?>
                </a>
                <?php echo " - "._("A complete package to process EEG and MEG data: forward and inverse problems (MNE, dSPM, MxNE), stats, time-frequency analysis."); ?>
            </li>
            <li>
                <a href="http://eeglab-plugins.gforge.inria.fr">
                    <?php echo _("EEGLAB Plugins"); ?>
                </a>
                <?php echo " - "._("A set of <a href='http://sccn.ucsd.edu/eeglab/'>EEGLAB</a> plugins for single trial analysis."); ?>
            </li>
            <li>
                <a href="http://embal.gforge.inria.fr">
                    <?php echo _("EMBAL"); ?>
                </a>
                <?php echo " - "._("Matlab toolbox that implements many solvers for M/EEG inverse modeling (L2 a.k.a MN or WMN, L1, L21, L212, Total-Variation, LORETA, HEAT, sLORETA, dSPM, Gamma-MAP, Bayesian approach with Restricted Maximum Likelihood etc.)."); ?>
            </li>
            <li>
                <?php echo _("More on my "); ?>
                <a href="http://github.com/agramfort">
                    <?php echo _("GitHub page"); ?>.
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end div.software -->

<div id="students" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Students")." :."; ?>
    </div>
    <div class="part_content">
        <a href="http://fseoane.net">Fabian Pedregosa</a> [PhD]
        <br />
        Daniel Strohmeier [PhD]
        <br />
    </div>
</div>

<div id="collabs" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Collaborations")." :."; ?>
    </div>
    <div class="part_content">
        <a href="http://www.nmr.mgh.harvard.edu/martinos/people/showPerson.php?people_id=70">
            Matti Hamalainen</a> (MGH / HST / Harvard Medical School, Boston, USA)
        <br />
        <a href="http://parietal.saclay.inria.fr/Members/bertrand-thirion">Bertrand Thirion</a> (INRIA Parietal, Neurospin, France)
        <br />
        <a href="http://gael-varoquaux.info/">Gaël Varoquaux</a> (INRIA Parietal, Neurospin, France)
        <br />
        <a href="http://www.dmi.usherb.ca/~descotea/index.en.html">Maxime Descoteaux</a> (Sherbrooke University, Québec, Canada)
        <br />
        <a href="https://sites.google.com/site/virginievanwassenhove/">Virginie van Wassenhove</a> (CEA Neurospin, France)
        <br />
        <a href="http://www.di.ens.fr/~fbach/">Francis Bach</a> (INRIA - ENS, France)
        <br />
    </div>
</div>

<?php

include("inc/footer.inc.php");

?>

