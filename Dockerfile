FROM composer:2.0.9 AS composer

FROM php:8.0-fpm-alpine

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk add $PHPIZE_DEPS zlib-dev linux-headers
RUN pecl install grpc && docker-php-ext-enable grpc
RUN docker-php-ext-install sockets
