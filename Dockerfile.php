FROM php:8.1-fpm-alpine

WORKDIR /app

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer* ./
RUN composer install --optimize-autoloader --no-interaction --no-dev

RUN mkdir ./logs
RUN mkdir ./www

# COPY ./php.ini /usr/local/etc/php/php.ini
COPY ./www /app/www

RUN chown -R www-data:www-data /app
RUN chmod -R 755 /app

CMD ["php-fpm", "-F"]