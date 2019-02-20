FROM nginx:1.15.8-alpine

COPY ./etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

RUN apk add --update make && \
    ln -sf /dev/stdout /var/log/nginx/access.log && \
    ln -sf /dev/stderr /var/log/nginx/error.log
