#!/usr/bin/env python
# coding:utf-8
import telnetlib
import sys
ip = "172.17.0.3"
gateway = "172.17.0.1"

if len(sys.argv) > 2:
    ip = sys.argv[1]
    gateway = sys.argv[2]

host = "127.0.0.1"
port = 2001
tn = telnetlib.Telnet(host=host, port=port, timeout=3)
tn.write("\n\n")
tn.read_until("ciscoasa>")
tn.write("en\n\n")
tn.read_until("ciscoasa#")
tn.write("configure t\n")
tn.write("int g0\n")
tn.write("ip address %s 255.255.255.0\n" % ip)
tn.write("nameif inside\n")
tn.write("no shutdown\n")
tn.write("exit\n")
tn.write("route inside 0.0.0.0 0.0.0.0 %s\n" % gateway)
tn.write("telnet 0.0.0.0 0.0.0.0 inside\n")
tn.write("snmp-server host inside %s community public\n" % gateway)
tn.write("wr\n")
tn.write("exit\n")
tn.write("exit\n")
tn.write("exit\n")
tn.close()
