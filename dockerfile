#image menggunakan php 7.4
FROM php:7.4-apache

#copy file database bernama trucorp-db.sql
COPY ./index.php /var/www/html
COPY ./trucorp-db.sql /docker-entrypoint-initdb.d/init.sql
EXPOSE 3306




#ubah owner file user dan group
RUN chown -R www-data /var/www/html/
RUN chgrp -R www-data /var/www/html/

RUN chmod -R 774 /var/www/html/


#test
RUN php -v
RUN cd /var/www/html && ls -R -l

EXPOSE 8088:80
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


