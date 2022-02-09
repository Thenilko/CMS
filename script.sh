#!/usr/bin/expect
#cd $HOME
#git config --global user.email "netgames@abv.bg"
#git config --global user.name "Thenilko"

git remote set-url origin https://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@github.com/Thenilko/CMS.git
git status
git add .
git commit -m 'Auto commit and push'
git push origin main