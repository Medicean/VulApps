FROM debian:jessie
# change source list
# RUN sed -i 's/deb.debian.org/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

ENV REDIS_VERSION 3.0.7
ENV REDIS_DOWNLOAD_URL http://download.redis.io/releases/redis-3.0.7.tar.gz
ENV REDIS_DOWNLOAD_SHA1 e56b4b7e033ae8dbf311f9191cf6fdf3ae974d1c

RUN buildDeps='gcc libc6-dev make' \
    && set -x \
    && apt-get update && apt-get install -y wget $buildDeps --no-install-recommends \
    && wget -O redis.tar.gz "$REDIS_DOWNLOAD_URL" \
    && echo "$REDIS_DOWNLOAD_SHA1 *redis.tar.gz" | sha1sum -c - \
    && mkdir -p /usr/src/redis \
    && tar -xzf redis.tar.gz -C /usr/src/redis --strip-components=1 \
    && rm redis.tar.gz \
    && make -C /usr/src/redis \
    && make -C /usr/src/redis install \
    && rm -r /usr/src/redis \
    && apt-get purge -y --auto-remove $buildDeps

COPY src/redis.conf /etc/redis.conf

RUN mkdir /data
WORKDIR /data

# install openssh server
RUN apt-get install -y openssh-server \
    && mkdir -p /root/.ssh/

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 22 6379
CMD ["/start.sh"]
