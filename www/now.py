import markdown as md

from flask import Blueprint, redirect, render_template, request, url_for

from www.auth import admin_required
from www.models import db, Now


bp = Blueprint('now', __name__, url_prefix='/now')


@bp.route('/')
def index():
    now = Now.query.order_by(Now.created_at.desc()).first()

    return render_template('now/now.html', now=now)


@bp.route('/update', methods=('GET', 'POST'))
@admin_required
def update():
    if request.method == 'POST':
        markdown = request.form['markdown']
        html = parse_markdown(markdown)

        now = Now(markdown, html)
        db.session.add(now)
        db.session.commit()
        return redirect(url_for('now.index'))

    now = Now.query.order_by(Now.created_at.desc()).first()
    return render_template('now/update.html', now=now)

def parse_markdown(markdown):
    html = md.markdown(markdown)
    return html
