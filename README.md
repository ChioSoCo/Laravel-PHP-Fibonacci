# Laravel-PHP-Fibonacci

One solution for Fibonacci Number made in Laravel

You can find the class that calculates in app/Functions/Fibonacci.php.

### Project Information
  [Laravel 5.0 compatible with PHP 5.4.9](https://laravel.com/docs/5.0/installation)
  
  Added [php-bignumbers](https://github.com/Litipk/php-bignumbers) "litipk/php-bignumbers": "^0.7.3" for the Big Decimal Operations
  
### Front Dependencies where installed with Bower and [laravel-elixir](https://laravel.com/docs/5.0/elixir)
  [Bootstrap (with JQuery)](http://getbootstrap.com/).
  
  [Vue.js](https://vuejs.org/).
  
  
## Requirements
1.- PHP >= 5.4, PHP < 7.

2.- [Composer](http://getcomposer.org/) package manager.

## Installation

With a git versioner software you must clone this project.
```
git clone https://github.com/jLeonelDev/Laravel-PHP-Fibonacci/
```
After that you only have to download all dependencies running the next composer command (You have to be located in the root folder of the project wait until ends).
```
composer update
```

When ends you only have to run the server with.
```
php artisan serv
```

## Usage of Web Service
This one only has 3 valid Requests.


Get All registered Fibonacci Value´s with his calculation:

  ```
  GET {url}/fibonacci
  ```
  Example: localhost:8000/fibonacci
  
  <br />

Insert a posible Fibonacci Value that can be caculated:

  Parameter: num=int
  ```
  POST {url}/fibonacci
  ```
  Example: localhost:8000/fibonacci?num=5

<br />

Delete a Fibonacci Value that can be caculated:

  ```
  DELETE {url}/fibonacci/{number_to_delete}
  ```
  Example: localhost:8000/fibonacci/5


## History
This project was made for a abilities test in accenture.

## License
Apache License 2.0.
