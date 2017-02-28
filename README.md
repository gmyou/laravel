# laravel

## Prepared
- macOS Sierra 10.12.3(16D32)
- PHP 7.1.1
- ruby
- brew
- composer
- mysql
    mysql> create database homestead;
    mysql> GRANT ALL PRIVILEGES 
    ->        ON homestead.* 
    ->        TO 'homestead'@'localhost'
    ->        IDENTIFIED BY 'secret' 
    ->        WITH GRANT OPTION;

## Install Laravel *on Anywhere You Want*
    
    $ mkdir laravel
    $ cd laravel
    $ composer create-project laravel/laravel dev-develop
    $ cd dev-develop
    $ composer update --no-scripts  
    $ cp .env.example .env
    $ php artisan key:generate
    $ php artisan serve
