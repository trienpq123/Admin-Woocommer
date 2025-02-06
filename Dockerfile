<<<<<<< HEAD
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
=======
# Stage 1: Build
FROM composer:latest AS build

# Thiết lập thư mục làm việc
WORKDIR /app

# Sao chép các tệp composer vào thư mục làm việc
COPY composer.json composer.lock ./

# Cài đặt các phụ thuộc bằng Composer
# RUN composer install --no-dev --optimize-autoloader

# Sao chép mã nguồn ứng dụng vào thư mục làm việc
COPY . .

# Stage 2: Run
FROM php:8.2-fpm

# Cài đặt các gói cần thiết và PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Sao chép các tệp từ giai đoạn build
COPY --from=build /app /var/www/html

# Thiết lập quyền sở hữu
RUN chown -R www-data:www-data /var/www/html

# Expose cổng 9000 để PHP-FPM lắng nghe
# EXPOSE 9000

# Khởi động PHP-FPM
CMD ["php-fpm"]
>>>>>>> 91c698627fd695c05faa1935846aa5e9f4ed8764
