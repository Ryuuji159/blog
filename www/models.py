from datetime import datetime
from flask_sqlalchemy import SQLAlchemy

db = SQLAlchemy()

class User(db.Model):
    __tablename__ = 'users'
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(255), unique=True, nullable=False)
    password = db.Column(db.String(255), nullable=False)

    def __init__(self, username=None, password=None):
        self.username = username
        self.password = password

    def __repr__(self):
        return f'User {self.username}>'


class Post(db.Model):
    __tablename__ = 'posts'
    id = db.Column(db.Integer, primary_key=True)
    title = db.Column(db.Text, nullable=False)
    markdown = db.Column(db.Text, nullable=False)
    html = db.Column(db.Text, nullable=False)
    resume = db.Column(db.Text, nullable=False)
    created_at = db.Column(db.DateTime, default=datetime.utcnow)

    def __init__(self, title=None, markdown=None, html=None, resume=None):
        self.title = title
        self.markdown = markdown
        self.html = html
        self.resume = resume


    def __repr__(self):
        return f'<Post {self.title} {self.created_at}>'


class Now(db.Model):
    __tablename__ = 'nows'
    id = db.Column(db.Integer, primary_key=True)
    markdown = db.Column(db.Text, nullable=False)
    html = db.Column(db.Text, nullable=False)
    created_at = db.Column(db.DateTime, default=datetime.utcnow)

    def __init__(self, markdown=None, html=None):
        self.markdown = markdown
        self.html = html


    def __repr__(self):
        return f'<Now {self.created_at}>'
