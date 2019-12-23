# vue-laravel-auth
Открываем первую консоль:
 - cd путь к проекту/api
 - composer update
 - Меняем .env файл
 - php artisan key:generate
 - php artisan jwt:secret
 - php artisan serv

Открываем вторую консоль:
 - cd путь к проекту/client
 - npm install или npm i (мне прост нравится первый вариант)
 - npm run serve

UPD:
 - Если у вас вылетает ошибка, то пишем в консоль с клиентом: rm -rf package-lock.json node_modules 
