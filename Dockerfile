FROM php:7.4.9-fpm

WORKDIR /work/app

RUN curl -sS https://getcomposer.org/installer | \
      php -- --install-dir=/usr/local/bin --filename=composer

RUN apt update && \
    apt install -y --no-install-recommends \
      make \
      libzip-dev \
      && \
    apt clean -y && \
    apt autoremove -y && \
    rm -r /var/lib/apt/lists/*

RUN docker-php-ext-configure zip && \
    docker-php-ext-install zip
