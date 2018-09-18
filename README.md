# Feature

1. contact form.
2. create new database with command php artisan make:database db_name
3. migration folder for core and client.
4. controler for create db and client.

## use config/app.php

```php
Kangyasin\Contact\ContactServiceProvider::class,
```

## install package

```markdown
composer require kangyasin/contact
```

## publish vendor

1. php artisan vendor:publish
2. choose config-kangyasin for publish vendor files.
