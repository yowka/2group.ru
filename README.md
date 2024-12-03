## Создание пустого проекта на Laravel 11 в OSPanel
Запускаем OSPanel и открываем консоль
```shell
cd domains
```
Создаём папку для проекта
```shell
mkdir laravel-11.loc
```
Переходим в папку с проектом
```shell
cd laravel-11.loc
```
Создаём новый проект на Laravel  в текущей директории

```shell
composer create-project laravel/laravel .
```
Устанавливаем поддержку API и модуль Sanctum
```shell
php artisan install:api
```
Публикуем кофигурационный файл Cors
```shell
php artisan config:publish cors
```
Создание символической ссылки из директории public/storage к директории storage/app/public

```shell
php artisan storage:link
```
В корне проекта создан файл .htaccess
```php
RewriteEngine on
RewriteRule ^(.*)$ public/$1
```
## Установка проекта из репозитория
Склонируем репозитория в папку domains
```shell
cd domains
git clone https://github.com/yowka/2group.ru.git
```
Перейдем в папку с проектом и установим composer-зависимости
```shell
cd 2group.ru
composer install
```
Скопируем файл .env.example в файл .env
```shell
copy .env.example .env
```
Генерируем ключ шифрования
```shell
php artisan key:generate
```
Меняем файл конфигурации .env (пример для базы данных MySQL)
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Имя_БД
DB_USERNAME=Логин_Пользователя_БД
DB_PASSWORD=Пароль_Пользователя_БД

SESSION_DRIVER=file
```
