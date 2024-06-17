And here's how to run with your own config:
```shell
docker run -it -p 80:80 -v "./unit.json:/etc/unit/config.json" -v ".:/app" unit-alpine-php-8.2
```


docker run --name=mysql1 --restart on-failure -d container-registry.oracle.com/mysql/community-server:latest
docker logs mysql1
docker logs mysql1 2>&1 | grep GENERATED
[Entrypoint] GENERATED ROOT PASSWORD: e2,0,kh_bv2i@Zx,8RNk&p2Z+jU33E#3
docker exec -it mysql1 mysql -uroot -p
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';


CREATE USER 'okay'@'localhost' IDENTIFIED WITH authentication_plugin BY 'okay';


CREATE USER 'okay'@'localhost' IDENTIFIED BY 'okay';


CREATE USER 'okay'@'localhost' IDENTIFIED BY 'okay';

GRANT ALL PRIVILEGES ON *.* TO 'okay'@'localhost' WITH GRANT OPTION;

CREATE USER 'okay'@'%' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'okay'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;

'172.16.0.2