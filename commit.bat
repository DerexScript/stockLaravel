@ECHO OFF
cd C:\xampp\htdocs\stock
git add .
git add --all
git commit -m "Commit_%date%_%time:~0,8%"
git push origin main