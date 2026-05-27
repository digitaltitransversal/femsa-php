<?php

namespace Femsa\Test\Api;

require_once __DIR__ . '/BaseTest.php';

use DigitalFemsa\Api\CustomersApi;
use DigitalFemsa\Configuration;
use DigitalFemsa\Model\Customer;
use DigitalFemsa\Model\CustomerResponse;
use DigitalFemsa\Test\Mocks\MockGuzzleClient;
use DigitalFemsa\Test\TestCase;
use DigitalFemsa\ApiException;

/**
 * CustomersApiMockTest Class - Tests with mocked HTTP client
 *
 * @category Class
 * @package  Femsa\Test\Api
 */
class CustomersApiMockTest extends TestCase
{
    private CustomersApi $api;
    private MockGuzzleClient $mockClient;
    private Configuration $config;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        parent::setUp();
        
        $this->config = BaseTest::createTestConfiguration();
        $this->mockClient = BaseTest::createMockClient();
        $this->api = new CustomersApi($this->mockClient, $this->config);
    }

    /**
     * Test createCustomer with successful response
     */
    public function testCreateCustomerSuccess()
    {
        $responseData = [
            'id' => 'cus_123456',
            'object' => 'customer',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+5215555555555',
            'created_at' => time(),
            'livemode' => false
        ];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 201)
        );

        $customer = new Customer(['name' => 'John Doe', 'email' => 'john@example.com']);
        $result = $this->api->createCustomer($customer, 'es');

        $this->assertInstanceOf(CustomerResponse::class, $result);
        $this->assertEquals('cus_123456', $result->getId());
        $this->assertEquals('John Doe', $result->getName());
    }

    /**
     * Test createCustomer with 400 Bad Request
     */
    public function testCreateCustomerBadRequest()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionCode(400);

        $this->mockClient->addResponse(
            $this->createErrorResponse(400, 'Invalid customer data', 'invalid_request')
        );

        $customer = new Customer(['name' => '']);
        $this->api->createCustomer($customer);
    }

    /**
     * Test createCustomer with 401 Unauthorized
     */
    public function testCreateCustomerUnauthorized()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionCode(401);

        $this->mockClient->addResponse(
            $this->createErrorResponse(401, 'Invalid API key', 'unauthorized')
        );

        $customer = new Customer(['name' => 'John Doe']);
        $this->api->createCustomer($customer);
    }

    /**
     * Test createCustomer with 500 Server Error
     */
    public function testCreateCustomerServerError()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionCode(500);

        $this->mockClient->addResponse(
            $this->createErrorResponse(500, 'Internal server error', 'server_error')
        );

        $customer = new Customer(['name' => 'John Doe']);
        $this->api->createCustomer($customer);
    }

    /**
     * Test getCustomerById with successful response
     */
    public function testGetCustomerByIdSuccess()
    {
        $responseData = [
            'id' => 'cus_123456',
            'object' => 'customer',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'created_at' => time()
        ];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 200)
        );

        $result = $this->api->getCustomerById('cus_123456', 'es');

        $this->assertInstanceOf(CustomerResponse::class, $result);
        $this->assertEquals('cus_123456', $result->getId());
    }

    /**
     * Test getCustomerById with 404 Not Found
     */
    public function testGetCustomerByIdNotFound()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionCode(404);

        $this->mockClient->addResponse(
            $this->createErrorResponse(404, 'Customer not found', 'not_found')
        );

        $this->api->getCustomerById('cus_invalid', 'es');
    }

    /**
     * Test getCustomers with successful response
     */
    public function testGetCustomersSuccess()
    {
        $responseData = [
            'object' => 'list',
            'has_more' => false,
            'data' => [
                [
                    'id' => 'cus_123456',
                    'name' => 'John Doe',
                    'email' => 'john@example.com'
                ],
                [
                    'id' => 'cus_789012',
                    'name' => 'Jane Smith',
                    'email' => 'jane@example.com'
                ]
            ]
        ];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 200)
        );

        $result = $this->api->getCustomers('es');

        $this->assertIsObject($result);
        $this->assertObjectHasAttribute('data', $result);
    }

    /**
     * Test updateCustomer with successful response
     */
    public function testUpdateCustomerSuccess()
    {
        $responseData = [
            'id' => 'cus_123456',
            'object' => 'customer',
            'name' => 'John Doe Updated',
            'email' => 'john.updated@example.com',
            'updated_at' => time()
        ];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 200)
        );

        $updateData = new \DigitalFemsa\Model\UpdateCustomer([
            'name' => 'John Doe Updated'
        ]);

        $result = $this->api->updateCustomer('cus_123456', $updateData, 'es');

        $this->assertInstanceOf(CustomerResponse::class, $result);
        $this->assertEquals('John Doe Updated', $result->getName());
    }

    /**
     * Test deleteCustomerById with successful response
     */
    public function testDeleteCustomerByIdSuccess()
    {
        $responseData = [
            'id' => 'cus_123456',
            'object' => 'customer',
            'deleted' => true
        ];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 200)
        );

        $result = $this->api->deleteCustomerById('cus_123456', 'es');

        $this->assertIsObject($result);
        $this->assertTrue(property_exists($result, 'deleted') && $result->deleted);
    }

    /**
     * Test that request headers are set correctly
     */
    public function testRequestHeadersAreSet()
    {
        $responseData = ['id' => 'cus_123', 'name' => 'Test'];

        $this->mockClient->addResponse(
            $this->createJsonResponse($responseData, 200)
        );

        $this->api->getCustomerById('cus_123', 'es');

        $lastRequest = $this->mockClient->getLastRequest();
        
        $this->assertNotNull($lastRequest);
        $this->assertEquals('GET', $lastRequest->getMethod());
        $this->assertStringContainsString('/customers/cus_123', (string) $lastRequest->getUri());
    }

    /**
     * Test configuration is used correctly
     */
    public function testConfigurationIsUsed()
    {
        $config = $this->api->getConfig();
        
        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertNotEmpty($config->getHost());
    }
}
