FROM php:7.3.4-fpm-alpine3.9
WORKDIR /var/www
#RUN chmod -R 777 /var/www/storage
RUN apk update && apk add --no-cache \
  freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  git vim unzip tzdata \
  libmcrypt-dev \
  libltdl \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

