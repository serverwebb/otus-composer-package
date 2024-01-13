# Калькулятор
Пакет для сложения чисел

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