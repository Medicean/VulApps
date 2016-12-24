FROM medicean/vulapps:base_wordpress
MAINTAINER jeremy.jeremy@foxmail.com

COPY src/WordPress-Plugin-CYSTEME-Finder-1.3.zip /tmp/WordPress-Plugin-CYSTEME-Finder-1.3.zip

RUN apt-get install -y unzip

RUN set -x \
    && /etc/init.d/mysql start \
    && unzip -x /tmp/WordPress-Plugin-CYSTEME-Finder-1.3.zip -d /var/www/html/wp-content/plugins/ \
    && chown -R www-data:www-data /var/www/html/ \
    && wp --path=/var/www/html/ plugin activate cysteme-finder --allow-root \
    && rm -rf /tmp/*

EXPOSE 80
CMD ["/start.sh"]
