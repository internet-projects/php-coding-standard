# PHP Coding Standard

## Installation

```shell
composer require --dev internetprojects/php-coding-standard
```

## Usage
```php
// .php-cs-fixer.dist.php

$finder = ...

$config = new PhpCsFixer\Config();

PhpCsFixerCodingStandard::applyTo($config);

return $config->setFinder($finder);
```
