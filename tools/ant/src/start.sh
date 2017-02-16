#!/bin/bash
if [[ "$EMAIL_ADDR" && "$EMAIL_PASSWORD" ]]; then
    sed -i "s/email@user.com/${EMAIL_ADDR}/g" /htdocs/ant-master/web/modules/mail.js
    sed -i "s/email-password/${EMAIL_PASSWORD}/g" /htdocs/ant-master/web/modules/mail.js
fi

if [[ "$SMTP_HOST" && "$SMTP_PORT" ]]; then
    sed -i "s/smtp.qq.com/${SMTP_HOST}/g" /htdocs/ant-master/web/modules/mail.js
    sed -i "s/465/${SMTP_PORT}/g" /htdocs/ant-master/web/modules/mail.js
fi

nohup mongod -f /htdocs/ant-master/database/db.conf > /var/log/mongodb.log &
cd /htdocs/ant-master/database
mongorestore

cd /htdocs/ant-master/web
nohup node app &
/usr/bin/tail -f /dev/null
