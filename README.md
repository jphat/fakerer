# This is my package fakerer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jphat/fakerer.svg?style=flat-square)](https://packagist.org/packages/jphat/fakerer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jphat/fakerer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jphat/fakerer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jphat/fakerer/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jphat/fakerer/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jphat/fakerer.svg?style=flat-square)](https://packagist.org/packages/jphat/fakerer)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package like any other composer package:

```bash
composer require jphat/fakerer
```

## Usage

Via artisan

```bash
# without options
php artisan fakerer household

# with options
php artisan fakerer household --category=bedroom
```

On Tinker

```bash
# without options
fakerer()->householdItem();

# with options
> fakerer()->householdItem($category="kitchen");
```

In PHP

```php
// without options
fakerer()->householdItem();

// without options
fakerer()->householdItem('kitchen');
```

In Blade

```php
// without options
{{ fakerer()->householdItem() }}

// without options
{{ fakerer()->householdItem('kitchen') }}
```

## Testing

```bash
composer test
```
