FROM tomcat:8-jre8
MAINTAINER Medici.Yan@Gmail.com

ENV WAR_URL http://oe58q5lw3.bkt.clouddn.com/s/struts2/struts2/s2-046.war

WORKDIR /tmp

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && chmod a+x /usr/local/tomcat/bin/*.sh \
    && wget -qO /usr/local/tomcat/webapps/ROOT.war $WAR_URL

EXPOSE 8080
CMD ["/usr/local/tomcat/bin/catalina.sh", "run"]