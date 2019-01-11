FROM php:7.2.2-fpm

RUN apt-get update && apt-get install -y mysql-client --no-install-recommends \
    && docker-php-ext-install pdo_mysql

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
COPY . /var/www

RUN composer install

RUN chgrp -R www-data storage bootstrap/cache
RUN chmod -R ug+rwx storage bootstrap/cache

RUN php artisan key:generate
RUN php artisan config:cache
