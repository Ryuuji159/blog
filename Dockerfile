FROM python:3 as builder

WORKDIR /usr/src/app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . . 
RUN mkdir www/

RUN python generator

###########################################################
FROM nginx:latest as deployer
COPY --from=builder /usr/src/app/www /usr/share/nginx/html
