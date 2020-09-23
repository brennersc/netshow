# Instalar projeto </br>
1 - Baixe/clone o repositório </br>
2 - Instale as dependências php: composer install </br>
3 - Instale as dependências nodejs: npm install </br>
4 - Altere o arquivo .env.example para .env </br>
5 - Altere o conteudo do arquivo .env com as configurações de banco de dados e email </br>
    - banco de dados
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=netshowme
    DB_USERNAME=root
    DB_PASSWORD=
    -  emai
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

6 - Execute as migrations na linha de comando: php artisan migrate </br>
7 - Inicie a aplicação: php artisan serve </br>
8 - Acesse http://localhost:8000 </br>
