from flask import Blueprint, flash, g, redirect, render_template, request, session, url_for

from www.db import get_db
from www.auth import admin_required

bp = Blueprint('admin', __name__, url_prefix='/admin')

@bp.route('/panel')
@admin_required
def panel():
    return render_template('admin/panel.html')
