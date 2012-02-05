<?php
    // phpinfo();
    // die();
    $title = _("PhD: Mapping, timing and tracking cortical activations with MEG and EEG");
    include("config.php");
    include("inc/header.inc.php");
?>

<h1>
    <?= _("PhD Thesis") ?>
</h1>

<div class="block">
    <div class="part_title">
        <div id="phd_title">
            <?php echo _("Mapping, timing and tracking cortical activations with MEG and EEG: Methods and application to human vision."); ?>
        </div>
    </div>
    <div class="part_content">
        <div >
            <div style="float:left; text-align:center">
                <a href="http://tel.archives-ouvertes.fr/docs/00/42/68/52/PDF/phd_gramfort_2009.pdf">
                    <?php echo _("Download PDF") ?>
                    <br/>
                    <img src="img/download.png" width="100px">
                </a><br/>
                <small><?php echo _("Last update: ")."<br/> 2 oct. 2009"; ?></small>
            </div>
            <div id="bibtex">
                <pre>
  @phdthesis{gramfort:09,
      Affiliation = {Telecom ParisTech},
      Author = {A Gramfort},
      Title = {{Mapping, timing and tracking cortical activations with MEG and
                EEG: Methods and application to human vision}},
      Url = {<a href="http://tel.archives-ouvertes.fr/tel-00426852/fr/">http://tel.archives-ouvertes.fr/tel-00426852/fr/</a>},
      Year = {2009}
  }
                </pre>
                <table border="0">
                    <tr>
                        <td style="text-align:right"><em><strong><?php echo _("Supervised by"); ?> : </strong></em></td>
                        <td>
                            <a href="http://www-sop.inria.fr/members/Maureen.Clerc/index.<?php echo $lang; ?>.html">
                                Maureen Clerc
                            </a>
                            <?php echo _("and"); ?>
                            <a href="http://www-sop.inria.fr/members/Olivier.Faugeras/index.<?php echo $lang; ?>.html">
                                Olivier Faugeras
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right"><strong><?php echo _("Award"); ?> : </strong></em></td>
                        <td>
                            <a href="http://www.fondation.eads.net/en/2010-best-thesis-prize-winners">
                                <?php echo _("EADS Best Thesis"); ?>
                            </a>
                            <?php echo _("in the category interdisciplinary research."); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="phd_images">
            <div style="text-align:center">
                <div class="phd_image">
                    <img src="img/forward_pb.png" width="170" height="170" alt="EEG MEG Forward Problem"> <br> Forward Problem
                </div>
                <div class="phd_image">
                    <img src="img/inverse.png" width="170" height="170" alt="EEG MEG Inverse Problem"> <br> Inverse Problem
                </div>
                <div class="phd_image">
                    <img src="img/retino.png" width="170" height="170" alt="EEG MEG Inverse Problem"> <br> Retinotopic mapping
                </div>
                <div class="phd_image">
                    <img src="img/tracking.png" width="170" height="170" alt="EEG MEG Inverse Problem"> <br> Tracking with graph-cuts
                </div>
                <div class="phd_image">
                    <img src="img/realign.png" width="170" height="170" alt="EEG MEG Inverse Problem"> <br> Single-trial analysis
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include("inc/footer.inc.php");

?>

