# API Reference

## Core Classes

### Fakerer

The main class that provides methods for generating fake data.

```php
namespace Jphat\Fakerer;

class Fakerer
{
    // Methods...
}
```

## Available Methods

### householdItem

```php
/**
 * Get a random household item from a specified category.
 *
 * @param string|null $category The category of the household item.
 * @return string A random household item.
 * @throws \InvalidArgumentException If the category is invalid.
 */
public function householdItem(?string $category = null): string
```

#### Parameters

- `$category` (string|null): Optional. The category of household items to choose from. Available options:
  - `kitchen`
  - `living-room`
  - `bedroom`
  - `bathroom`
  - `laundry-room`
  - `hallway`
  - `garage`
  
  If not specified, a random item from any category will be returned.

#### Return Value

A string containing a random household item name.

#### Exceptions

- `\InvalidArgumentException`: If the provided category is not valid.

#### Examples

```php
// Get a random household item
$item = fakerer()->householdItem();

// Get a random kitchen item
$kitchenItem = fakerer()->householdItem('kitchen');

// Get a random bathroom item
$bathroomItem = fakerer()->householdItem('bathroom');
```

## Helper Functions

### fakerer()

A global helper function that provides access to the Fakerer instance.

```php
/**
 * Get an instance of the Fakerer class.
 *
 * @return \Jphat\Fakerer\Fakerer
 */
function fakerer()
```

#### Return Value

An instance of the `\Jphat\Fakerer\Fakerer` class.

#### Examples

```php
// Use the helper function to access the Fakerer class
$item = fakerer()->householdItem();
```

## Command Line Interface

### Fakerer Command

```php
/**
 * Generate fake data using the command line.
 */
class FakererCommand extends Command
```

#### Usage

```bash
# Show help
php artisan fakerer

# Generate a random household item
php artisan fakerer household

# Generate a random household item from a specific category
php artisan fakerer household --category=kitchen
```
