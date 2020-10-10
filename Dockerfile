FROM alpine:3.12

# Set Environment and Variables
ARG TZ=Europe/Berlin

ENV TZ=$TZ

# Install packages and remove default server definition
RUN apk --no-cache add php7 php7-fpm php7-opcache php7-mysqli php7-json php7-openssl php7-curl \
    php7-zlib php7-xml php7-phar php7-intl php7-dom php7-xmlreader php7-ctype php7-session \
    php7-mbstring php7-gd nginx supervisor curl rsyslog && \
    rm /etc/nginx/conf.d/default.conf 

# allow non-privileged user 'nobody' to write to /dev/*
#RUN addgroup nobody tty

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php7/php-fpm.d/www.conf
COPY config/php.ini /etc/php7/conf.d/custom.ini

# configure rsyslogd
COPY config/rsyslog.conf /etc/rsyslog.conf

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Setup document root
RUN mkdir -p /var/www/html

# rsyslog spool root
RUN mkdir -p /var/spool/rsyslog
RUN touch /var/log/syslog

# Add loganalyzer and create default-config
WORKDIR /var/www/html
COPY loganalyzer-4.1.11/src /var/www/html/
COPY config/loganalyzer-config.php /var/www/html/config.php

# Make sure files/folders needed by the processes are accessable when they run under the nobody user
# RUN chown -R nobody.nobody /var/www/html && \
#  chown -R nobody.nobody /run && \
#  chown -R nobody.nobody /var/lib/nginx && \
#  chown -R nobody.nobody /var/log/nginx

EXPOSE 8080
EXPOSE 514
EXPOSE 514/udp

# Let supervisord start nginx & php-fpm & rsyslog
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping

