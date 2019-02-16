from flask import (
    Blueprint, flash, g, redirect, render_template, request, url_for
)

from werkzeug.exceptions import abort
import markdown as md

from www.db import get_db
from www.auth import admin_required 

bp = Blueprint('blog', __name__, url_prefix='/blog')

@bp.route('/')
def index():
    db = get_db()
    posts = db.execute(
       'SELECT id, title, resume, created_at'
       ' FROM posts'
       ' ORDER BY created_at DESC'
    ).fetchall()

    return render_template('blog/index.html', posts=posts)

@bp.route('/create', methods=('GET', 'POST'))
@admin_required
def create():
    if request.method == 'POST':
        title = request.form['title']
        markdown = request.form['markdown']
        html = parse_markdown(markdown)
        resume = request.form['resume']

        error = None

        if not title:
            error = "El titulo es requerido"

        if error is not None:
            flash(error)
        else:
            db = get_db()
            db.execute(
                'INSERT INTO posts (title, markdown, html, resume)'
                ' VALUES (?, ?, ?, ?)',
                (title, markdown, html, resume)
            )
            db.commit()
            return redirect(url_for('blog.index'))

    return render_template('blog/create.html')

@bp.route('/update/<int:id>', methods=('GET', 'POST'))
@admin_required
def update(id):
    post = get_db().execute(
        'SELECT id, title, markdown, resume'
        ' FROM posts'
        ' WHERE id = ?',
        (id,)
    ).fetchone()

    if post is None:
        abort(404)

    if request.method == 'POST':
        title = request.form['title']
        markdown = request.form['markdown']
        html = parse_markdown(markdown)
        resume = request.form['resume']

        error = None

        if not title:
            error = "El titulo es requerido"

        if error is not None:
            flash(error)
        else:
            db = get_db()
            db.execute(
                'UPDATE posts'
                ' SET title = ?, markdown = ?, html = ?, resume = ?'
                ' WHERE id = ?',
                (title, markdown, html, resume, id)
            )
            db.commit()
            return redirect(url_for('blog.index'))

    return render_template('blog/update.html', post=post)

@bp.route('/<int:id>')
def view(id):
    post = get_db().execute(
        'SELECT id, title, html'
        ' FROM posts'
        ' WHERE id = ?',
        (id,)
    ).fetchone()
    
    if post is None:
        abort(404)
    else:
        return render_template('blog/view.html', post=post)

@bp.route('/delete/<int:id>', methods=('GET', 'POST',))
@admin_required
def delete(id):
    if request.method == 'GET':
        abort(404)

    db = get_db()
    post = db.execute(
        'SELECT id'
        ' FROM posts'
        ' WHERE id = ?',
        (id,)
    ).fetchone()
    print(post)
    
    if post is None:
        abort(404)
    else:
        db.execute('DELETE FROM posts WHERE id = ?', (id,))
        db.commit()
        return redirect(url_for('blog.index'))


def parse_markdown(markdown):
    html = md.markdown(markdown) 
    return html
