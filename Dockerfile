FROM php:5.6-cli

MAINTAINER oh@bootjp.me

ADD ./ /app

RUN apt-get update && apt-get install -y git && cd /app && curl -sS https://getcomposer.org/installer | php && php composer.phar install

CMD /usr/local/bin/php /app/wrapper.php