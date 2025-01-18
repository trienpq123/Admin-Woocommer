# Production stage
FROM php:8.2-fpm-alpine

# Install essential extensions and dependencies
# Thêm các package cần thiết vào Dockerfile
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql

# Copy composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer
# Setup working directory
WORKDIR /var/www/html

# Copy app files
COPY . .

# Copy environment file
COPY .env /var/www/html

# Install composer dependencies
RUN composer install --no-dev --no-interaction --no-progress --no-suggest

# Set permissions
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


# Expose port 80
EXPOSE 80

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]