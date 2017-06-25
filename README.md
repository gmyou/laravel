# laravel

## Prepared
- macOS Sierra 10.12.3(16D32)
- PHP 7.1.1
- ruby
- brew
- composer
- mysql 5.7.13
    
```
mysql> create database myProject;
mysql> GRANT ALL PRIVILEGES 
       ON homestead.* 
       TO 'homestead'@'localhost'
       IDENTIFIED BY 'secret' 
       WITH GRANT OPTION;
mysql> CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

## Install Laravel *on Anywhere You Want*
    
    $ mkdir laravel
    $ cd laravel
    $ composer create-project laravel/laravel dev-develop
    $ cd dev-develop
    $ composer update --no-scripts  
    $ cp .env.example .env
    $ php artisan key:generate
    $ php artisan serve

- [ ] Migration Issue
    - [ ] Parse error    
    ```
    $ php artisan tinker
    >>> php artisan make:migration create_posts_table
    PHP Parse error: Syntax error, unexpected T_STRING on line 1
    ```
