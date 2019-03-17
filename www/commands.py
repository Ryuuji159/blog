import click

from flask import current_app
from flask.cli import with_appcontext

from werkzeug.security import generate_password_hash

from www.models import db, User, Now


def init_db():
    db.create_all()


def generate_admin():
    username = current_app.config['USERNAME']

    if User.query.filter_by(username=username).first() is None:
        password = current_app.config['PASSWORD']

        user = User(username, generate_password_hash(password))
        db.session.add(user)
        db.session.commit()

def generate_base_now():
    now = Now.query.first()
    if now is None:
        now = Now('', '')
        db.session.add(now)
        db.session.commit()


@click.command('init-db')
@with_appcontext
def init_db_command():
    """
    Creates and initializes the db with the necesary data
    If the db existed previously, it keeps it and his data
    """
    init_db()
    generate_admin()
    generate_base_now()

@click.command('generate-admin')
@with_appcontext
def generate_admin_command():
    """
    Generate admin
    """
    generate_admin()

def init_app(app):
    app.cli.add_command(init_db_command)
    app.cli.add_command(generate_admin_command)
