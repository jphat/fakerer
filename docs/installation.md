# Installation Guide

This guide will help you install and set up the Fakerer package in your Laravel application.

## Requirements

- PHP 8.4 or higher
- Laravel 10.0 or higher (including Laravel 11 and 12)

## Installation

You can install the package via Composer:

```bash
composer require jphat/fakerer
```

## Laravel Integration

The package will automatically register itself with Laravel through Laravel's package auto-discovery feature.

If you're using Laravel 10 or newer, no additional configuration is needed. The service provider will be automatically registered, and the `fakerer()` helper function will be available throughout your application.

### Manual Service Provider Registration

If for some reason auto-discovery doesn't work or you've disabled it, you can manually register the service provider in your `config/app.php` file:

```php
'providers' => [
    // Other service providers...
    Jphat\Fakerer\FakererServiceProvider::class,
],
```

### Facade Registration

You can also register the Fakerer facade in your `config/app.php` file:

```php
'aliases' => [
    // Other aliases...
    'Fakerer' => Jphat\Fakerer\Facades\Fakerer::class,
],
```

This allows you to use the facade in your code:

```php
use Fakerer;

$item = Fakerer::householdItem();
```

## Configuration

The Fakerer package comes with a default configuration file. If you want to customize the configuration, you can publish it:

```bash
php artisan vendor:publish --provider="Jphat\Fakerer\FakererServiceProvider" --tag="config"
```

This will create a `config/fakerer.php` file that you can modify according to your needs.

## Verification

To verify that the package is installed correctly, you can run the following Artisan command:

```bash
php artisan fakerer
```

This should display the Fakerer help screen with available commands.

You can also test the package by generating a random household item:

```bash
php artisan fakerer household
```

## Next Steps

Now that you have installed the Fakerer package, you can start using it in your application. See the [Basic Usage](README.md#basic-usage) section for examples.
