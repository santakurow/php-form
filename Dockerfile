FROM php:7.4.8-cli
RUN docker-php-ext-install bcmath pdo_mysql mysqli

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp


