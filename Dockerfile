FROM fedora:22

MAINTAINER oh@bootjp.me

ADD ./ /app/

RUN dnf install -y php-cli && dnf clean all
RUN cd /app && curl -sS https://getcomposer.org/installer | php && php composer.phar install

CMD /usr/bin/php /app/wrapper.php