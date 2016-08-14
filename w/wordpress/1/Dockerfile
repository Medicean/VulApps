FROM medicean/vulapps:base_wordpress
MAINTAINER Medici.Yan@Gmail.com

COPY src/double-opt-in-for-download.2.0.9.zip /tmp/double-opt-in-for-download.2.0.9.zip

RUN apt-get install -y unzip

RUN set -x \
    && /etc/init.d/mysql start \
    && unzip -x /tmp/double-opt-in-for-download.2.0.9.zip -d /var/www/html/wp-content/plugins/ \
    && chown -R www-data:www-data /var/www/html/ \
    && wp --path=/var/www/html/ plugin activate double-opt-in-for-download --allow-root 

EXPOSE 80
CMD ["/start.sh"]