# Contributing to Fakerer

Thank you for considering contributing to the Fakerer package! This document outlines the process for contributing to the project.

## Code of Conduct

This project adheres to a Code of Conduct. By participating, you are expected to uphold this code.

## How Can I Contribute?

### Reporting Bugs

- Ensure the bug hasn't already been reported by searching GitHub Issues
- If you don't find an open issue addressing the problem, open a new one
- Include a title and clear description, as much relevant information as possible, and steps to reproduce the issue

### Suggesting Enhancements

- Open a new issue with your suggestion
- Include a clear title and description
- Provide specific examples, if applicable
- Describe the current behavior and explain which behavior you expected to see instead

### Pull Requests

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature-name`)
3. Make your changes
4. Run the tests to ensure they still pass
5. Commit your changes (`git commit -m 'Add some feature'`)
6. Push to your branch (`git push origin feature/your-feature-name`)
7. Open a Pull Request against the main branch

## Development Setup

### Prerequisites

- PHP 8.4+
- Composer

### Installation for Development

1. Clone your fork of the repository
2. Install dependencies:

```bash
composer install
```

### Running Tests

```bash
composer test
```

### Coding Standards

This project uses Laravel Pint for code style. You can format your code by running:

```bash
composer format
```

### Static Analysis

This project uses PHPStan for static analysis. You can run the analysis with:

```bash
composer analyse
```

## Adding New Generators

If you want to add a new generator to Fakerer, follow these steps:

1. Create a new method in the `Fakerer` class
2. Write comprehensive PHPDoc documentation for your method
3. Add test coverage for your generator
4. Update the documentation to include your new generator
5. Submit a pull request

### Example Template for a New Generator

```php
/**
 * Get a random [description of what your generator does].
 *
 * @param string|null $option Optional description of the parameter
 * @return string Description of what is returned
 * @throws \InvalidArgumentException If the option is invalid
 */
public function yourGenerator(?string $option = null): string
{
    // Implementation here
}
```

## Documentation

When adding new features, please also update the documentation in the `docs` directory.

## License

By contributing to Fakerer, you agree that your contributions will be licensed under the project's MIT License.
