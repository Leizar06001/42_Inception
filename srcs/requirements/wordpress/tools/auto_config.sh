#!/bin/bash

#sleep 5
#rm /var/www/wordpress/wp-config.php

cd /var/www/wordpress
rm -f wp-config.php
mv /wp-config.php /var/www/wordpress/wp-config.php

sed -i -r "s/db1/$SQL_DATABASE/1" wp-config.php
sed -i -r "s/user/$SQL_USER/1" wp-config.php
sed -i -r "s/pwd/$SQL_PASSWORD/1" wp-config.php

wp core install --url=$DOMAIN_NAME/ --title=$WP_TITLE --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_MAIL --skip-email --allow-root
wp user create $WP_USER $WP_MAIL --role=author --user_pass=$WP_PWD --allow-root

mkdir /run/php
/usr/sbin/php-fpm7.3 -F