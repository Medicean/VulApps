#!/bin/bash
ldconfig
/etc/init.d/mysql start
/usr/sbin/apachectl -DFOREGROUND