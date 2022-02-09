#!/bin/bash
#cd $HOME
#git config --global user.email "netgames@abv.bg"
#git config --global user.name "Thenilko"

#curl -u "Thenilko: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" https://github.com/Thenilko/CMS.git
git add .
git commit -m 'Auto commit and push'
git push origin main

expect "Username for 'https://github.com':"
send "Thenilko"