# Testing Guide

This document provides information on how to test the Fakerer package, both for users who want to validate functionality and for contributors.

## Running Tests

The Fakerer package includes a comprehensive test suite. To run the tests, you can use the following command:

```bash
composer test
```

This will run all the tests using Pest PHP, which is a testing framework that provides an elegant way to write tests in PHP.

## Test Coverage

To generate a test coverage report, you can run:

```bash
composer test-coverage
```

This will generate a coverage report that shows which parts of the codebase are covered by tests.

## Test Structure

The tests are organized in the `tests` directory:

- `HouseholdItemTest.php`: Tests for the household item generator
- `ArchTest.php`: Tests for architecture rules
- `TestCase.php`: Base test case class
- `Pest.php`: Pest configuration file

## Writing Tests

If you're contributing to the Fakerer package, you should write tests for your code. Here's an example of how to write a test for a new generator:

```php
it('returns a random item from your generator', function () {
    $result = fakerer()->yourGenerator();
    
    expect($result)->toBeString();
    // Add more assertions as needed
});

it('returns an item from a specific category', function () {
    $result = fakerer()->yourGenerator('specific-category');
    
    expect($result)->toBeString();
    // Add more assertions as needed
});

it('throws an exception for invalid category', function () {
    expect(fn() => fakerer()->yourGenerator('invalid-category'))
        ->toThrow(InvalidArgumentException::class, 'Invalid category: invalid-category');
});
```

## Integration Testing

If you want to test the Fakerer package in your application, you can write integration tests that use the package's functionality. Here's an example:

```php
use Tests\TestCase;

class FakererIntegrationTest extends TestCase
{
    /** @test */
    public function it_can_generate_household_items()
    {
        $item = fakerer()->householdItem();
        
        $this->assertIsString($item);
        $this->assertNotEmpty($item);
    }
    
    /** @test */
    public function it_can_generate_household_items_in_specific_category()
    {
        $item = fakerer()->householdItem('kitchen');
        
        $this->assertIsString($item);
        $this->assertNotEmpty($item);
        
        // You could also verify that the item is actually a kitchen item
        // if you have access to the full list of items
    }
}
```
