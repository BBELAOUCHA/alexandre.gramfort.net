<?php

ini_set('include_path',".:..:./inc:../inc:../../inc:../../../inc");
if ($_SERVER['HTTP_HOST'] == "localhost")
    $site_root = "http://localhost/agramfort";
else
    $site_root = "http://alexandre.gramfort.net";

?>
