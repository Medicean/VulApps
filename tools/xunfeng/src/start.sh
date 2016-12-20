#!/bin/bash
XUNFENG_BASE=/opt/xunfeng
XUNFENG_LOG=/var/log/xunfeng

mkdir -p ${XUNFENG_LOG}

nohup /opt/mongodb/bin/mongod --port 65521 --dbpath=/opt/mongodb/data > ${XUNFENG_LOG}/db.log &

mongo 127.0.0.1:65521/xunfeng < /opt/mongodb/mongoauth

nohup python ${XUNFENG_BASE}/Run.py > ${XUNFENG_LOG}/web.log &
nohup python ${XUNFENG_BASE}/aider/Aider.py > ${XUNFENG_LOG}/aider.log &
nohup python ${XUNFENG_BASE}/nascan/NAScan.py > ${XUNFENG_LOG}/scan.log &
nohup python ${XUNFENG_BASE}/vulscan/VulScan.py > ${XUNFENG_LOG}/vul.log &

/usr/bin/tail -f /dev/null
