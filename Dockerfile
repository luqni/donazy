FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libfreetype6-dev \
    libgmp-dev \
    zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd exif gmp zip pdo_mysql
    
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Laravel permissions
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www/storage

CMD php artisan serve --host=0.0.0.0 --port=8001
