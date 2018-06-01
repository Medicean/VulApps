FROM medicean/vulapps:base_lamp

RUN set -x \
    && apt-get update \
    && apt-get install -y git=1:1.9.1-1 \
    && rm -rf /var/www/html/* \
    && mkdir -p /var/www/html/repos

COPY src/apache2.conf /etc/apache2/apache2.conf
COPY src/index.php /var/www/html/index.php
COPY src/start.sh /start.sh

RUN chmod +x /start.sh \
    && chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["/start.sh"]
