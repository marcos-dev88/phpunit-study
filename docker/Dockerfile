FROM php:8.0.2-fpm

COPY . /create_user_app

ARG uid=1000
ARG user=marcos_dev

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    nano

RUN rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

CMD ["php-fpm"]
