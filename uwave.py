#! /usr/bin/env python
from flask import Flask, render_template, request, send_from_directory
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

@app.route('/favicon.ico')
def favicon():
    return send_from_directory(os.path.join(app.root_path, 'static'),
                               'favicon.ico', mimetype='image/vnd.microsoft.icon')

if __name__ == "__main__":
    app.run(debug=True)
