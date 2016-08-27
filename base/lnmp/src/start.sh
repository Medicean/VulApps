#!/bin/bash
/etc/init.d/mysql restart
/etc/init.d/nginx restart
/etc/init.d/php5-fpm restart

/usr/bin/tail -f /dev/null
