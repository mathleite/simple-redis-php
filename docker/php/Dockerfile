FROM php:8-fpm-buster

RUN apt-get update && apt-get install -y curl git zip unzip \
    && pecl install xdebug-3.0.0 \
    && docker-php-ext-enable xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer