FROM debian:buster

RUN apt-get update
RUN apt-get -y install wget
RUN apt-get -y install php7.3 --no-install-recommends
RUN apt-get -y install php-fpm
RUN apt-get -y install php-mysql
RUN apt-get -y install mariadb-client

RUN wget https://fr.wordpress.org/wordpress-6.4-fr_FR.tar.gz -P /var/www
RUN cd /var/www && tar -xzf wordpress-6.4-fr_FR.tar.gz
RUN cd /var/www && rm wordpress-6.4-fr_FR.tar.gz
# RUN chown -R root:root /var/www/wordpress

COPY /conf/www.conf /etc/php/7.3/fpm/pool.d/

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

COPY /conf/wp-config.php /

COPY /tools/auto_config.sh /
RUN chmod +x /auto_config.sh
CMD ["./auto_config.sh"]
