FROM centos:6

RUN yum -y install httpd php mysql-server php-mysql

RUN rm -f /etc/httpd/conf.d/welcome.conf 

COPY droptables.sql /tmp/droptables.sql

COPY index.php /var/www/html/index.php

COPY startup.sh /usr/bin/startup.sh

CMD ["/bin/bash", "/usr/bin/startup.sh"]

