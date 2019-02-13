import os

from flask import Flask
from flask import redirect, url_for, render_template

def create_app():
    app = Flask(__name__, instance_relative_config=True)

    app.config.from_mapping(
        DATABASE=os.path.join(app.instance_path, 'www.sqlite'),
    )

    app.config.from_pyfile('config.py', silent=True)

    try:
        os.makedirs(app.instance_path)
    except OSError:
        pass

    @app.route('/')
    def index():
        return render_template('empty.html') 


    from . import db
    db.init_app(app)

    from . import admin 
    app.register_blueprint(admin.bp)

    from . import blog
    app.register_blueprint(blog.bp)

    from . import now 
    app.register_blueprint(now.bp)

    from . import recommended 
    app.register_blueprint(recommended.bp)

    from . import projects
    app.register_blueprint(projects.bp)

    return app

