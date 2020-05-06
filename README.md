# Faker Providers
![Continuous
Integration](https://github.com/alu-/faker-providers/workflows/Continuous%20Integration/badge.svg?branch=master)
[![codecov](https://codecov.io/gh/alu-/faker-providers/branch/master/graph/badge.svg)](https://codecov.io/gh/alu-/faker-providers)

A collection of custom providers for the fzaninotto/Faker php library.
[fzaninotto/Faker](https://github.com/fzaninotto/Faker/) is a PHP library that
generates fake data for you.

Faker Providers requires PHP >= 7.1.0

## Installation
Installation is done with composer:

```
composer require alu/faker-providers
```

## Usage
```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Alu\Faker\Provider\MonkeyIsland($faker));


echo $faker->name;     // Name of a character from the Monkey Island franchise.
echo $faker->location; // Name of a location from the Monkey Island franchise.
```

## License
Released under the MIT License. See the [LICENSE](https://github.com/alu-/faker-providers/blob/master/LICENSE) file for details.
