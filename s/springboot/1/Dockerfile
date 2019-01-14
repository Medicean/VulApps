FROM tomcat:8-jre8
MAINTAINER Medici.Yan@Gmail.com

ENV WAR_URL http://vulapps.xuanbo.cc/s/springboot/springboot/spring-boot-sample-tomcat-jsp-1.3.0.RELEASE.war

WORKDIR /tmp

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && chmod a+x /usr/local/tomcat/bin/*.sh \
    && wget -qO /usr/local/tomcat/webapps/ROOT.war $WAR_URL

EXPOSE 8080
CMD ["/usr/local/tomcat/bin/catalina.sh", "run"]