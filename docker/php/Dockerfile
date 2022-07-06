FROM php:8.1.7-fpm-alpine3.16

RUN set -ex
RUN apk add $PHPIZE_DEPS

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY ./docker/php/php.ini $PHP_INI_DIR/php.ini

ENV PHP_IDE_CONFIG="serverName=xdebug-training"

RUN pecl install xdebug
RUN docker-php-ext-enable --ini-name xdebug.ini xdebug
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
