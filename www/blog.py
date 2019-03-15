from flask import Blueprint, flash, redirect, render_template, request, url_for

from werkzeug.exceptions import abort
import markdown as md

from www.models import db, Post
from www.auth import admin_required

bp = Blueprint('blog', __name__, url_prefix='/blog')

@bp.route('/')
def index():
    posts = Post.query.order_by(Post.created_at.desc()).all()

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
            post = Post(title, markdown, html, resume)
            db.session.add(post)
            db.session.commit()

            return redirect(url_for('blog.index'))

    return render_template('blog/create.html')

@bp.route('/update/<int:id>', methods=('GET', 'POST'))
@admin_required
def update(id):
    post = Post.query.get(id)

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
            post.title = title
            post.markdown = markdown
            post.html = html
            post.resume = resume
            db.session.commit()
            return redirect(url_for('blog.index'))

    return render_template('blog/update.html', post=post)

@bp.route('/<int:id>')
def view(id):
    post = Post.query.get(id)

    if post is None:
        abort(404)
    else:
        return render_template('blog/view.html', post=post)

@bp.route('/delete/<int:id>', methods=['POST'])
@admin_required
def delete(id):
    post = Post.query.get(id)

    if post is None:
        abort(404)
    else:
        db.session.delete(post)
        db.session.commit()
        return redirect(url_for('blog.index'))


def parse_markdown(markdown):
    html = md.markdown(markdown)
    return html
