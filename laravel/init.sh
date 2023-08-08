#!/bin/bash

C='\033[0;36m'
N='\033[0m' # No Color

chmod -R 777 storage

echo ${C}  "Launching docker containers."${N}
docker-compose up -d
echo ${C}  "Docker containers launched."${N}
echo ${C}  "Building app inside containers."${N}
composer install
composer require php-open-source-saver/jwt-auth
php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
php artisan module:use
php artisan module:enable
php artisan optimize
php artisan migrate:fresh
php artisan db:seed
composer update
php artisan config:cache
php artisan view:cache
php artisan route:cache
php artisan event:cache
echo ${C}  "App is ready at localhost:8080." ${N}
