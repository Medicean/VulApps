FROM ubuntu:16.04

RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list
RUN set -x \
    && apt-get update \
    && apt-get install -y aptitude \
    && aptitude install -y samba-libs=2:4.3.8+dfsg-0ubuntu1 samba=2:4.3.8+dfsg-0ubuntu1 samba-common=2:4.3.8+dfsg-0ubuntu1 samba-common-bin=2:4.3.8+dfsg-0ubuntu1 libwbclient0=2:4.3.8+dfsg-0ubuntu1 libwbclient0=2:4.3.8+dfsg-0ubuntu1 python-samba=2:4.3.8+dfsg-0ubuntu1 samba-dsdb-modules=2:4.3.8+dfsg-0ubuntu1 samba-vfs-modules=2:4.3.8+dfsg-0ubuntu1

EXPOSE 137 138 139 445
COPY src/smb.conf /etc/samba/smb.conf
COPY src/start.sh /start.sh
RUN chmod +x /start.sh
ENTRYPOINT ["/start.sh"]
