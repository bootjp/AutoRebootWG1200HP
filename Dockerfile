FROM fedora:22

MAINTAINER oh@bootjp.me

ADD ./ /app/

RUN dnf install -y php-cli git && dnf clean all && cd /app && curl -sS https://getcomposer.org/installer | /usr/bin/php && /usr/bin/php composer.phar install

CMD /usr/bin/php /app/wrapper.php