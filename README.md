# This is my package utils

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexmanase/utils.svg?style=flat-square)](https://packagist.org/packages/alexmanase/utils)
[![GitHub Tests Action Status](https://github.com/spatie/package-utils-laravel/actions/workflows/run-tests.yml/badge.svg)](https://github.com/alexmanase/utils/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alexmanase/utils.svg?style=flat-square)](https://packagist.org/packages/alexmanase/utils)

This package contains some "utils" that I often use in my Laravel projects.

## Installation

You can install the package via composer:

```bash
composer require alexmanase/utils
```

## Usage

### `ClassNames` facade

Inspired by [Livewire Flux](https://github.com/livewire/flux/blob/main/src/FluxManager.php#L84-L89)'s class-merging approach.

```php
use AlexManase\Utils\Facades\ClassNames;

echo ClassNames::add(['btn', 'btn-primary' => true, 'btn-disabled' => false]);
// btn btn-primary

echo ClassNames::make()
    ->add('btn')
    ->add(['btn-primary' => true]);
// btn btn-primary
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Manase](https://github.com/alexmanase)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
