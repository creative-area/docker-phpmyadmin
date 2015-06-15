# PhpMyAdmin with Docker

Provide a PhpMyAdmin container

## Usage

Links allow Docker containers to discover each other and securely transfer information about MySQL container to phpMyAdmin container.

```bash
$ docker run --name mysql -e MYSQL_ROOT_PASSWORD=my_password -d mysql
$ docker run --name phpmyadmin --link mysql:mysql -P creativearea/phpmyadmin
```
