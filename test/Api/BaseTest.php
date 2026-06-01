<?php

namespace Femsa\Test\Api;

use DigitalFemsa\Configuration;
use DigitalFemsa\Test\Mocks\MockGuzzleClient;
use GuzzleHttp\Psr7\Response;

class BaseTest
{
    public static string $host;

    /**
     * Create a test configuration
     *
     * @return Configuration
     */
    public static function createTestConfiguration(): Configuration
    {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost(self::$host);
        $config->setApiKey('Authorization', 'test_api_key');
        return $config;
    }

    /**
     * Create a mock Guzzle client
     *
     * @return MockGuzzleClient
     */
    public static function createMockClient(): MockGuzzleClient
    {
        return new MockGuzzleClient();
    }

    /**
     * Create a success response
     *
     * @param array $data
     * @param int $statusCode
     * @return Response
     */
    public static function createSuccessResponse(array $data, int $statusCode = 200): Response
    {
        return new Response(
            $statusCode,
            ['Content-Type' => 'application/json'],
            json_encode($data)
        );
    }

    /**
     * Create an error response
     *
     * @param int $statusCode
     * @param string $message
     * @param string|null $code
     * @return Response
     */
    public static function createErrorResponse(int $statusCode, string $message, ?string $code = null): Response
    {
        $error = [
            'error' => [
                'message' => $message,
                'code' => $code ?? 'error_' . $statusCode,
                'status' => $statusCode,
            ]
        ];

        return new Response(
            $statusCode,
            ['Content-Type' => 'application/json'],
            json_encode($error)
        );
    }
}

BaseTest::$host = getenv('BASE_PATH') ?: 'localhost:3000';
