FROM php:5.6-cli

ADD ./ /app

CMD /usr/bin/php /app/wrapper.php