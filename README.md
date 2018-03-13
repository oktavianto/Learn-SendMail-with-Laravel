# Learn SendGrid with Laravel

### Installation
```sh
$ composer update
$ php artisan key:generate
```

### Change to your sendgrid account in config/mail.php
```php
<?php
return [
    'driver' => 'smtp',
    'host' => 'smtp.sendgrid.net',
    'port' => 587,
    'encryption' => 'tls',
    'username' => 'sendgrid_username',
    'password' => 'sendgrid_password',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
];
```
