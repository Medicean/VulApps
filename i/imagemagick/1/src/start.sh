#!/bin/bash
ldconfig

/etc/init.d/apache2 restart
/usr/bin/tail -f /dev/null
