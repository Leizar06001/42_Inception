FROM debian:buster

RUN apt update
RUN apt install -y nginx
RUN apt install -y curl
RUN apt install -y nano

RUN mkdir -p /etc/nginx/ssl

RUN apt install -y openssl

COPY /tools/script.sh /
RUN chmod +x /script.sh

RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

CMD [ "/script.sh" ]
