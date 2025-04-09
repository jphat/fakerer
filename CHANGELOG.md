# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog],
and this project adheres to [Semantic Versioning].

## [Unreleased]

- /

## [0.0.2] - 2025-04-09

### Added

- Added global `fakerer()` helper function for easier access anywhere in Laravel applications
- Added proper service provider bootstrap for automatic registration
- Added Artisan command `php artisan fakerer household` for CLI access
- Added category filtering for household items via `--category` option in CLI
- Created comprehensive documentation in `/docs` directory
  - API documentation with PHPDoc comments for phpDocumentor
  - Installation guide
  - Usage examples
  - Testing guide
  - Contributing guidelines

### Changed

- Changed namespace from `App\Fakerer` to `Jphat\Fakerer` for better package compatibility
- Updated service provider to register Fakerer as a singleton
- Improved command-line interface with helpful messages

### Fixed

- Fixed namespace inconsistencies in test files
- Fixed autoloading of helper functions

## [0.0.1] - 2025-04-09

- initial release

<!-- Links -->
[keep a changelog]: https://keepachangelog.com/en/1.0.0/
[semantic versioning]: https://semver.org/spec/v2.0.0.html

<!-- Versions -->
[unreleased]: https://github.com/jphat/fakerer/compare/v0.0.2...HEAD
[0.0.2]: https://github.com/jphat/fakerer/compare/v0.0.1...v0.0.2
[0.0.1]: https://github.com/jphat/fakerer/releases/tag/v0.0.1
