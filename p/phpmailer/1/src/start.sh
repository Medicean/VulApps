#!/bin/bash

grep "127.0.0.1 $(hostname) vulnerable.com" /etc/hosts
if [[ $? != 0 ]]; then
    echo "127.0.0.1 $(hostname) vulnerable.com" >> /etc/hosts
fi

# Start apache
/etc/init.d/apache2 restart

# sleep 3
# Start our fake smtp server
python -m smtpd -n -c DebuggingServer localhost:25

tail -f /dev/null
