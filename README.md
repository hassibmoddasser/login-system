# Login System

A simple login system in PHP using mysqli extension

## App configurations

Go to ```config/config.php``` and modify below constants according to your deployment environment

``` PHP
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'login_mysqli');

define('URL_ROOT', 'http://localhost/login-mysqli/');
define('APP_NAME', 'Simple Login System');
```

## Database schema

```SQL
CREATE DATABASE `login_mysqli` CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

CREATE TABLE `users`(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `first_name` VARCHAR(64) NOT NULL,
    `last_name` VARCHAR(64) NOT NULL,
    `user_name` VARCHAR(128) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL
);
```

## Change Log

### **Ver 1.0.0**

- User authentication
- User registration
