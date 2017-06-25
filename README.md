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

## tinker console
    $ php artisan tinker

>>> DB::table('posts')->get();
=> Illuminate\Support\Collection {#644
     all: [],
   }

>>> DB::insert('INSERT INTO posts(title, body) VALUE(?, ?)', ['Hello Database', 'Greeting from tinker']);
=> true
>>> DB::table('posts')->get();
=> Illuminate\Support\Collection {#642
     all: [
       {#653
         +"id": 1,
         +"title": "Hello Database",
         +"body": "Greeting from tinker",
       },
     ],
   }