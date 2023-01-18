FROM php:7.4-fpm

# RUN выполняет идущую за ней команду в контексте нашего образа.
# В данном случае мы установим некоторые зависимости и модули PHP.
# Для установки модулей используем команду docker-php-ext-install.
# На каждый RUN создается новый слой в образе, поэтому рекомендуется объединять команды.

WORKDIR /var/www/html

# Install dependencies
#RUN apt-get update && apt-get install -y \
#    build-essential \
#    libpng-dev \
#    libjpeg62-turbo-dev \
#    libfreetype6-dev \
#    locales \
#    zip \
#    jpegoptim optipng pngquant gifsicle \
#    vim \
#    unzip \
#    git \
#    curl

# Install extensions
RUN docker-php-ext-install mysqli
#RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
#RUN docker-php-ext-install gd

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Install composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer



#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["php-fpm"]