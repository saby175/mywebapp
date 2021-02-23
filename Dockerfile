FROM php:7.2-apache
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
#Copy index file
COPY ./index.html /var/www/html/index.html
