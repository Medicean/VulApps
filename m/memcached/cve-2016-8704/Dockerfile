FROM ubuntu:16.04
MAINTAINER xiao-xing <xiao_xing@hansight.com>

# ADD sources.list /etc/apt/sources.list

RUN apt-get update
RUN apt-get install -y gcc make wget libevent-dev libc6-dev perl

WORKDIR /opt
RUN apt-get remove -y libmemcached-dev \
    && apt-get -y autoremove \
    && apt-get install -y libsasl2-dev build-essential \
    && wget -qO /opt/libmemcached.tar.gz https://launchpad.net/libmemcached/1.0/1.0.18/+download/libmemcached-1.0.18.tar.gz \
    && tar zxf libmemcached.tar.gz \
    && cd libmemcached-1.0.18/ \
    && ./configure --enable-sasl \
    && make \
    && make install

RUN wget http://www.memcached.org/files/memcached-1.4.31.tar.gz \
    && tar zxvf memcached-1.4.31.tar.gz

WORKDIR /opt/memcached-1.4.31
RUN ./configure --enable-sasl \
    && make \
    # && make test \
    && make install

RUN groupadd -r memcache \
    && useradd -r -g memcache memcache

COPY valgrind.sh /valgrind.sh
RUN apt-get install -y valgrind \
    && chmod a+x /valgrind.sh

USER memcache

EXPOSE 11211

CMD ["./memcached", "-vv"]
