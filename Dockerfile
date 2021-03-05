FROM php:7.0-apache
RUN docker-php-ext-install mysqli
#Copy index file
COPY ./index.php /var/www/html/index.php
#Copy getuser file
COPY ./getuser.php /var/www/html/getuser.php
