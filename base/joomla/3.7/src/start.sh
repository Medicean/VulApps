#!/bin/bash
/etc/init.d/mysql start
/etc/init.d/apache2 restart
/usr/bin/tail -f /dev/null
