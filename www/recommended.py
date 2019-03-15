from flask import Blueprint, render_template


bp = Blueprint('recommended', __name__, url_prefix='/recommended')

@bp.route('/')
def index():
    return render_template('empty.html')
