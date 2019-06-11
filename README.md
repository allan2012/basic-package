# basic-package
Just a simple way to get started with a basic well tested PHP package management.

## Composer Installation

```composer composer require allan/calc```

## Usage
```
<?php

use Calc\Calculator;

$c = new Calculator;
$sum = $c->add(3445,6677);
var_dump($sum);
```
