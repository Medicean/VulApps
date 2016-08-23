FROM kgtw/ubuntu_lamp

COPY src/wordpress-4.4.tar.gz /tmp/wordpress-4.4.tar.gz
COPY src/wordpress.sql /tmp/wordpress.sql
COPY src/ImageMagick-6.7.9-10.tar.gz /tmp/ImageMagick-6.7.9-10.tar.gz
COPY src/imagick-3.3.0.tar.gz /tmp/imagick-3.3.0.tar.gz
COPY src/re2c-0.13.7.5.tar.gz /tmp/re2c-0.13.7.5.tar.gz

RUN set -x \
    && apt-get update \
    && apt-get install -y php5-mysql php5-dev php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli unzip \
    && rm -rf /var/www/html/* \
    && tar -zxf /tmp/wordpress-4.4.tar.gz -C /var/www/html --strip-components=1 \
    && rm -rf /tmp/wordpress-4.4.tar.gz \
    && tar -zxf /tmp/ImageMagick-6.7.9-10.tar.gz -C /var/www/ \
    && tar -zxf /tmp/imagick-3.3.0.tar.gz -C /var/www/ \
    && tar -zxf /tmp/re2c-0.13.7.5.tar.gz -C /var/www/

COPY src/.htaccess /var/www/html/.htaccess
COPY src/wp-config.php /var/www/html/wp-config.php
COPY src/wp-cli.phar /usr/bin/wp
COPY src/phpinfo.php /var/www/html/phpinfo.php
COPY src/testimag.php /var/www/html/testimag.php
COPY src/upload.php /var/www/html/upload.php

RUN set -x \
    && chmod a+x /usr/bin/wp \
    && chown -R www-data:www-data /var/www/html/ \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use wordpress;source /tmp/wordpress.sql;" -uroot -proot \
    && rm -f /tmp/wordpress.sql \
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


COPY src/start.sh /start.sh
RUN chmod a+x /start.sh
EXPOSE 80
CMD ["/start.sh"]
# CMD ["supervisord", "-n"]