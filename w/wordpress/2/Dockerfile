FROM medicean/vulapps:base_wordpress
MAINTAINER cnsolu@163.com

COPY src/mailpress-5.4.2.zip /tmp/mailpress-5.4.2.zip

RUN apt-get install -y unzip

RUN set -x \
    && /etc/init.d/mysql start \
    && unzip -x /tmp/mailpress-5.4.2.zip -d /var/www/html/wp-content/plugins/ \
    && chown -R www-data:www-data /var/www/html/ \
    && wp --path=/var/www/html/ plugin activate mailpress-5.4.2 --allow-root 

EXPOSE 80
CMD ["/start.sh"]