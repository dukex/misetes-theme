#!/usr/bin/env bash

set -x

VERSION_DATABASE=1

USER=vagrant
USER_HOME=/home/$USER
SETUP_DIR=$USER_HOME/.setup

mkdir -p $SETUP_DIR

export DEBIAN_FRONTEND=noninteractive

aptitude update

if [ ! -f $SETUP_DIR/install-$VERSION_DATABASE ]; then
  echo mysql-server mysql-server/root_password_again password root | sudo debconf-set-selections
  echo mysql-server mysql-server/root_password password root | sudo debconf-set-selections
  aptitude install mysql-server -y

  mysql -u root -proot -e 'CREATE DATABASE wordpress'
  mysql -u root -proot -e 'CREATE USER wordpress@localhost;'
  mysql -u root -proot -e 'SET PASSWORD FOR wordpress@localhost= PASSWORD("wordpress");'
  mysql -u root -proot -e "GRANT ALL PRIVILEGES ON wordpress.* TO wordpress@localhost IDENTIFIED BY 'wordpress';"
  mysql -u root -proot -e 'FLUSH PRIVILEGES;'

  touch $SETUP_DIR/install-$VERSION_DATABASE
fi

aptitude install php5-mysql libapache2-mod-auth-mysql php-mbstring php5-gd libapache2-mod-php5

a2enmod rewrite

echo "<VirtualHost *:80>
  ServerAdmin dukekhaos@gmail.com
  DocumentRoot /var/www
  <Directory /var/www>
      Options FollowSymLinks
      AllowOverride Limit Options FileInfo
      DirectoryIndex index.php
      Order allow,deny
      Allow from all
  </Directory>
  <Directory /var/www/wp-content>
      Options FollowSymLinks
      Order allow,deny
      Allow from all
  </Directory>
</VirtualHost>" >  /etc/apache2/sites-enabled/000-default
service apache2 restart
