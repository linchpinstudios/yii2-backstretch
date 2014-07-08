Yii2-Backstretch
===============

Jquery backstretch widget for Yii2.

Backstretch Website: http://srobbin.com/jquery-plugins/backstretch/


Installation
===============

<h4>Composer:</h4>

<h5>1) Add to your composer.json</h5>
```
"require": {
  // ...
  "linchpinstudios/yii2-backstretch": "*",
  // ...
},
```

<h5>2) Run</h5>
```
php composer.phar update
```


Usage
===============

<h5>1) Include Widget at top of page</h5>
```php
use linchpinstudios/backstretch;
```

<h5>2) Call Widget</h5>
```php
<?php
  echo Backstrech::widget([
    'duration' => 3000,
    'fade' => 750,
    'clickEvent' => false,
    'images' => [
      ['image' => 'http://dl.dropbox.com/u/515046/www/outside.jpg'],
      ['image' => 'http://dl.dropbox.com/u/515046/www/garfield-interior.jpg'],
      ['image' => 'http://dl.dropbox.com/u/515046/www/cheers.jpg'],
    ],
  ]);
?>
```

