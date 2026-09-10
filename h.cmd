@echo off
chcp 65001 >nul

echo Criando README.md...

(
echo # 🚀 Tudão %date% %time%
echo.
echo ^> Projeto desenvolvido para estudos e práticas de desenvolvimento web.
echo.
echo ---
echo.
echo ## 📋 Sobre o projeto
echo.
echo O **Tudão** é um projeto desenvolvido com o objetivo de colocar em prática conceitos de programação, desenvolvimento web, banco de dados e organização de projetos.
echo.
echo ## 🛠️ Tecnologias utilizadas
echo.
echo - 💻 HTML
echo - 🎨 CSS
echo - ⚡ JavaScript
echo - 🐘 PHP
echo - 🗄️ MySQL
echo - 🔧 Git e GitHub
echo.
echo ## 📁 Estrutura do projeto
echo.
echo ```text
echo tudao/
echo ├── public/
echo ├── src/
echo ├── vendor/
echo └── README.md
echo ```
echo.
echo ## ▶️ Como executar
echo.
echo 1. Clone este repositório:
echo.
echo ```bash
echo git clone git@github.com:henderson2521190431010-ctrl/tudao.git
echo ```
echo.
echo 2. Entre na pasta:
echo.
echo ```bash
echo cd tudao
echo ```
echo.
echo 3. Configure o banco de dados, caso necessário.
echo.
echo 4. Execute o projeto utilizando o servidor adequado.
echo.
echo ## 📌 Funcionalidades
echo.
echo - Cadastro de usuários
echo - Listagem de informações
echo - Edição de dados
echo - Exclusão de dados
echo - Integração com banco de dados
echo - Interface web
echo.
echo ## 👨‍💻 Autor
echo.
echo **Henderson Marcello dos Santos José**
echo.
echo ---
echo.
echo ⭐ Se este projeto foi útil, considere deixar uma estrela no repositório!
) > README.md

echo.
echo README.md criado com sucesso!
echo.

git init
git add .
git commit -m "docs: cria README profissional"
git branch -M main

git remote -v

echo.
echo Se o remote origin ja existir, o proximo push sera feito normalmente.
echo.
git push -u origin main

start https://github.com/henderson2521190431010-ctrl/tudao