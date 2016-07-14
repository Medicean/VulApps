# S2-032 Vul Demo
FROM tomcat:8-jre8
MAINTAINER Medici.Yan@Gmail.com

ENV APP_ZIP_URL https://raw.githubusercontent.com/Medicean/VulApps/master/s/struts2/s2-032/

WORKDIR /tmp

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && curl -fSL "$APP_ZIP_URL" -o s2-032.war \
    && mv s2-032.war /usr/local/tomcat/webapps/ROOT.war \
    && chmod a+x /usr/local/tomcat/bin/*.sh

EXPOSE 8080
CMD ["/usr/local/tomcat/bin/catalina.sh", "run"]

# 1. docker build .
# 2. docker run -d -p 80:8080 xxxxxx
# http://localhost/
