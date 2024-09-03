# Base image
FROM php:8.2-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
  curl \
  git \
  vim \
  openssl \
  pcre \
  libpng-dev \
  libjpeg-turbo-dev \
  freetype-dev \
  libzip-dev \
  zlib-dev \
  php-cli \
  php-phar

# Install and enable PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Verify Composer installation
RUN composer --version

# Copy composer.json and lock file
COPY composer.json composer.lock ./

# Install project dependencies
RUN composer install --no-interaction --optimize-autoloader

# Copy project files
COPY . .

# Set environment variables
ENV APP_ENV development
ENV APP_DEBUG 1

# Expose the container's port
EXPOSE 8000

# Run the application
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
