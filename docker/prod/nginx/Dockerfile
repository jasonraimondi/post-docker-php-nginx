FROM nginx:1.13

LABEL maintainer="Jason Raimondi <jason@raimondi.us>"

COPY dhparam.pem /etc/nginx/ssl/dhparam.pem
COPY ssl_security.conf /etc/nginx/ssl/ssl_security.conf
COPY nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /etc/letsencrypt/webrootauth
