FROM php:7.0.8-fpm

ENV NGINX_VERSION 1.10.1-1~jessie

COPY . /opt/womanshift/
WORKDIR /opt/womanshift/

COPY ./docker/nginx.conf /etc/nginx/

EXPOSE 80
