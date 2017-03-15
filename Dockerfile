FROM php:5.6-cli
COPY . /usr/src/lumen
WORKDIR /usr/src/lumen

RUN apt-get update && \
	apt-get install git zip libmemcached-dev zlib1g-dev -y && \
	pecl install memcached-2.2.0 && \
    docker-php-ext-enable memcached
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
	php composer-setup.php && \
	php -r "unlink('composer-setup.php');" && \
	php composer.phar install
CMD [ "php", "-S", "0.0.0.0:8000", "-t", "public/" ]