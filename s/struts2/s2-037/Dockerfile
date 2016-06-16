# S2-033, S2-037 Vul Demo
FROM tomcat:8-jre8
MAINTAINER Medici.Yan@Gmail.com

ENV S2_VERSION 2.3.20.1
ENV APP_ZIP_URL http://archive.apache.org/dist/struts/2.3.20.1/struts-$S2_VERSION-apps.zip

WORKDIR /tmp

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && curl -fSL "$APP_ZIP_URL" -o struts-apps.zip \
    && unzip -j struts-apps.zip -d struts-apps \
    && mv struts-apps/struts2-rest-showcase.war /usr/local/tomcat/webapps/ROOT.war \
    && chmod a+x /usr/local/tomcat/bin/*.sh \
    && rm -rf struts*

EXPOSE 8080

CMD ["/usr/local/tomcat/bin/catalina.sh", "run"]

# 1. docker build .
# 2. docker run -d -p 80:8080 xxxxxx
