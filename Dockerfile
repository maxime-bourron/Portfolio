# Image de production du portfolio : PHP 8.4 avec le serveur FrankenPHP
FROM dunglas/frankenphp:1-php8.4

RUN install-php-extensions pdo_mysql intl opcache zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV APP_ENV=prod \
    APP_DEBUG=0 \
    SERVER_NAME=:80 \
    COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /app

# Dépendances d'abord, pour profiter du cache de Docker
COPY composer.json composer.lock symfony.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

COPY . .

RUN composer dump-autoload --no-dev --classmap-authoritative \
    && composer dump-env prod \
    && composer run-script --no-dev post-install-cmd \
    && php bin/console asset-map:compile \
    && mkdir -p public/documents
