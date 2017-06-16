#!/bin/bash
/etc/init.d/mysql restart
/etc/init.d/apache2 restart
/etc/init.d/exim4 start

/usr/bin/tail -f /dev/null
