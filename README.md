# Instalar projeto </br>
1 - Baixe/clone o repositório </br>
2 - Instale as dependências php: composer install </br>
3 - Instale as dependências nodejs: npm install </br>
4 - Altere o arquivo .env.example para .env </br>
5 - Altere o conteudo do arquivo .env com as configurações de banco de dados e email </br>
    - banco de dados </br>
    DB_CONNECTION=mysql </br>
    DB_HOST=127.0.0.1 </br>
    DB_PORT=3306 </br>
    DB_DATABASE=netshowme </br>
    DB_USERNAME=root </br> 
    DB_PASSWORD= </br>
    -  emai </br>
    MAIL_DRIVER=smtp </br>
    MAIL_HOST=smtp.mailtrap.io </br>
    MAIL_PORT=2525 </br> 
    MAIL_USERNAME=null </br>
    MAIL_PASSWORD=null </br>
    MAIL_ENCRYPTION=null </br>
    MAIL_FROM_ADDRESS=null </br>
    MAIL_FROM_NAME="${APP_NAME}" </br>
 </br>
6 - Execute as migrations na linha de comando: php artisan migrate </br>
7 - Inicie a aplicação: php artisan serve </br>
8 - Acesse http://localhost:8000 </br>
