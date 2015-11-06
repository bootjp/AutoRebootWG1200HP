FROM php:5.6-cli

ADD ./ /app

RUN cd /app && curl -sS https://getcomposer.org/installer | php && php composer.phar install

CMD /usr/local/bin/php /app/wrapper.php