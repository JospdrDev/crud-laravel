FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev zip libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código al contenedor
WORKDIR /var/www/html
COPY . .

# Instala las dependencias PHP del proyecto
RUN composer install --no-dev --optimize-autoloader

# Cambia permisos
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto para php-fpm (normalmente 9000, pero usaremos artisan serve para deploy)
EXPOSE 8000

# Comando para arrancar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
