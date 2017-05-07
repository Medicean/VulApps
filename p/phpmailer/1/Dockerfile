FROM debian:jessie

# RUN sed -i 's/deb.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list
# ENV TZ=Asia/Shanghai
# RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN set -x \
    && rm -rf /etc/apt/sources.list.d/* \
    && apt-get update \
    && apt-get upgrade -y \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y apache2 php5 python sendmail unzip \
    && apt-get clean \
    && rm -rf /var/www/html/* \
    && rm -rf /var/lib/apt/lists/*

COPY src/index.php /var/www/html/
COPY src/phpmailer-5.2.17.zip /tmp/

RUN unzip -d /var/www/html /tmp/phpmailer-5.2.17.zip \
    && chown -R www-data:www-data /var/www/html \
    && rm -rf /tmp/* 

EXPOSE 80

COPY src/start.sh /start.sh
RUN chmod +x /start.sh
ENTRYPOINT ["/start.sh"]
CMD ["default"]
