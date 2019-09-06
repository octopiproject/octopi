@echo off

echo octopi
git add *
git commit -m "%*"
git push
echo

cd public/markdown
echo octopi\docs
git add *
git commit -m "%*"
git push
echo

cd ../