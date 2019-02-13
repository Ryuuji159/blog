from flask import (
    Blueprint, flash, g, redirect, render_template, request, url_for
)

from werkzeug.exceptions import abort
import markdown as md

from www.db import get_db
from www.admin import admin_required 

bp = Blueprint('now', __name__, url_prefix='/now')

@bp.route('/')
def index():
    db = get_db()
    now = db.execute(
       'SELECT html'
       ' FROM now'
    ).fetchone()

    return render_template('now/now.html', now=now)

@bp.route('/update', methods=('GET', 'POST'))
@admin_required
def update():
    if request.method == 'POST':
        markdown = request.form['markdown']
        html = parse_markdown(markdown)

        db = get_db()
        db.execute(
            'UPDATE now'
            ' SET markdown = ?, html = ?',
            (markdown, html,)
        )
        db.commit()
        return redirect(url_for('now.index'))

    now = get_db().execute(
        'SELECT id, markdown'
        ' FROM now'
    ).fetchone()
    return render_template('now/update.html', now=now)

def parse_markdown(markdown):
    html = md.markdown(markdown) 
    return html
