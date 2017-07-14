FROM nginx:1.13.1
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

COPY src/nginx.conf /etc/nginx/nginx.conf
COPY src/default.conf /etc/nginx/conf.d/default.conf
COPY src/start.sh /start.sh
COPY src/index.html /usr/share/nginx/html/index.html

RUN set -x \
    && apt-get update \
    && apt-get install -y apache2 \
    && chmod +x /start.sh

COPY src/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY src/ports.conf /etc/apache2/ports.conf

COPY src/demo.png /var/www/html/demo.png
WORKDIR /tmp

CMD ["/start.sh"]
