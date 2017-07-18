FROM ubuntu:14.04

MAINTAINER Medici.Yan@Gmail.com
ENV LC_ALL C.UTF-8
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

### APT source list
# RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list

COPY src/supervisord.conf /etc/supervisord.conf
COPY src/start.sh /start.sh

RUN set -x \
    && apt-get update \
    && apt-get install -y vim git python3 python3-dev python3-pip python-pip mongodb \
    && git clone https://github.com/0xbug/Hawkeye.git /opt/hawkeye

COPY src/config.ini /opt/hawkeye/config.ini

WORKDIR /opt/hawkeye

RUN set -x \
    && pip install supervisor \
    && bash -c "pip install virtualenv \
    && virtualenv --python=/usr/bin/python3 venv \
    && source venv/bin/activate \
    && pip install -r deploy/requirements.txt" \
    && rm -rf /var/lib/apt/lists \
    && chmod +x /start.sh



CMD ["/start.sh"]
