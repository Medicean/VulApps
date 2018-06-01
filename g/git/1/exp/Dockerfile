FROM medicean/vulapps:base_lamp

COPY src/base.tar.gz /tmp/base.tar.gz

RUN set -x \
    && a2enmod cgi alias env rewrite \
    && apt-get update \
    && apt-get install -y git=1:1.9.1-1 git-core \
    && rm -rf /var/www/html/* \
    && mkdir -p /var/www/html/repos \
    && tar -zxvf /tmp/base.tar.gz -C /var/www/html/repos/ \
    && apt-get remove -y mysql-server mysql-client \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY src/apache2.conf /etc/apache2/apache2.conf
COPY src/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY src/index.php /var/www/html/index.php
COPY src/build.sh /var/www/html/build.sh
COPY src/start.sh /start.sh

RUN chmod +x /start.sh \
    && chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["/start.sh"]
