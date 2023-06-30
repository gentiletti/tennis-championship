FROM php:8.1-apache

ENV APP_HOME /var/www/html
ENV USERNAME=www-data
ARG UID=1000
ARG GID=1000

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    npm \
    && docker-php-ext-install pdo_mysql zip

# Habilitar el reescritor de URL de Apache
RUN a2enmod rewrite

# Copiar los archivos de la aplicación a la imagen
COPY . $APP_HOME

# Configurar el directorio de trabajo
WORKDIR $APP_HOME

# Agregar variable de entorno para permitir la ejecución de plugins de Composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Instalar las dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Ejecutar Composer para instalar las dependencias de PHP
RUN composer install

# Instalar las dependencias de NPM y generar los archivos de construcción
RUN npm install
RUN npm run build

# Establecer los permisos adecuados para los archivos y directorios
RUN mkdir -p $APP_HOME/public && \
  mkdir -p /home/$USERNAME && chown $USERNAME:$USERNAME /home/$USERNAME \
  && usermod -u $UID $USERNAME -d /home/$USERNAME \
  && groupmod -g $GID $USERNAME \
  && chown -R ${USERNAME}:${USERNAME} $APP_HOME

# Generar una clave de aplicación única
RUN php artisan key:generate

# Configurar la variable de entorno de Laravel
ENV APP_ENV=local

# Configurar el directorio raíz del servidor web
RUN sed -i -e 's/html/html\/public/g' /etc/apache2/sites-available/000-default.conf

# Iniciar el servidor Apache
CMD ["apache2-foreground"]
