#!/usr/bin/env bash

rm -rf localhost
sudo /Applications/MAMP/bin/apache2/bin/apachectl start
wget -r http://localhost/agramfort
sudo /Applications/MAMP/bin/apache2/bin/apachectl stop

rm -rf deploy
mv localhost/agramfort deploy
touch deploy/.nojekyll
perl -e "s/http:\/\/localhost\/agramfort\//./g;" -pi.save $(find deploy/ -type f)
find deploy -name "*.save" | xargs rm -f
echo alexandre.gramfort.net > deploy/CNAME
rm -rf localhost

ghp-import -p deploy -r origin
