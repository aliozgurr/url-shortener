Very simple URL shortener made with Laravel

Requirements: `php 7.4` 

<b>Installation</b>

Set up your `.env` file

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

<b>Usage</b>
    
Put the url that you want to shorten
<img src="https://i.hizliresim.com/fIJCjv.png" width="100" height="100"> then click <b>submit</b> <img src="https://i.hizliresim.com/zdf9a7.png" width="100" height="100">
