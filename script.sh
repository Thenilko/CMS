#!/usr/bin
source ./.env
git remote set-url origin https://$accessToken@github.com/Thenilko/CMS.git
git status
git add .
git commit -m 'Auto commit and push'
git push origin main