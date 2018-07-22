# docker-2php1apache
Different PHP versions (by folder)

Using ProxyPassMatch in apache to enable multiple php versions under same domain.

http://php-docker.local/   <- php 7 + PDO - no DB credentials set

http://php-docker.local/v5/   <- php 5 + PDO + DB credentials via .env file

Included:
linked mysql 5.7 with different root/user .env file
