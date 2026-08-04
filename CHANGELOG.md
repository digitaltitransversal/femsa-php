# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.2.1] - 2026-08-04

### API Specification
- Based on Femsa OpenAPI specification version **2.2.0**
- Generated with OpenAPI Generator **7.5.0**

### Added
- New `redirection_time` parameter in `CheckoutRequest` model
  - Type: `integer`
  - Description: Number of seconds to wait before redirecting to the success or failure URL
  - Usage: Optional parameter when creating orders with hosted payment checkout

### Changed
- Updated Makefile to use feature branch `feature/BOPR-2819-checkout-param` from OpenAPI spec
- Regenerated SDK models and APIs to include new checkout parameter

## [1.2.0] - 2026-05-26

### API Specification
- Based on Femsa OpenAPI specification version **2.1.0**
- Generated with OpenAPI Generator **7.5.0**

### Fixed
- Fixed compatibility with Guzzle 6.x by replacing `\GuzzleHttp\Utils::jsonEncode()` with `\GuzzleHttp\json_encode()` across all API classes
- Resolved "Call to undefined method" errors when creating/updating resources via API

### Added
- Comprehensive unit test suite with 33 core tests (100% passing)
- Mock-based testing infrastructure for API testing without external dependencies
- Test fixtures for common API responses and errors
- `TESTING.md` documentation with testing guidelines and examples
- Base test classes and helpers for easier test development

### Changed
- Updated PHPUnit configuration to support multiple test suites (core, api, model)
- Configured default test suite to run only stable unit tests
- Updated `.gitignore` to exclude test coverage reports

## [1.2.0] - Previous release

Initial release with OpenAPI generated code.
