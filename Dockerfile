# Use an official PHP image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install any needed packages using apt-get
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Set up environment variables
ENV MYSQL_HOST=localhost \
    MYSQL_USER=root \
    MYSQL_PASSWORD=secret \
    MYSQL_DATABASE=mydb

# Expose port 80 for Apache
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
