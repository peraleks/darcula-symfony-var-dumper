# Darcula symfony-var-dumper

Обёртка [symfony/var-dumper](https://github.com/peraleks/var-dumper).
* Тема оформления _'Darcula'_.
* Добавлен показ порядкового номера вызова функции дампа. 
* Добавлен показ файла и номера строки где вызвана функция дампа.

## Установка
```bush
composer require peraleks/darcula-symfony-var-dumper
```

## Использование
```php
include 'vendor/peraleks/darcula-symfony-var-dumper/dumper.inc';
dp($_SERVER);
```
## Лицензия

The MIT License ([MIT](LICENSE.md)).
