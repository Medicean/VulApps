FROM medicean/vulapps:base_lamp
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

ENV STATIC_URL_JOOMLA http://vulapps.xuanbo.cc/j/joomla/joomla/joomla-3.7.0.zip
# COPY src/joomla_3.7.0.zip /tmp/joomla-3.7.0.zip

RUN set -x \
    && apt-get install -y php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli php5-mcrypt unzip wget\
    && rm -rf /var/www/html/* \
   && wget -q $STATIC_URL_JOOMLA -O /tmp/joomla.zip \
    && unzip -d /var/www/html /tmp/joomla.zip \
    && rm -rf /tmp/joomla.zip

COPY src/configuration.php /var/www/html/configuration.php
COPY src/joomla.sql /tmp/joomla.sql
RUN set -x \
    && chown -R www-data:www-data /var/www/html/ \
    && /etc/init.d/mysql start \
    && mysql -e "CREATE DATABASE joomla DEFAULT CHARACTER SET utf8;" -uroot -proot \
    && mysql -e "use joomla;source /tmp/joomla.sql;" -uroot -proot \
    && rm -rf /var/www/html/installation/ \
    && mv /var/www/html/robots.txt.dist /var/www/html/robots.txt \
    && rm -f /tmp/*

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
