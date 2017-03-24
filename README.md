# Darcula symfony-var-dumper

Обёртка [symfony/var-dumper](https://github.com/peraleks/var-dumper).
* Тема оформления _'Darcula'_.
* Добавлен показ порядкового номера вызова функции дампа. 
* Добавлен показ файла и номера строки где вызвана функция дампа.

![](https://cloud.githubusercontent.com/assets/19615952/24289841/e6c0e22a-1093-11e7-9100-cfb29fa966ee.png)

## Установка
```bush
composer require peraleks/darcula-symfony-var-dumper
```
Для использования без composer доступен [fork](https://github.com/peraleks/var-dumper).

## Использование
```php
include 'vendor/peraleks/darcula-symfony-var-dumper/dumper.inc';
dp($_SERVER);
```
## Лицензия

The MIT License ([MIT](LICENSE.md)).
