FROM ubuntu:14.04
MAINTAINER Medici.Yan <Medici.Yan@Gmail.com>

RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# install nodejs
ARG NODE_URL=http://vulapps.xuanbo.cc/n/nodejs/nodejs/node-v4.3.2-linux-x64.tar.gz
RUN apt-get update \
    && apt-get install -y wget unzip \
    && wget -qO /tmp/nodejs.tar.gz $NODE_URL \
    && mkdir -p /opt/node \
    && tar zxf /tmp/nodejs.tar.gz -C /opt/node --strip-components=1 \
    && ln -s /opt/node/bin/node /usr/bin/node \
    && ln -s /opt/node/bin/npm /usr/bin/npm \
    && rm -f /tmp/nodejs.tar.gz \
    && mkdir -p /htdocs

COPY src/nodejs-unserialize-rce.zip /tmp/nodejs-unserialize-rce.zip
RUN set -x \
    && unzip -d /htdocs /tmp/nodejs-unserialize-rce.zip \
    && rm -f /tmp/nodejs-unserialize-rce.zip

EXPOSE 80
WORKDIR /htdocs
CMD ["node", "index.js"]
