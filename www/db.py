import sqlite3
import click

from flask import current_app, g
from flask.cli import with_appcontext
from werkzeug.security import generate_password_hash

def get_db():
    if 'db' not in g:
        g.db = sqlite3.connect(
            current_app.config['DATABASE'],
            detect_types = sqlite3.PARSE_DECLTYPES
        )
        g.db.row_factory = sqlite3.Row
    return g.db

def close_db(e=None):
    db = g.pop('db', None)

    if db is not None:
        db.close()

def init_db():
    db = get_db()

    with current_app.open_resource('schema.sql') as f:
        db.executescript(f.read().decode('utf8'))

def fill_with_dummy():
    db = get_db()

    with current_app.open_resource('dummy.sql') as f:
        db.executescript(f.read().decode('utf8'))

def generate_admin():
    db = get_db()
    username = current_app.config['USERNAME']
    password = current_app.config['PASSWORD']

    db.execute(
        'INSERT INTO users (username, password) VALUES (?, ?)',
        (username, generate_password_hash(password))
    )
    db.commit()

@click.command('init-db')
@with_appcontext
def init_db_command():
    """Initializes the schema of the database"""
    init_db()
    click.echo('Initialized the database')

@click.command('fill-with-dummy')
@with_appcontext
def fill_with_dummy_command():
    """Adds dummy data to the existing database"""
    fill_with_dummy()
    click.echo('Database filled with dummy data')

@click.command('generate-admin')
@with_appcontext
def generate_admin_command():
    """Creates the admin account to be used"""
    generate_admin()
    click.echo('Created admin')


def init_app(app):
    app.teardown_appcontext(close_db)
    app.cli.add_command(init_db_command)
    app.cli.add_command(fill_with_dummy_command)
    app.cli.add_command(generate_admin_command)

