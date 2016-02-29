#! /usr/bin/env python

from flask import Flask, render_template, request
import jinja2.exceptions
app = Flask(__name__)

@app.route("/")
def index():
    contentonly = False
    if "contentonly" in request.args:
        contentonly = True
    return render_template('index.html', contentonly=contentonly)

@app.route("/<page>")
def fullpage(page):
    contentonly = False
    if "contentonly" in request.args:
        contentonly = True
    try:
        return render_template('%s.html' % page, contentonly=contentonly)
    except jinja2.exceptions.TemplateNotFound:
        return "404"


if __name__ == "__main__":
    app.run(debug=True)
