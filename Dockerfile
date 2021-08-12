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

# Criar usuário de sistema para executar comandos Composer e Artisan
# RUN useradd -G www-data,root -u $uid -d /home/$user $user
# RUN mkdir -p /home/$user/.composer && \
#     chown -R $user:$user /home/$user

WORKDIR /var/www

# USER $user

# # Ambiente de Produção
# FROM dev as prod

# # Copia todos os arquivos para dentro da imagem
# COPY . /var/www/html
# WORKDIR /var/www/html

# # Copia o arquivo .env de produção
# RUN mv .env.prod .env

# # Otimiza para produção
# RUN composer install --optimize-autoloader --no-dev
# RUN composer install --no-dev --no-interaction
# RUN npm run prod
# RUN php artisan config:cache
# RUN php artisan route:cache
# RUN php artisan view:cache
# RUN chown -R www-data:www-data /var/www/html