#!/bin/bash
xgettext  ../*.php ../inc/*.inc.php --default-domain=webinria -L php --from-code UTF-8 --omit-header --sort-by-file --output=fr_FR.po -k_ -j
xgettext  ../*.php ../inc/*.inc.php --default-domain=webinria -L php --from-code UTF-8 --omit-header --sort-by-file --output=en_US.po -k_ -j
