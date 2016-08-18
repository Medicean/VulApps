FROM ubuntu:14.04
COPY src/zabbix-release_2.4-1+trusty_all.deb /tmp/zabbix-release.deb

RUN set -x \
    && dpkg -i /tmp/zabbix-release.deb \
    && sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list \
    && apt-get update \
    && apt-get install -y wget snmpd snmptt 

# install mysql
RUN echo "mysql-server-5.5 mysql-server/root_password password zabbix" | debconf-set-selections \
    && echo "mysql-server-5.5 mysql-server/root_password_again password zabbix" | debconf-set-selections \
    && apt-get -y install mysql-server-5.5

# install zabbix-server-mysql
RUN echo "zabbix-server-mysql zabbix-server-mysql/dbconfig-install boolean true" | debconf-set-selections \
    && echo "zabbix-server-mysql zabbix-server-mysql/mysql/admin-pass password zabbix" | debconf-set-selections \
    && echo "zabbix-server-mysql zabbix-server-mysql/mysql/app-pass password zabbix" | debconf-set-selections \
    && echo "zabbix-server-mysql zabbix-server-mysql/password-confirm password zabbix" | debconf-set-selections \
    && /usr/bin/mysqld_safe & \
    apt-get install -y zabbix-server-mysql

# install zabbix-frontend-php
RUN apt-get install -y zabbix-frontend-php

# PHP time zone set
COPY src/php.ini /etc/php5/apache2/php.ini

# install language-pack-zh-hans
RUN apt-get -y install language-pack-zh-hans

COPY src/zabbix.conf /etc/apache2/conf-available/zabbix.conf
RUN mkdir -p /etc/zabbix/web
COPY src/zabbix.conf.php /etc/zabbix/web/zabbix.conf.php
RUN sed -i '/DocumentRoot/c\\tDocumentRoot /usr/share/zabbix' /etc/apache2/sites-enabled/000-default.conf

RUN /etc/init.d/mysql start \
    && mysql -uroot -pzabbix -e "use zabbix;INSERT INTO ids VALUES ('profiles','profileid',2);INSERT INTO profiles VALUES (1,2,'web.menu.login.last',0,0,0,'index.php','',3),(2,2,'web.paging.lastpage',0,0,0,'index.php','',3);INSERT INTO sessions VALUES ('4f4ddfdc198bd46ade9c6af250af80d1',2,1471503201,0),('666cdcba136beefe3adb309ad8b686f7',2,1471503201,0);"

# Expose the Ports
EXPOSE 10050 10051 80

# set start script
COPY src/start.sh /start.sh
RUN chmod 755 /start.sh
CMD ["/bin/bash","/start.sh"]
