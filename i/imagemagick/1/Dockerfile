FROM medicean/vulapps:base_lamp

COPY src/ImageMagick-6.7.9-10.tar.gz /tmp/ImageMagick-6.7.9-10.tar.gz
COPY src/imagick-3.3.0.tar.gz /tmp/imagick-3.3.0.tar.gz
COPY src/re2c-0.13.7.5.tar.gz /tmp/re2c-0.13.7.5.tar.gz

RUN set -x \
    && apt-get update \
    && apt-get install -y php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli unzip \
    && rm -rf /var/www/html/* \
    && tar -zxf /tmp/ImageMagick-6.7.9-10.tar.gz -C /var/www/ \
    && tar -zxf /tmp/imagick-3.3.0.tar.gz -C /var/www/ \
    && tar -zxf /tmp/re2c-0.13.7.5.tar.gz -C /var/www/

COPY src/phpinfo.php /var/www/html/phpinfo.php
COPY src/testimag.php /var/www/html/testimag.php
COPY src/poc.php /var/www/html/poc.php
COPY src/index.php /var/www/html/index.php
COPY src/poc.png /poc.png

RUN set -x \
    && chown -R www-data:www-data /var/www/html/ \
    && apt-get install -y build-essential checkinstall && apt-get build-dep -y imagemagick \
    && cd /var/www/ImageMagick-6.7.9-10 \
    && ./configure \
    && make clean \
    && make \
    && checkinstall

ENV ldconfig /usr/local/lib

RUN set -x \
    && apt-get install -y pkg-config \
    && sudo apt-get install -y libpcre3-dev \
    && cd /var/www/re2c-0.13.7.5 \
    && ./configure \
    && make \
    && make install \
    && cd /var/www/imagick-3.3.0 \
    && /usr/bin/phpize \
    && ./configure \
    && make \
    && checkinstall \
    && php5enmod imagick \
    && echo "extension=imagick.so" >> /etc/php5/apache2/php.ini \
    && echo -e "; configuration for php imagick module \n; priority=20 \nextension=imagick.so" >> /etc/php5/mods-available/imagick.ini \
    && ln -s /etc/php5/mods-available/imagick.ini /etc/php5/apache2/conf.d/20-imagick.ini \
    && rm /etc/php5/mods-available/gd.ini

RUN rm -f /bin/sh \
    && ln -s /bin/bash /bin/sh \
    && rm -rf /tmp/*

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
