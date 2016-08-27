FROM ubuntu:14.04
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Update sources
RUN apt-get update -y

RUN apt-get install -y vim bash-completion unzip build-essential gcc g++ autoconf libiconv-hook-dev libmcrypt-dev libxml2-dev libmysqlclient-dev libcurl4-openssl-dev libjpeg8-dev libpng12-dev libfreetype6-dev snmp mcrypt

# install mysql
RUN echo "mysql-server-5.5 mysql-server/root_password password root" | debconf-set-selections \
    && echo "mysql-server-5.5 mysql-server/root_password_again password root" | debconf-set-selections \
    && apt-get -y install mysql-server-5.5 mysql-client

# nginx php
RUN apt-get install -y nginx php5-fpm php5 php5-common php5-mysql php5-curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-snmp php5-sqlite php5-tidy php5-xmlrpc php5-xsl php5-xcache php5-mcrypt

COPY src/default /etc/nginx/sites-available/default
COPY src/phpinfo.php /usr/share/nginx/html/phpinfo.php

RUN chown -R www-data:www-data /usr/share/nginx/html \
    && ln -s /usr/share/nginx/html /html

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80 443
CMD ["/start.sh"]
