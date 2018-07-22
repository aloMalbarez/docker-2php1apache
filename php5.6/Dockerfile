FROM php:5.6-fpm
RUN docker-php-ext-install pdo pdo_mysql
# RUN docker-php-ext-install bcmath mcrypt json zip

RUN sed -i 's/9000/9001/' /usr/local/etc/php-fpm.d/zz-docker.conf
