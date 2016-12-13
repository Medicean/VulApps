#!/bin/bash
/etc/init.d/mysql restart
/etc/init.d/apache2 restart
/usr/bin/tail -f /dev/null
