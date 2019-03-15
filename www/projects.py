from flask import Blueprint, render_template

bp = Blueprint('projects', __name__, url_prefix='/projects')

@bp.route('/')
def index():
    return render_template('empty.html')
