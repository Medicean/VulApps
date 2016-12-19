FROM ubuntu:14.04

ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

ENV XUNFENG_ZIP https://github.com/ysrc/xunfeng/archive/master.zip
# 网速慢时使用七牛云
# ENV XUNFENG_ZIP http://oe58q5lw3.bkt.clouddn.com/tools/xunfeng-master.zip
ENV MONGODB_TGZ https://sec.ly.com/mirror/mongodb-linux-x86_64-3.4.0.tgz

# install requirements

RUN set -x \
    && sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list \
    && apt-get update \
    && apt-get install -y wget unzip gcc libssl-dev libffi-dev python-dev libpcap-dev python-pip \
    && pip install pymongo Flask xlwt paramiko \
    && wget -qO /tmp/mongodb.tgz $MONGODB_TGZ \
    && mkdir -p /opt/mongodb \
    && tar zxf /tmp/mongodb.tgz -C /opt/mongodb --strip-components=1 \
    && rm -rf /tmp/mongodb.tgz \
    && mkdir -p /opt/mongodb/data

ENV PATH /opt/node/bin:/opt/mongodb/bin:$PATH

COPY src/mongoauth /tmp/mongoauth
COPY src/start.sh /start.sh

# install xunfeng
RUN set -x \
    && wget -qO /tmp/xunfeng.zip $XUNFENG_ZIP \
    && unzip -x /tmp/xunfeng.zip -d /opt/ \
    && rm -rf /tmp/xunfeng.zip \
    && mv /opt/xunfeng-master /opt/xunfeng \
    && (nohup mongod --port 65521 --dbpath /opt/mongodb/data &) \
    && mongorestore -h 127.0.0.1 --port 65521 -d xunfeng /opt/xunfeng/db/ \
    && (mongo 127.0.0.1:65521/xunfeng < /tmp/mongoauth) \
    && rm -f /tmp/mongoauth \
    && chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
