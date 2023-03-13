FROM ubuntu:latest

# Set timezone to America/New_York
ENV TZ=America/New_York

# Update and install packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y apache2 php libapache2-mod-php mysql-server php-mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Create database and user
RUN service mysql start && \
    mysql -u root -e "CREATE USER 'user1'@'localhost' IDENTIFIED BY 'MaNF48Fc';" && \
    mysql -u root -e "CREATE DATABASE php;" && \
    mysql -u root -e "GRANT ALL PRIVILEGES ON php.* TO 'user1'@'localhost';" && \
    service mysql stop

# Set permissions for Apache to access files
RUN chown -R www-data:www-data /var/www/html/ && \
    chmod -R 755 /var/www/html/

# Expose ports
EXPOSE 80

# Start Apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
