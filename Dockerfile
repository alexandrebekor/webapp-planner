# Ambiente de Desenvolvimento
FROM php:8.0-fpm as dev

# Argumentos definidos no docker-compose.yml
ARG user
ARG uid

# Instalar as dependencias do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Limpar o cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar as extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Baixar última versão do Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
