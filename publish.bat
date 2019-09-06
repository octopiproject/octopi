@echo off

git add *
git commit -m "%*"
git push

cd public/markdown
git add *
git commit -m "%*"
git push

cd ../