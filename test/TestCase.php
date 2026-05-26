<?php

namespace DigitalFemsa\Test;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use GuzzleHttp\Psr7\Response;

/**
 * Base TestCase class with common helpers
 */
abstract class TestCase extends PHPUnitTestCase
{
    /**
     * Create a mock HTTP response
     *
     * @param int $statusCode
     * @param array $headers
     * @param string|null $body
     * @return Response
     */
    protected function createMockResponse(int $statusCode = 200, array $headers = [], ?string $body = null): Response
    {
        $defaultHeaders = [
            'Content-Type' => 'application/json',
        ];
        
        return new Response(
            $statusCode,
            array_merge($defaultHeaders, $headers),
            $body
        );
    }

    /**
     * Create a mock JSON response
     *
     * @param array $data
     * @param int $statusCode
     * @return Response
     */
    protected function createJsonResponse(array $data, int $statusCode = 200): Response
    {
        return $this->createMockResponse(
            $statusCode,
            ['Content-Type' => 'application/json'],
            json_encode($data)
        );
    }

    /**
     * Create a mock error response
     *
     * @param int $statusCode
     * @param string $message
     * @param string|null $code
     * @return Response
     */
    protected function createErrorResponse(int $statusCode, string $message, ?string $code = null): Response
    {
        $error = [
            'error' => [
                'message' => $message,
                'code' => $code ?? 'error_' . $statusCode,
                'status' => $statusCode,
            ]
        ];

        return $this->createJsonResponse($error, $statusCode);
    }

    /**
     * Assert that an array has the expected keys
     *
     * @param array $expectedKeys
     * @param array $array
     * @param string $message
     */
    protected function assertArrayHasKeys(array $expectedKeys, array $array, string $message = ''): void
    {
        foreach ($expectedKeys as $key) {
            $this->assertArrayHasKey($key, $array, $message ?: "Array should have key: {$key}");
        }
    }

    /**
     * Assert that a value is a valid ISO 8601 datetime string
     *
     * @param mixed $value
     * @param string $message
     */
    protected function assertIsValidDateTime($value, string $message = ''): void
    {
        $this->assertIsString($value, $message);
        $datetime = \DateTime::createFromFormat(\DateTime::ATOM, $value);
        $this->assertNotFalse($datetime, $message ?: "Value should be a valid ISO 8601 datetime: {$value}");
    }

    /**
     * Get fixture file path
     *
     * @param string $name
     * @return string
     */
    protected function getFixturePath(string $name): string
    {
        return __DIR__ . '/Fixtures/' . $name;
    }

    /**
     * Load fixture data
     *
     * @param string $name
     * @return array
     */
    protected function loadFixture(string $name): array
    {
        $path = $this->getFixturePath($name);
        
        if (!file_exists($path)) {
            throw new \RuntimeException("Fixture not found: {$path}");
        }

        $content = file_get_contents($path);
        return json_decode($content, true);
    }

    /**
     * Load fixture as JSON string
     *
     * @param string $name
     * @return string
     */
    protected function loadFixtureJson(string $name): string
    {
        $path = $this->getFixturePath($name);
        
        if (!file_exists($path)) {
            throw new \RuntimeException("Fixture not found: {$path}");
        }

        return file_get_contents($path);
    }
}
