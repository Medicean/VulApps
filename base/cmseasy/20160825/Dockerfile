FROM medicean/vulapps:base_lamp
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

ENV CMSEASY_URL http://vulapps.xuanbo.cc/c/cmseasy/cmseasy/CmsEasy_5.6_UTF-8_20160825.tar.gz

# COPY src/CmsEasy_5.6_UTF-8_20160825.tar.gz /tmp/cmseasy.tar.gz
COPY src/cmseasy.sql /tmp/cmseasy.sql

RUN set -x \
    && apt-get install -y php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli wget unzip \
    && wget -qO /tmp/cmseasy.tar.gz $CMSEASY_URL \
    && rm -rf /var/www/html/* \
    && tar -zxf /tmp/cmseasy.tar.gz -C /var/www/html --strip-components=1 \
    && /etc/init.d/mysql restart \
    && mysql -e "CREATE DATABASE cmseasy DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use cmseasy;source /tmp/cmseasy.sql;" -uroot -proot \
    && rm -f /var/www/html/install/index.php \
    && echo "install-locked !" > /var/www/html/install/locked

COPY src/config.inc.php /var/www/html/celive/include/config.inc.php
COPY src/config.php /var/www/html/config/config.php

RUN set -x \
    && chown -R www-data:www-data /var/www/html/ \
    && rm -rf /tmp/*

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
