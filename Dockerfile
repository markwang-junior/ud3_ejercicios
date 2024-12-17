FROM mariadb:latest
ENV MYSQL_ROOT_PASSWORD=m1_s3cr3t
ENV MYSQL_DATABASE=test1

COPY init.sql /docker-entrypoint-initdb.d/init.sql

EXPOSE 3306

