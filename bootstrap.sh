# Update Packages
apt-get update
# Upgrade Packages
apt-get upgrade

# Basic Linux Stuff
apt-get install -y git

# Apache
apt-get install -y apache2

# Enable Apache Mods
a2enmod rewrite

# Add Ondrej PPA Repo
apt-add-repository ppa:ondrej/php
apt-get update

# Install PHP
apt-get install -y php8.0

# PHP Apache Mod
apt-get install -y libapache2-mod-php8.0

# Restart Apache
service apache2 restart

# PHP Mods
apt-get install -y php8.0-common
apt-get install -y php8.0-mcrypt
apt-get install -y php8.0-zip

# Set MySQL Pass
debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'

# Install MySQL
apt-get install -y mysql-server

# PHP-MySQL Lib
apt-get install -y php8.0-mysql

# Apache Restart
sudo service apache2 restart
