FROM ubuntu:14.04
MAINTAINER Medici.Yan@Gmail.com
ENV LC_ALL C.UTF-8
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

ENV XUNFENG_ZIP https://github.com/ysrc/xunfeng/archive/master.zip
# 网速慢时使用七牛云
# ENV XUNFENG_ZIP http://oe58q5lw3.bkt.clouddn.com/tools/xunfeng-master.zip
ENV MONGODB_TGZ https://sec.ly.com/mirror/mongodb-linux-x86_64-3.4.0.tgz

# install requirements
# RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list \
#     && mkdir -p ~/.pip \
#     && echo "[global]" > ~/.pip/pip.conf \
#     && echo "timeout=60" >> ~/.pip/pip.conf \
#     && echo "index-url = https://pypi.tuna.tsinghua.edu.cn/simple" >> ~/.pip/pip.conf

RUN set -x \
    && apt-get update \
    && apt-get install -y wget unzip gcc libssl-dev libffi-dev python-dev libpcap-dev python-pip \
    && ln -s /usr/lib/x86_64-linux-gnu/libpcap.so /usr/lib/x86_64-linux-gnu/libpcap.so.1 \
    && wget -qO /tmp/mongodb.tgz $MONGODB_TGZ \
    && mkdir -p /opt/mongodb \
    && tar zxf /tmp/mongodb.tgz -C /opt/mongodb --strip-components=1 \
    && rm -rf /tmp/mongodb.tgz \
    && mkdir -p /opt/mongodb/data

ENV PATH /opt/mongodb/bin:$PATH

COPY src/mongoauth /opt/mongodb/mongoauth
COPY src/start.sh /start.sh

# install xunfeng
RUN set -x \
    && wget -qO /tmp/xunfeng.zip $XUNFENG_ZIP \
    && unzip -x /tmp/xunfeng.zip -d /opt/ \
    && rm -rf /tmp/xunfeng.zip \
    && mv /opt/xunfeng-master /opt/xunfeng \
    && pip install -r /opt/xunfeng/requirements.txt \
    && chmod a+x /opt/xunfeng/masscan/linux_64/masscan \
    && (nohup mongod --port 65521 --dbpath /opt/mongodb/data &) \
    && mongorestore -h 127.0.0.1 --port 65521 -d xunfeng /opt/xunfeng/db/ \
    && (mongo 127.0.0.1:65521/xunfeng < /opt/mongodb/mongoauth) \
    # && rm -f /opt/mongodb/mongoauth \
    && chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]
