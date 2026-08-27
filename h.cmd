echo "# tudao %date% %time%" > README.md
git init
git add . -v
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:henderson2521190431010-ctrl/tudao.git
git push -u origin main