FROM wordpress

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Copiar configuración personalizada de Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
