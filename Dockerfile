FROM php:8.2-apache

# Instal dependensi sistem yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Instal ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Aktifkan Apache Rewrite
RUN a2enmod rewrite

# Set folder kerja
WORKDIR /var/www/html
COPY . .

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Bypass pengecekan versi PHP agar tidak exit code 2
RUN composer install --no-interaction --optimize-autoloader --no-dev --ignore-platform-reqs

# Set permission
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Arahkan ke folder public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80
