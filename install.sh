#!/bin/bash
sleep 20
composer update
composer install
php artisan optimize:clear
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve --host=0.0.0.0 --port=80
