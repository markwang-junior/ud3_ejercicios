CREATE USER 'ig'@'%' IDENTIFIED BY 'ig_password';
GRANT ALL PRIVILEGES ON *.* TO 'ig'@'%';
FLUSH PRIVILEGES;
