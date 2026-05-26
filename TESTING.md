# Testing Guide - Femsa PHP SDK

This document describes how to run and write tests for the Femsa PHP SDK.

## Test Structure

The test suite is organized into the following categories:

### Test Suites

- **core**: Tests for core classes (Configuration, ApiException, etc.)
- **api**: Tests for API client classes with mocked HTTP responses
- **model**: Tests for Model classes (data validation, serialization)
- **unit**: All unit tests (excludes integration tests)

## Running Tests

### Run All Tests

```bash
./vendor/bin/phpunit
```

### Run Specific Test Suite

```bash
# Run core tests only
./vendor/bin/phpunit --testsuite core

# Run API tests only
./vendor/bin/phpunit --testsuite api

# Run model tests only
./vendor/bin/phpunit --testsuite model
```

### Run Specific Test File

```bash
./vendor/bin/phpunit test/ConfigurationTest.php
./vendor/bin/phpunit test/Api/CustomersApiMockTest.php
./vendor/bin/phpunit test/Model/CustomerTest.php
```

### Run With Coverage

```bash
# Generate HTML coverage report
./vendor/bin/phpunit --coverage-html coverage/

# View text coverage summary
./vendor/bin/phpunit --coverage-text
```

## Test Organization

```
test/
├── TestCase.php                    # Base test class with helpers
├── Api/
│   ├── BaseTest.php               # API test helpers
│   ├── CustomersApiMockTest.php   # Example API test with mocks
│   └── ...                        # Other API tests
├── Model/
│   ├── CustomerTest.php           # Example Model test
│   └── ...                        # Other Model tests
├── Mocks/
│   └── MockGuzzleClient.php       # Mock HTTP client
├── Fixtures/
│   ├── Customers/                 # Customer fixtures
│   ├── Orders/                    # Order fixtures
│   └── Common/                    # Common error responses
├── ConfigurationTest.php          # Core class tests
├── ApiExceptionTest.php
└── ...
```

## Writing Tests

### API Tests with Mocks

API tests should use the `MockGuzzleClient` to avoid making real HTTP requests:

```php
<?php
namespace Femsa\Test\Api;

use DigitalFemsa\Api\CustomersApi;
use DigitalFemsa\Test\TestCase;

class CustomersApiMockTest extends TestCase
{
    private CustomersApi $api;
    private MockGuzzleClient $mockClient;

    public function setUp(): void
    {
        parent::setUp();
        
        $config = BaseTest::createTestConfiguration();
        $this->mockClient = BaseTest::createMockClient();
        $this->api = new CustomersApi($this->mockClient, $config);
    }

    public function testCreateCustomerSuccess()
    {
        $responseData = ['id' => 'cus_123', 'name' => 'John Doe'];
        
        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 201)
        );

        $customer = new Customer(['name' => 'John Doe']);
        $result = $this->api->createCustomer($customer);

        $this->assertInstanceOf(CustomerResponse::class, $result);
        $this->assertEquals('cus_123', $result->getId());
    }
}
```

### Model Tests

Model tests should verify:
- Constructor behavior
- Getters and setters
- Validation
- Serialization (toArray, jsonSerialize)
- ArrayAccess interface

```php
<?php
namespace DigitalFemsa\Test\Model;

use DigitalFemsa\Model\Customer;
use DigitalFemsa\Test\TestCase;

class CustomerTest extends TestCase
{
    public function testConstructorWithData()
    {
        $data = ['name' => 'John Doe', 'email' => 'john@example.com'];
        $customer = new Customer($data);
        
        $this->assertEquals('John Doe', $customer->getName());
        $this->assertEquals('john@example.com', $customer->getEmail());
    }

    public function testValidation()
    {
        $customer = new Customer();
        $invalidProperties = $customer->listInvalidProperties();
        
        $this->assertContains("'name' can't be null", $invalidProperties);
    }
}
```

### Core Class Tests

Core class tests should verify:
- Default values
- Setters and getters
- Configuration behavior
- Error handling

```php
<?php
namespace DigitalFemsa\Test;

use DigitalFemsa\Configuration;

class ConfigurationTest extends TestCase
{
    public function testDefaultConfiguration()
    {
        $config = Configuration::getDefaultConfiguration();
        
        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertEquals('https://api.digitalfemsa.io', $config->getHost());
    }
}
```

## Test Helpers

### Base TestCase Helpers

The `TestCase` class provides helpful methods:

- `createMockResponse($statusCode, $headers, $body)` - Create HTTP response
- `createJsonResponse($data, $statusCode)` - Create JSON response
- `createErrorResponse($statusCode, $message, $code)` - Create error response
- `assertArrayHasKeys($keys, $array)` - Assert array has multiple keys
- `loadFixture($name)` - Load fixture data from JSON file

### MockGuzzleClient

The mock client allows you to queue responses:

```php
$mockClient = new MockGuzzleClient();

// Add single response
$mockClient->addResponse($response);

// Add multiple responses
$mockClient->addResponses([$response1, $response2]);

// Get captured requests
$requests = $mockClient->getRequests();
$lastRequest = $mockClient->getLastRequest();

// Reset mock
$mockClient->reset();
```

## Fixtures

Fixtures are JSON files containing sample API responses. They are located in `test/Fixtures/`.

### Loading Fixtures

```php
// Load fixture as array
$data = $this->loadFixture('Customers/customer_response_200.json');

// Load fixture as JSON string
$json = $this->loadFixtureJson('Common/error_404.json');
```

### Creating Fixtures

Create JSON files in the appropriate subdirectory:

```
test/Fixtures/
├── Customers/
│   ├── customer_response_200.json
│   ├── customer_list_response.json
│   └── customer_error_400.json
├── Orders/
│   └── order_response_201.json
└── Common/
    ├── error_400.json
    ├── error_401.json
    ├── error_404.json
    └── error_500.json
```

## Coverage Goals

- **Core classes**: 85%+ coverage
- **API classes**: 80%+ coverage
- **Model classes**: 75%+ coverage
- **Overall**: 75-85% coverage

## Continuous Integration

Tests run automatically on:
- Pull requests
- Pushes to main branch
- Nightly builds

## Troubleshooting

### Deprecation Warnings

You may see deprecation warnings from Guzzle 6.x when running with PHP 8.3+. These are expected and do not affect test functionality.

To suppress them, add to `phpunit.xml.dist`:

```xml
<php>
    <ini name="error_reporting" value="E_ALL & ~E_DEPRECATED"/>
</php>
```

### Test Failures

If tests fail:

1. Check that all dependencies are installed: `composer install`
2. Verify PHP version compatibility: `php --version` (requires 7.4+)
3. Clear PHPUnit cache: `rm .phpunit.result.cache`
4. Run with verbose output: `./vendor/bin/phpunit --verbose`

## Contributing

When adding new features:

1. Write tests first (TDD approach)
2. Ensure all tests pass
3. Maintain or improve code coverage
4. Follow existing test patterns
5. Add fixtures for new API endpoints

## Resources

- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [Guzzle Testing](https://docs.guzzlephp.org/en/stable/testing.html)
- [PHP Testing Best Practices](https://phpunit.de/best-practices.html)
