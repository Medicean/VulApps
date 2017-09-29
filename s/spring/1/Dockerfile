FROM openjdk:8-jdk
MAINTAINER Medici.Yan@Gmail.com

ENV JAR_URL http://vulapps.poetn.cc/s/spring/spring-data-rest/spring-data-rest-cve-2017-8046_v2.jar

COPY src/start.sh /start.sh

RUN set -x \
    && chmod a+x /start.sh \
    && mkdir /htdocs \
    && wget -qO /htdocs/ROOT.jar $JAR_URL

EXPOSE 8080

CMD ["/start.sh"]
