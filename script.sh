#!/usr/bin/expect
#cd $HOME
#git config --global user.email "netgames@abv.bg"
#git config --global user.name "Thenilko"

git status
git add .
git commit -m 'Auto commit and push'
git remote set-url origin https://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@github.com/Thenilko/CMS.git
git push origin main