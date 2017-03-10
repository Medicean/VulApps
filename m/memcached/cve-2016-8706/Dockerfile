FROM medicean/vulapps:m_memcached_CVE-2016-8704
MAINTAINER xiao-xing <xiao_xing@hansight.com>

USER root
COPY valgrind.sh /valgrind.sh
RUN chmod a+x /valgrind.sh

USER memcache

EXPOSE 11211

CMD ["./memcached", "-S", "-vv"]
