#!/usr/bin/expect
#cd $HOME
#git config --global user.email "netgames@abv.bg"
#git config --global user.name "Thenilko"
source ./.env
git remote set-url origin https://@github.com/Thenilko/CMS.git
git status
git add .
git commit -m 'Auto commit and push'
git push origin main