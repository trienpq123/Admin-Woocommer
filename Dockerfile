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