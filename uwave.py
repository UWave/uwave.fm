#! /usr/bin/env python

from flask import Flask, render_template
import jinja2.exceptions
app = Flask(__name__)

@app.route("/")
def index():
    return render_template('index.html')

@app.route("/<page>")
def about(page):
    try:
        return render_template('%s.html' % page)
    except jinja2.exceptions.TemplateNotFound:
        return "404"

if __name__ == "__main__":
    app.run(debug=True)
