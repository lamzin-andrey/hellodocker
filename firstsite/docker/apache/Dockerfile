FROM php:5-apache
 
# PHP extensions
# Строка из примерной статьи. (https://verstaem.com/devops/docker-php-development/?unapproved=1972&moderation-hash=8d5b070ff555fcfeccaa00887fd417ca#comment-1972)
# Комментирую, потому что установить pecl install xdebug 17 02 2020 невозможно для 5-ой версии php, требует седьмую.
#RUN apt-get update && apt-get install -y \
#		libfreetype6-dev \
#		libjpeg62-turbo-dev \
#		libmcrypt-dev \
#		libpng-dev \
#	&& pecl install xdebug \
#	&& docker-php-ext-install -j$(nproc) mbstring pdo_mysql tokenizer mcrypt iconv mysqli \
#	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#	&& docker-php-ext-install -j$(nproc) gd \
#	&& docker-php-ext-enable xdebug


RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libmcrypt-dev \
		libpng-dev \
	&& docker-php-ext-install -j$(nproc) mbstring pdo_mysql tokenizer mcrypt iconv mysqli \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd

# Apache modules
RUN a2enmod rewrite
