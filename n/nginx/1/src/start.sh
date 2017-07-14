#!/bin/bash
/etc/init.d/nginx restart
/etc/init.d/apache2 restart

/usr/bin/tail -f /dev/null
