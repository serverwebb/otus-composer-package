# Калькулятор
Пакет для сложения чисел

## Требования
- php 8.2
## Установка

```bash
 composer require serverwebb/otus-composer-package
```

## Использование
```php
<?php
$calculator = new Calculator();
echo $calculator->exec(1, 2, '+');
```