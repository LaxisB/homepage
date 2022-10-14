FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  git \
  unzip \
  libzip-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd zip

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN a2enmod rewrite


RUN groupadd -g 1000 appuser && useradd -r -u 1000 -g appuser appuser && usermod -aG www-data appuser
USER appuser


WORKDIR /var/www/html


COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY composer.json composer.json
COPY composer.lock composer.lock


RUN composer install


COPY assets  /var/www/html/assets
COPY site /var/www/html/site 
COPY content /var/www/html/content
COPY index.php /var/www/html/index.php 
COPY .htaccess /var/www/html

