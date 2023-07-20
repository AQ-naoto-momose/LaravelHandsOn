FROM php:8.2-fpm

ENV TZ=Asia/Tokyo \
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.4.4 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install lsb-release gnupg && \
    curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
        zlib1g-dev \
        libzip-dev \
        libpng-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpq-dev \
        git \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql opcache

COPY ./ecs/php-fpm/www.conf /etc/php-fpm.d/www.conf
COPY ./ecs/php-fpm/php.ini /usr/local/etc/php
COPY ./ecs/php-fpm/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www/app

COPY ./app /var/www/app
#COPY ./app/.env.prd /var/www/app.env

RUN chmod -R 777 storage

RUN composer install

RUN npm install
RUN npm run build
#RUN npm run production

CMD ["php-fpm", "--allow-to-run-as-root"]