import functools

from werkzeug.exceptions import abort
from werkzeug.security import check_password_hash

from flask import Blueprint, render_template, request, session
from flask import url_for, flash, redirect, g

from www.models import User


bp = Blueprint('auth', __name__, url_prefix='/auth')

@bp.route('/login', methods=('GET', 'POST'))
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']

        error = None

        user = User.query.filter_by(username=username).first()

        if user is None:
            error = 'Incorrect username.'
        elif not check_password_hash(user.password, password):
            error = 'Incorrect password.'

        if error is None:
            session.clear()
            session['user_id'] = user.id
            return redirect(url_for('index'))

        flash(error)

    return render_template('auth/login.html')

@bp.route('/logout')
def logout():
    session.clear()
    return redirect(url_for('index'))

@bp.before_app_request
def load_logged_in_user():
    user_id = session.get('user_id')

    if user_id is None:
        g.user = None
    else:
        g.user = User.query.get(user_id)

def admin_required(view):
    @functools.wraps(view)
    def wrapped_view(**kwargs):
        if g.user is None:
            return redirect(abort(404))

        return view(**kwargs)

    return wrapped_view
