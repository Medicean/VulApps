#!/usr/bin/env python
# coding:utf-8

from flask import Flask, request, render_template
app = Flask(__name__)


@app.route('/')
def index():
    headers = request.headers
    host = headers.get('HOST', "127.0.0.1")
    host = host.split(":")[0]
    return render_template('index.html', host=host)

if __name__ == '__main__':
    app.debug = False
    app.run(threaded=True, port=8800, host='0.0.0.0')
