# Basic tested PHP package

Just a simple way to get started with a basic well tested PHP package management. 
You can use it as a basic template to create a standard composer PHP package.

The testing is integrated with PHPUnit see https://phpunit.de/

### Composer Installation

```composer require allan/calc```

### Usage
```
<?php

use Calc\Calculator;

$c = new Calculator;
$sum = $c->add(3445,6677);
var_dump($sum);
```
