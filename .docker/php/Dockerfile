FROM php:8.0-fpm-alpine

RUN apk add shadow && usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN chmod 777 /dev/stdout /dev/stderr

RUN apk --update add wget \
  curl \
  git \
  grep \
  build-base \
  libmcrypt-dev \
  libxml2-dev \
  zlib-dev \
  autoconf \
  cyrus-sasl-dev \
  libgsasl-dev \
  composer \
  supervisor \
  libpng-dev \
  freetype-dev \
  libjpeg-turbo-dev \
  libjpeg-turbo-utils \
  openssh \
  htop \
  nano \
  ghostscript \
  imagemagick-dev \
  libzip-dev \
  wkhtmltopdf \
  jpegoptim \
  optipng \
  pngquant \
  pngcrush \
  gifsicle \
  bash

RUN apk add --update --no-cache graphviz font-bitstream-type1

RUN echo '* * * * * php /var/www/html/artisan schedule:run' | crontab -u www-data -
RUN rm -rf /var/spool/cron/crontabs/root

RUN docker-php-ext-install mysqli pdo pdo_mysql tokenizer xml zip exif
RUN pecl channel-update pecl.php.net \
    && pecl install redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis \
    && docker-php-ext-install gd \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install bcmath

# install imagick
# use github version for now until release from https://pecl.php.net/get/imagick is ready for PHP 8
RUN mkdir -p /usr/src/php/ext/imagick \
    && curl -fsSL https://github.com/Imagick/imagick/archive/06116aa24b76edaf6b1693198f79e6c295eda8a9.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1 \
    && docker-php-ext-install imagick

RUN rm /var/cache/apk/* && \
    mkdir -p /var/www && \
    chown www-data:www-data /var/www -R

CMD ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisord.conf"]

USER www-data

RUN composer global require laravel/envoy

ENV PATH "$PATH:/home/www-data/.composer/vendor/bin"
