#!/bin/bash
if [[ "$GITHUB_USER" && "$GITHUB_PASSWORD" ]]; then
    sed -i "s/githubuser/${GITHUB_USER}/g" /opt/hawkeye/config.ini
    sed -i "s/githubpassword/${GITHUB_PASSWORD}/g" /opt/hawkeye/config.ini
else
    echo "Error: You must set GITHUB_USER, GITHUB_PASSWORD."
    exit 1
fi

if [[ "$MAIL_USER" && "$MAIL_PASSWORD" ]]; then
    sed -i "s/ENABLE = 0/ENABLE = 1/g" /opt/hawkeye/config.ini
    sed -i "s/mailfrom/${MAIL_USER}/g" /opt/hawkeye/config.ini
    sed -i "s/mailpassword/${MAIL_PASSWORD}/g" /opt/hawkeye/config.ini
else
    echo "Email Disabled."
    echo "You can set MAIL_USER, MAIL_PASSWORD, MAIL_SERVER, MAIL_PORT to enable Email."
    echo "Default MAIL_SERVER = smtp.qq.com "
    echo "Default MAIL_PORT = 587 "
fi

if [[ "$MAIL_SERVER" ]]; then
    sed -i "s/smtp.qq.com/${MAIL_SERVER}/g" /opt/hawkeye/config.ini
fi

if [[ "$MAIL_PORT" ]]; then
    sed -i "s/MAIL_PORT = 587/MAIL_PORT = ${MAIL_PORT}/g" /opt/hawkeye/config.ini
fi

/usr/sbin/cron restart
/etc/init.d/mongodb restart
/usr/local/bin/supervisord -c /etc/supervisord.conf
/usr/bin/tail -f /dev/null
