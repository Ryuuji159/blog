from flask import Blueprint, render_template

from www.auth import admin_required

bp = Blueprint('admin', __name__, url_prefix='/admin')

@bp.route('/panel')
@admin_required
def panel():
    return render_template('admin/panel.html')
