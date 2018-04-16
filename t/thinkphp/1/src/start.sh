#!/bin/bash
chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
/etc/init.d/mysql restart
/etc/init.d/apache2 restart
/usr/bin/tail -f /dev/null
