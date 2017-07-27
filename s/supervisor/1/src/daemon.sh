#!/bin/bash

ps -A | grep supervisord
if [[ $? != 0 ]]; then
    /usr/bin/killall gunicorn
    /usr/local/bin/supervisord -c /etc/supervisor.conf
fi
