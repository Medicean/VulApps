FROM ubuntu:14.04.4
MAINTAINER Medici.Yan@Gmail.com

WORKDIR /tmp
RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
RUN apt-get update \
    && apt-get install -y apache2 

COPY openssl_1.0.1c-4ubuntu8_amd64.deb /tmp/openssl_1.0.1c-4ubuntu8_amd64.deb
COPY libssl1.0.0_1.0.1c-4ubuntu8_amd64.deb /tmp/libssl1.0.0_1.0.1c-4ubuntu8_amd64.deb

RUN dpkg --force-all -i openssl_1.0.1c-4ubuntu8_amd64.deb \
    && dpkg --force-all -i libssl1.0.0_1.0.1c-4ubuntu8_amd64.deb \
    && rm -f /tmp/libssl1.0.0_1.0.1c-4ubuntu8_amd64.deb \
    && rm -f /tmp/openssl_1.0.1c-4ubuntu8_amd64.deb

RUN mkdir /etc/apache2/ssl \
    && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/apache.key -out /etc/apache2/ssl/apache.crt -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=localhost" \
    && rm -f /etc/apache2/sites-available/default-ssl.conf

COPY default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

RUN a2enmod ssl \
    && a2ensite default-ssl.conf

EXPOSE 443

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]