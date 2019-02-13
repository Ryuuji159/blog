from flask import (
    Blueprint, flash, g, redirect, render_template, request, url_for
)

from werkzeug.exceptions import abort
import markdown as md

from www.db import get_db
from www.admin import admin_required 

bp = Blueprint('projects', __name__, url_prefix='/projects')

@bp.route('/')
def index():
    return render_template('empty.html')


