FROM medicean/vulapps:base_lamp
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

COPY src/Discuz_X3.2_SC_UTF8.zip /tmp/discuz.zip
COPY src/install.zip /tmp/install.zip
COPY src/discuz.sql /tmp/discuz.sql

RUN apt-get install -y unzip

WORKDIR /tmp
RUN set -x \
    && apt-get install -y php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli unzip \
    && rm -rf /var/www/html/* \
    && unzip -x /tmp/discuz.zip \
    && unzip -x /tmp/install.zip \
    && cp -r /tmp/upload/* /var/www/html/ \
    && cp -r /tmp/install/* /var/www/html/ \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE discuz DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use discuz;source /tmp/discuz.sql;" -uroot -proot \
    && rm -rf /tmp/* \
    && chown -R www-data:www-data /var/www/html

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
