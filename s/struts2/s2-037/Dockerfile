# S2-033, S2-037 Vul Demo
FROM tomcat:8-jre8
MAINTAINER Medici.Yan@Gmail.com

WORKDIR /tmp

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && chmod a+x /usr/local/tomcat/bin/*.sh

COPY src/struts2-rest.war /usr/local/tomcat/webapps/ROOT.war
EXPOSE 8080

CMD ["/usr/local/tomcat/bin/catalina.sh", "run"]
