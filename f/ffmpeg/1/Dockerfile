FROM jrottenberg/ffmpeg:3.1.3-ubuntu

# RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list
# ENV TZ=Asia/Shanghai
# RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN set -x \
    && apt-get update \
    && apt-get install -y apache2 php php-dev libapache2-mod-php php-cli \
    && chown -R www-data:www-data /var/www/html/ \
    && rm -rf /var/www/html/* 

COPY src/index.php /var/www/html/index.php
COPY src/start.sh /start.sh

RUN set -x \
    && rm -rf /var/lib/apt/lists \
    && chmod +x /start.sh

EXPOSE 80

ENTRYPOINT ["/start.sh"]
