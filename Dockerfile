FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf