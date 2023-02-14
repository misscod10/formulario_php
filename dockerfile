FROM httpd
COPY ./index.html /usr/local/apache2/htdocs/index.html
COPY ./procesador.php /usr/local/apache2/htdocs/procesador.php
COPY ./style.css /usr/local/apache2/htdocs/style.css
EXPOSE 80