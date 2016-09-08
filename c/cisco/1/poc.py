#!/usr/bin/env python
# -*- coding: utf-8 -*-
# Author: Medici.Yan
# Exp: https://github.com/offensive-security/exploit-database-bin-sploits/raw/master/sploits/40258.zip

import socket
import struct


def sendsnmp(ip, data):
    ret = ''
    try:
        UDPClient = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
        UDPClient.settimeout(4)
        UDPClient.sendto(data, (ip, 161))
        ret, addr = UDPClient.recvfrom(1024)
    except socket.error, msg:
        # connection reset by peer
        # port not open
        if msg.errno == 10054:
            return None
    finally:
        UDPClient.close()
    return ret


def make_get_request(community):
    request_id = 601835777
    data = '\x02\x01\x00\x04' + struct.pack("b", len(community)) + community + '\xa0\x1c\x02\x04'+ struct.pack("!I", request_id) + '\x02\x01\x00\x02\x01\x00\x30\x0e\x30\x0c\x06\x08\x2b\x06\x01\x02\x01\x01\x01\x00\x05\x00'
    message = '\x30' + struct.pack("b", len(data)) + data
    return message


def get_ver_string(ret, community):
    request_id = 601835777
    if ret[0] != "\x30":
        return None
    community_len = struct.unpack("b", ret[6])[0]
    if community_len != len(community):
        return None
    data_index = 7 + community_len
    if ret[data_index] != "\xa2":
        return None
    ret_request_id = struct.unpack(
        "!I", ret[data_index + 4: data_index + 8])[0]
    if ret_request_id != request_id:
        return None
    ver_string = ret[data_index + 30:]
    return ver_string


def parse_ver_string(vers_string):
    if vers_string == "Cisco Adaptive Security Appliance Version 8.0(2)":
        return "asa802"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.0(3)":
        return "asa803"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.0(3)6":
        return "asa803-6"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.0(4)":
        return "asa804"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.0(4)32":
        return "asa804-32"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.0(5)":
        return "asa805"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.2(1)":
        return "asa821"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.2(2)":
        return "asa822"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.2(3)":
        return "asa823"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.2(4)":
        return "asa824"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.2(5)":
        return "asa825"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.3(1)":
        return "asa831"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.3(2)":
        return "asa832"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.4(1)":
        return "asa841"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.4(2)":
        return "asa842"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.4(3)":
        return "asa843"
    elif vers_string == "Cisco Adaptive Security Appliance Version 8.4(4)":
        return "asa844"
    else:
        return None


def assign(service, arg):
    if service == fingerprint.snmp:
        return True, arg


def audit(arg):
    ip = arg['ip']
    community = arg['community']
    message = make_get_request(community)
    ret = sendsnmp(ip, message)
    ver_string = ""
    vul_version = ""
    if ret:
        ver_string = get_ver_string(ret, community)
    if ver_string:
        vul_version = parse_ver_string(ver_string)
    if vul_version:
        security_hole(
            "Cisco %s SNMP 远程命令执行: [ip=>%s];[community=>%s];[ver_string=> %s]" % (vul_version, ip, community, ver_string))

if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.snmp, {"ip": '172.17.0.3', "community": "public"})[1])