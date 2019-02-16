from flask import (
    Blueprint, flash, g, redirect, render_template, request, url_for
)

from werkzeug.exceptions import abort
import markdown as md

from www.db import get_db
from www.auth import admin_required 

bp = Blueprint('recommended', __name__, url_prefix='/recommended')

@bp.route('/')
def index():
    return render_template('empty.html')


