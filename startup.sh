#!/bin/sh

/etc/init.d/mysqld start
mysql -e "CREATE DATABASE J0hnnyDr0pTables"
mysql -e "GRANT SELECT ON *.* TO 'L1ttleJ0hnny'@'localhost'"
mysql J0hnnyDr0pTables -e "create table user (user varchar(20), password varchar(20));"
mysql J0hnnyDr0pTables < /tmp/droptables.sql
/usr/sbin/httpd -D FOREGROUND
