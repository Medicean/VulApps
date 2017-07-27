#!/bin/bash
/usr/sbin/cron restart
/usr/local/bin/supervisord -c /etc/supervisor.conf
/usr/bin/tail -f /dev/null
