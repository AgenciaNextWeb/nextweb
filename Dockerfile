FROM php:5.6-cli
COPY . /usr/src/lumen
WORKDIR /usr/src/lumen
EXPOSE 8000
CMD [ "php", "artisan", "serve" ]