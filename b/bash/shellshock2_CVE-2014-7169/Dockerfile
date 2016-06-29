FROM httpd:2.2
MAINTAINER Medici.Yan@Gmail.com

WORKDIR /tmp

RUN apt-get -y update \
    && apt-get -y install wget build-essential bison autoconf \
    && mkdir /usr/local/src/bash \
    && wget -qO- https://ftp.gnu.org/gnu/bash/bash-4.3.tar.gz | tar zx -C /usr/local/src/bash --strip-components=1 \
    && cd /usr/local/src/bash \
    && wget -qO- $(seq -f "https://ftp.gnu.org/gnu/bash/bash-4.3-patches/bash43-%03g" 25) | patch -p0 \
    && ./configure \
    && make \
    && make install \
    && rm -rf /usr/local/src/bash \
    && rm /bin/bash \
    && ln -s /usr/local/bin/bash /bin/bash
# Same PoC
RUN cd /usr/local/apache2 \
    && wget -qO /usr/local/apache2/cgi-bin/poc.cgi https://raw.githubusercontent.com/Medicean/VulApps/master/b/bash/shellshock1_CVE-2014-6271/poc.cgi \
    && chmod a+x /usr/local/apache2/cgi-bin/poc.cgi \
    && echo "<a href='/cgi-bin/poc.cgi'>poc.cgi</a>" > /usr/local/apache2/htdocs/index.html \
    && chmod a+x htdocs/index.html \
    && apt-get purge -y --auto-remove wget build-essential bison autoconf

# EXPOSE 80

# 1. docker build .
# 2. docker run -d -p 80:80 xxxxxx