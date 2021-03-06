FROM php:7.3.6-apache

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql bcmath sockets && a2enmod rewrite

COPY apache.conf /etc/apache2/sites-enabled/000-default.conf