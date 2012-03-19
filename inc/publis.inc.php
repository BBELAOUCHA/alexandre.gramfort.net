<?php

    require_once 'BibTex.php';

    $bibtex = new Structures_BibTex();
    $bibtex->setOption('extractAuthors',false);
    $ret = $bibtex->loadFile('publis/Gramfort.bib');
    if (PEAR::isError($ret)) {
        die($ret->getMessage());
    }
    $bibtex->parse();

    function clean_bibtex_string($str)
    {
        $bad_chars = array('{','}');
        return str_replace($bad_chars,"",$str);
    }

    function br2nl($str)
    {
        return preg_replace('/<br(\s*)>/i','\n',$str);
    }

    function short_name($name)
    {
        $l = explode(',', $name);
        if (count($l) > 1) {
            $first = trim($l[1]);
            $last = $l[0];
        } else {
            $l = explode(' ', $name);
            $first = $l[0];
            $last = $l[1];
        }
        $sname = $first[0].'. '.$last;
        if ($last == "Gramfort") {
            $sname = '<b>'.$sname.'</b>';
        }
        return $sname;
    }

    $last_year = $bibtex->data[0]['year'];

    $counter = 0;
    echo "<div class='publi-year' style=\"margin-top:10px\">".$last_year." :</div>";
    echo "<ul>";
    foreach ($bibtex->data as $entry) {
        // print_r($entry);
        $html = "";
        if ($entry['year'] != $last_year) {
            $html .= "</ul>";
            $html .= "<div class='publi-year'>".$entry['year']." :</div>";
            $html .= "<ul>";
            $last_year = $entry['year'];
        }
        $html .= "<li>";
        $html .= "<div>";
        $html .= "<div class='publi-title'>".clean_bibtex_string($entry['title'])."</div>";
        if (@$entry['author']) {
            $author = explode(' and ', $entry['author']);
            $author_str = "";
            for ($i=0; $i < count($author); $i++) {
                if ($i > 0) {
                    $author_str .= ", ";
                }
                $author_str .= short_name($author[$i]);
            }
            $html .= "<div class='publi-author'>".$author_str."</div>";
        }
        if (@$entry['booktitle']) {
            $html .= "<div class='publi-booktitle'>".$entry['booktitle']."</div>";
        }
        if (@$entry['journal']) {
            $html .= "<div class='publi-booktitle'>".$entry['journal']."</div>";
        }
        if (@$entry['keywords']) {
            $html .= "<div class='publi-keywords'>"._("Keywords")." : ".$entry['keywords']."</div>";
        }
        if (@$entry['note']) {
            $html .= "<div class='publi-note'>".$entry['note']."</div>";
        }
        $html .= "<span class='thickbox'>";
        if (@$entry['cite'] && @$entry['annote']) {
            $html .= "<a href='#abstract_".$counter."'>[Abstract]</a> ";
        }
        $html .= "<a href='#bibtex_".$counter."'>[BibTeX]</a> ";
        $html .= "</span>";
        if (@$entry['url']) {
            if (preg_match("/pdf/",$entry['url'])) {
                $html .= "<a href='".$entry['url']."'>[pdf]</a>";
            } elseif (preg_match("/hal/",$entry['url'])) {
                $html .= "<a href='".$entry['url']."'>[hal]</a>";
            } else {
                $html .= "<a href='".$entry['url']."'>[www]</a>";
            }
        }
        if (@$entry['cite'] && @$entry['annote']) {
            $html .= "<div class='publi-abstract' id='abstract_".$counter."' >";
            $html .= "<div class='publi-abstract-title'>Abstract ".$entry['cite']."</div>";
            $html .= $entry['annote'];
            $html .= "</div>";
        }
        $html = str_replace("{\\\"a}", "a", $html);
        $html .= "<div class='publi-bibtex' id='bibtex_".$counter."'>";
        $html .= "<div class='publi-bibtex-title'>Bibtex</div>";
        $html .= nl2br($bibtex->bibTexEntry($entry));
        $html .= "</div>";

        $html .= "</div>";
        $html .= "</li>";
        echo $html;
        $counter++;
    }
    echo "</ul>";

?>