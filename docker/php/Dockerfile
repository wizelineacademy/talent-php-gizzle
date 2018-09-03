FROM php:fpm

RUN apt-get update &&\
    apt-get install -y git zip unzip &&\
    docker-php-ext-install mbstring pdo pdo_mysql
    
EXPOSE 9000