FROM ubuntu:14.04

MAINTAINER Medici.Yan@Gmail.com
ENV LC_ALL C.UTF-8
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

### APT source list
# RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list

### Install Node.js
ARG NODE_URL=http://oe58q5lw3.bkt.clouddn.com/n/nodejs/nodejs/node-v4.3.2-linux-x64.tar.gz
RUN apt-get update \
    && apt-get install -y wget \
    && wget -qO /tmp/nodejs.tar.gz $NODE_URL \
    && mkdir -p /opt/node \
    && tar zxf /tmp/nodejs.tar.gz -C /opt/node --strip-components=1 \
    && ln -s /opt/node/bin/node /usr/bin/node \
    && ln -s /opt/node/bin/npm /usr/bin/npm \
    && rm -f /tmp/nodejs.tar.gz \
    && mkdir -p /htdocs

ARG MONGO_URL=http://oe58q5lw3.bkt.clouddn.com/m/mongodb/mongodb/mongodb-linux-x86_64-ubuntu1404-3.2.0.tgz
RUN apt-get update \
    && apt-get install -y wget \
    && wget -qO /tmp/mongodb.tgz $MONGO_URL \
    && mkdir -p /opt/mongodb \
    && tar zxf /tmp/mongodb.tgz -C /opt/mongodb --strip-components=1 \
    && mkdir -p /var/data \
    && rm -f /tmp/mongodb.tgz

ENV PATH /opt/node/bin:/opt/mongodb/bin:$PATH

VOLUME /var/data
ARG ANT_ZIP=http://oe58q5lw3.bkt.clouddn.com/tools/ant/ant-1.0.zip
RUN apt-get update \
    && apt-get install -y wget unzip \
    && wget -qO /tmp/ant.zip $ANT_ZIP \
    && unzip -d /htdocs /tmp/ant.zip \
    && rm /tmp/ant.zip

WORKDIR /tmp
COPY src/db.conf /htdocs/ant-master/database/db.conf
RUN set -x \
    && (nohup mongod -f /htdocs/ant-master/database/db.conf &) \
    && cd /htdocs/ant-master/database \
    && mongorestore \
    && rm -f /tmp/nohup.out

WORKDIR /htdocs/ant-master/web
RUN npm install

COPY src/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 3000
ENTRYPOINT ["/start.sh"]
CMD ["tail", "-f", "/dev/null"]
