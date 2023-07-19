FROM nginx:1.23.2

ENV TZ=Asia/Tokyo

VOLUME /var/cache/nginx
VOLUME /var/run/

COPY ./app /var/www/app
COPY ./ecs/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./ecs/nginx/nginx.conf /etc/nginx/nginx.conf

WORKDIR /var/www/app