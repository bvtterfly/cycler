# Cycler : An easy way to rotate through several values

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bvtterfly/cycler.svg?style=flat-square)](https://packagist.org/packages/bvtterfly/cycler)
[![Tests](https://github.com/bvtterfly/cycler/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/bvtterfly/cycler/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/bvtterfly/cycler.svg?style=flat-square)](https://packagist.org/packages/bvtterfly/cycler)

An easy way to rotate through several values is to use cycler, which takes any number of arguments and cycles through them.

```php
$cycle = cycler('odd', 'even');
$numbers = [1,2,3,4,5,6];
foreach ($numbers as $number) {
    echo "{$number} is {$cycle->next()}";
}
// prints 1 is odd 2 is even 3 is odd 4 is even 5 is odd 6 is even
```

## Installation

You can install the package via composer:

```bash
composer require bvtterfly/cycler
```

## Usage

Let's say we want to display ads every three posts on our blog's home page. Then we can use `cycler`:

```php
$adsCycle = cycler(false, false, true);
foreach ($posts as $post) {
    // show post
    if ($adsCycle->next()) {
        // show add
    }
}
```
You can access the current item using the `current` method (in the above example, `$adsCycle->current()`)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Ari](https://github.com/bvtterfly)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
