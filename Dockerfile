FROM php:8.4-fpm

RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

RUN apt-get update && apt-get install -y \
git \
unzip \
&& rm -rf /var/lib/apt/lists/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN rmdir /var/www/html

COPY . /var/www/

RUN chmod -R 777 /var/www/storage

WORKDIR /var/www

RUN composer install
