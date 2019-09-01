FROM nginx:1.10

MAINTAINER Harasya

ADD .docker/vhost.conf /etc/nginx/conf.d/default.conf