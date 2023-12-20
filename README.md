# Калькулятор
Пакет для сложения чисел

## Требования
- php 7.4
## Установка

```bash
composer require sherweb/otus-package
```

## Использование
```php
<?php
$calculator = new Calculator();
echo $calculator->exec(1, 2, '+');
```