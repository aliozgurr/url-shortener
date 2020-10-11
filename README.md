Very simple URL shortener made with Laravel

Requirements: `php 7.4` 

<b><h2>Installation</h2></b>

Set up your database configuration on `.env` file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shortener
DB_USERNAME=root
DB_PASSWORD=
```

Run these commands

```
composer install
php artisan migrate
php artisan key:generate
```

<b><h2>Usage</h2></b>
    
Put the URL that you want to shorten
<br>
<img src="https://i.hizliresim.com/fIJCjv.png" width="220" height="150"> <br> then click <b>submit</b> <br> <img src="https://i.hizliresim.com/zdf9a7.png" width="220" height="150">

<br>

<b>Adding custom slugs to shortened URL</b>

Put the URL and custom slug into fields
<br>
<img src="https://i.hizliresim.com/Ohdyzm.png" width="210" height="150"> <br>  then click <b>submit</b> <br> <img src="https://i.hizliresim.com/Y62IOQ.png" width="210" height=150>


Enjoy!

<br>
<br>
<br>




<b>P.S</b>

This made in an hour, so it is missing some important features.
