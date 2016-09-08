FROM ubuntu:14.04
MAINTAINER Medici.Yan@Gmail.com

RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Update sources
RUN apt-get update -y

RUN apt-get install -y vim wget telnet python qemu bridge-utils openvpn uml-utilities


RUN mkdir -p /opt/asa842/
COPY src/asa842-initrd.gz /opt/asa842/asa842-initrd.gz
COPY src/asa842-vmlinuz /opt/asa842/asa842-vmlinuz
COPY src/FLASH /opt/asa842/FLASH
COPY src/configure.py /configure.py

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 2001
CMD ["/start.sh"]

# iptables -t nat -A DOCKER -p tcp --dport 23 -j DNAT --to 172.17.0.5:23
