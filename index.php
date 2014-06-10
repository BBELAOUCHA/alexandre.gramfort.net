<?php
    // phpinfo();
    // die();
    include("config.php");
    include("inc/header.inc.php");
?>

<script type="text/javascript" charset="utf-8" src="js/index.js"> </script>

<div id="about">
    <div>
        <!-- <a href="http://about.me/agramfort"><?php echo _("@About.me"); ?></a><br /> -->
        <a href="http://twitter.com/agramfort"><?php echo _("@Twitter"); ?></a><br />
        <a href="http://github.com/agramfort"><?php echo _("@GitHub"); ?></a><br />
        <a href="http://www.linkedin.com/in/alexandregramfort"><?php echo _("@LinkedIn"); ?></a><br />
        <a href="http://scholar.google.com/citations?user=fhxshS0AAAAJ"><?php echo _("@Google Scholar"); ?></a><br />
        <!-- <a href="http://www.mathworks.com/matlabcentral/fileexchange/authors/54402"><?php echo _("@Matlab"); ?></a> -->
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
            and
            <a href="http://scholar.google.com/citations?user=fhxshS0AAAAJ" title="Google scholar - Gramfort">
                <?php echo _("Google Scholar"); ?>
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
                <a href="http://openmeeg.github.io">
                    <?php echo _("OpenMEEG"); ?>
                </a>
                <?php echo " - "._("C++ package for low-frequency bio-electromagnetism
including the EEG/MEG forward problem. OpenMEEG implements the Symmetric BEM which has shown to provide very accurate solutions. Some features: parallel processing, Python Bindings, Matlab integration with <a href='http://fieldtrip.fcdonders.nl/'>Fieldtrip</a> and <a href='http://neuroimage.usc.edu/brainstorm/'>BrainStorm</a>."); ?>
            </li>
            <li>
                <a href="http://scikit-learn.org">
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
            <!-- <li>
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
            </li> -->
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

<div id="teaching" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Teaching")." :."; ?>
    </div>
    <div class="part_content">
        &bull; Telecom ParisTech:
        <ul>
            <li><a href="http://enseignements.telecom-paristech.fr/cours.php?id=1009" title="MDI210 Optimisation">MDI210 Optimisation (intro)</a></li>
            <li><a href="http://enseignements.telecom-paristech.fr/cours.php?id=460" title="MDI224 Méthodes d'optimisation continue et applications">MDI224 Optimisation (advanced)</a></li>
            <li><a href="http://enseignements.telecom-paristech.fr/cours.php?id=301" title="SI101 Outils et applications pour le signal, les images et le son">SI101 Signal processing</a></li>
            <li><a href="http://enseignements.telecom-paristech.fr/cours.php?id=508" title="SI341 Méthodes avancées pour le traitement du signal">SI341 Signal processing (advanced)</a></li>
            <li><a href="http://enseignements.telecom-paristech.fr/cours.php?id=465" title="MDI343 Apprentissage statistique et fouille de donnees">MDI343 Machine Learning</a></li>
            <!-- <li></li> -->
        </ul>
        &bull; Univ. Paris 5, <a href="http://www.bme-paris.com/" title="Master BioMedical Engineering (BME-Paris)">Master BioMedical Engineering (BME)</a>:
        <ul>
            <li>Functional neuroimaging with MEG/EEG</li>
        </ul>
        &bull; Univ. Paris 6 UMPC, <a href="http://www-master.ufr-info-p6.jussieu.fr/lmd/specialite/ima/" title="Master informatique : sp&eacute;cialit&eacute; IMA">Master Informatique (Option IMA)</a>:
        <ul>
            <li>Magnetic Resonance Imaging (MRI): From physics to the image processing</li>
            <li>Functional neuroimaging with MEG/EEG</li>
        </ul>
        <br />
    </div>
</div>

<div id="positions" class="block">
    <div class="part_title">
        <div class="slide_button" style="float:right">
            <img alt="expand-collapse" src="img/left.png"/>
        </div>
        <?php echo ".: "._("Available Positions")." :."; ?>
    </div>
    <div class="part_content">
        <ul>
            <li>Master internship on realtime analysis of EEG data using <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a></li>
            <li>Engineer to work on <a href="http://scikit-learn.org/stable/" title="scikit-learn: machine learning in Python &mdash; scikit-learn 0.14 documentation">Scikit-Learn</a></li>
            <li>Engineer to work on <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a></li>
            <li>PhD position on MEG/EEG data analysis (machine learning, signal processing)</li>
        </ul>
        This list is fuzzy so please contact me directly for potential opportunities.
    </div>
</div>

<div id="news">
    <div class="news_title">
        <?php echo ".: "._("News")." :."; ?>
    </div>
    <div class="news_content">
    <ul>
        <li>6 June. 2014: My student Daniel Strohmeier gets the Best Paper Award at <a href="http://www.prni.org/" title="PRNI">PRNI conference</a>
            for <a href="https://dl.dropboxusercontent.com/u/2140486/strohmeier_prni2014.pdf">our work on the M/EEG inverse problem</a>.</li>
        <li>17 June. 2014: I'll be talking on the <a href="http://martinos.org/mne/stable/index.html" title="Google Summer of Code 2014">MNE project</a> at the <a href="http://neuroinf.fr/workshop2014/" title="INCF National Node of France">INCF Paris workshop</a></li>
        <li>24 Aug. 2014: My symposium on supervised learning for M/EEG data analysis has been accepted at <a href="http://www.biomag2014.org/" title="BIOMAG 2014">BIOMAG 2014</a></li>
        <li>3 Sept. 2014: I'll give a talk at the workshop on <a href="http://www2.warwick.ac.uk/fac/sci/statistics/crism/workshops/neuroscience/" title="Statistical Challenges in Neuroscience">Statistical Challenges in Neuroscience</a> in Warwick UK</li>
        <li>8 Jun. 2014: My work will be presented in 2 oral presentations at <a href="http://www.humanbrainmapping.org/" title="Human Brain Mapping conference">Human Brain Mapping conference</a>.</li>
        <li>14-16 May 2014: I'll be teaching MEG/EEG data analysis with <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a> at <a href="http://www.mrc-cbu.cam.ac.uk/" title="Cognition and Brain Sciences Unit">MRC Lab</a> in Cambridge UK</li>
        <li>20 Jan. 2014: I'll be teaching MEG/EEG data analysis with <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a> in Stockholm Karolinska Institute <a href="http://natmeg.se/wp/" title="NatMEG |">NatMEG</a> data analysis <a href="http://natmeg.se/wp/activities/data-analysis-workshop/" title="Data Analysis Workshop  |  NatMEG">workshop</a></li>
        <li>4. Dec. 2013: <a href="http://mne-training-session-paris.eventbrite.com/" title="MNE Training Session in Paris Tickets, Paris - Eventbrite">MNE Training Session</a> in Paris, ICM</li>
        <li>23. Oct. 2013: I'll be at <a href="http://www.neurobureau.org/blog/2013/05/05/announcing-brainhack-2013-in-paris-23-25-october-2013/" title="Announcing Brainhack in Paris, 23-25 October 2013 | The Neuro Bureau">BrainHack</a> in Paris</li>
        <li>7. Oct. 2013: I'll be at <a href="http://www.unitn.it/cimec" title="UNITN | Cimec">CIMEC</a> in Trento, Italy to teach <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a> and <a href="http://scikit-learn.org/stable/" title="scikit-learn: machine learning in Python &mdash; scikit-learn 0.14 documentation">Scikit-Learn</a></li>
        <li>23. Sept. 2013: I'll be in Magdeburg, Germany to teach <a href="http://martinos.org/mne/stable/index.html" title="MNE Home">MNE</a> for the <a href="http://www.timely-cost.eu/?q=time-news" title="Time News | Timely COST">Timely Workshop</a></li>
    </ul>
    </div>
</div>

<?php

include("inc/footer.inc.php");

?>

