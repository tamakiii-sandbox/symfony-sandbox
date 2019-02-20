FROM php:7.3.2-fpm-alpine

RUN apk add --update make libzip-dev zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin

RUN docker-php-ext-configure zip --with-libzip \
 && docker-php-ext-install zip
