FROM python:alpine

RUN mkdir /app
COPY requirements.txt gunicorn.conf run.py /app/
COPY www/ /app/www
ENV FLASK_APP=www
WORKDIR /app
RUN apk add mariadb-connector-c-dev gcc musl-dev
RUN pip install --no-cache-dir -r requirements.txt
RUN apk del gcc musl-dev

ENV GUNICORN_WORKERS 2
ENV GUNICORN_BIND 0.0.0.0:8081

EXPOSE 8081
CMD ["gunicorn", "--config", "gunicorn.conf", "run:app"]
