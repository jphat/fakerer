# Fakerer Documentation

Welcome to the Fakerer documentation. Fakerer is a PHP library for generating fake data for testing and development purposes. It provides a simple and flexible API for creating realistic-looking data, such as household items, cars, and more.

## Table of Contents

1. [Installation](#installation)
2. [Basic Usage](#basic-usage)
3. [Available Generators](#available-generators)
4. [Command Line Interface](#command-line-interface)
5. [API Reference](#api-reference)
6. [Contributing](#contributing)

## Installation

```bash
composer require jphat/fakerer
```

## Basic Usage

After installing the package, you can start using Fakerer immediately in your Laravel application:

```php
// Generate a random household item
$item = fakerer()->householdItem();

// Generate a random household item from a specific category
$kitchenItem = fakerer()->householdItem('kitchen');
```

## Available Generators

Currently, Fakerer supports the following generators:

### Household Items

Generate random household items with optional category filtering.

```php
// Get any random household item
$item = fakerer()->householdItem();

// Get a random item from a specific category
$kitchenItem = fakerer()->householdItem('kitchen');
$bathroomItem = fakerer()->householdItem('bathroom');
```

Available categories:
- `kitchen`
- `living-room`
- `bedroom`
- `bathroom`
- `laundry-room`
- `hallway`
- `garage`

## Command Line Interface

Fakerer also provides a command line interface via Laravel's Artisan:

```bash
# Generate a random household item
php artisan fakerer household

# Generate a random household item from a specific category
php artisan fakerer household --category=kitchen
```

## API Reference

For detailed API reference, see [API Documentation](api.md).

## Contributing

Contributions are welcome! Please see [Contributing Guidelines](contributing.md) for more details.
