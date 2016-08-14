FROM medicean/vulapps:base_lamp
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

COPY src/wordpress-4.5.3-zh_CN.tar.gz /tmp/wordpress-4.5.3-zh_CN.tar.gz
COPY src/wordpress.sql /tmp/wordpress.sql
COPY src/apache2.conf /etc/apache2/apache2.conf

RUN set -x \
    && apt-get install -y php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli unzip \
    && ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/ \
    && rm -rf /var/www/html/* \
    && tar -zxf /tmp/wordpress-4.5.3-zh_CN.tar.gz -C /var/www/html --strip-components=1 \
    && rm -rf /tmp/wordpress-4.5.3-zh_CN.tar.gz

COPY src/.htaccess /var/www/html/.htaccess
COPY src/wp-config.php /var/www/html/wp-config.php
COPY src/wp-cli.phar /usr/bin/wp

RUN set -x \
    && chmod a+x /usr/bin/wp \
    && chown -R www-data:www-data /var/www/html/ \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use wordpress;source /tmp/wordpress.sql;" -uroot -proot \
    && rm -f /tmp/wordpress.sql

EXPOSE 80
CMD ["/start.sh"]