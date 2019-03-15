import os

from flask import Flask
from flask import redirect, url_for, render_template

def create_app():
    app = Flask(__name__, instance_relative_config=True)
    app.config.from_mapping(
        SQLALCHEMY_DATABASE_URI=os.environ.get("DATABASE_URI"),
        SQLALCHEMY_TRACK_MODIFICATIONS=os.environ.get("TRACK_MODIFICATIONS"),
        USERNAME=os.environ.get("USERNAME"),
        PASSWORD=os.environ.get("PASSWORD"),
        SECRET_KEY=os.environ.get("SECRET_KEY")
    )

    @app.route('/')
    def index():
        return redirect(url_for('blog.index'))


    from www.models import db
    db.init_app(app)

    from www import commands
    commands.init_app(app)

    from www import auth
    app.register_blueprint(auth.bp)

    from www import admin
    app.register_blueprint(admin.bp)

    from www import blog
    app.register_blueprint(blog.bp)

    from www import now
    app.register_blueprint(now.bp)

    from www import recommended
    app.register_blueprint(recommended.bp)

    from www import projects
    app.register_blueprint(projects.bp)

    return app
