FROM medicean/vulapps:base_lamp

COPY src/apache2.conf /etc/apache2/apache2.conf

RUN rm -rf /var/www/html/* \
    && a2enmod rewrite

WORKDIR /var/www/html
COPY src/files.tar.gz /tmp/files.tar.gz

# https://www.drupal.org/node/3060/release
ENV DRUPAL_VERSION 8.3.0
ENV DRUPAL_MD5 1dcce599eddba07eb00e8879937525c3

RUN curl -fSL "http://vulapps.xuanbo.cc/d/drupal/drupal/drupal-${DRUPAL_VERSION}.tar.gz" -o drupal.tar.gz \
    && echo "${DRUPAL_MD5} *drupal.tar.gz" | md5sum -c - \
    && tar -xz --strip-components=1 -f drupal.tar.gz \
    && rm drupal.tar.gz \
    && ls -al /var/www/html/sites/default \
    && tar -zxf /tmp/files.tar.gz -C /var/www/html/sites/default/ \
    && rm /tmp/files.tar.gz \
    && chown -R www-data:www-data sites modules themes

COPY src/drupal.sql /tmp/drupal.sql
COPY src/settings.php /var/www/html/sites/default/settings.php

RUN set -x \
    && chown -R www-data:www-data /var/www/html/sites/ \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE drupal DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use drupal;source /tmp/drupal.sql;" -uroot -proot \
    && rm -f /tmp/drupal.sql

COPY src/start.sh /start.sh

RUN chmod a+x /start.sh

EXPOSE 80
ENTRYPOINT ["/start.sh"]
