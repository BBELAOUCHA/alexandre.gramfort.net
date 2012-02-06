#!/bin/bash
XGETTEXT=/usr/local/Cellar/gettext/0.18.1.1/bin/xgettext

${XGETTEXT} ../*.php ../inc/*.inc.php --default-domain=webinria -L php --from-code UTF-8 --omit-header --sort-by-file --output=fr_FR.po -k_ -j
${XGETTEXT}  ../*.php ../inc/*.inc.php --default-domain=webinria -L php --from-code UTF-8 --omit-header --sort-by-file --output=en_US.po -k_ -j
