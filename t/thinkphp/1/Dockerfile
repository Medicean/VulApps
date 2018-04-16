FROM medicean/vulapps:base_lamp
MAINTAINER Medici.Yan@Gmail.com

ENV TAR_URL http://vulapps.poetn.cc/t/thinkphp/thinkphp_1.tar.gz

COPY src/sources.list /etc/apt/sources.list
COPY src/start.sh /start.sh
RUN apt-get update

RUN apt-get install -y wget
COPY src/apache2.conf /etc/apache2/apache2.conf
RUN set -x \
    && a2enmod rewrite \
    && wget -qO /tmp/thinkphp.tar.gz $TAR_URL \
    && rm -rf /var/www/html/* \
    && tar -zxf /tmp/thinkphp.tar.gz -C /var/www/html \
    && chown -R www-data:www-data /var/www/html \
    && chown -R mysql:mysql /var/lib/mysql /var/run/mysqld \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE vulapps DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use vulapps;source /var/www/html/vulapps.sql;" -uroot -proot \
    && rm -rf /tmp/* /var/cache/apk/* \
    && chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
