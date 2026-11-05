
FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    nodejs npm \
    && docker-php-ext-install mbstring exif pcntl bcmath gd zip \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN npm install && npm run build

RUN sed -ri 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
