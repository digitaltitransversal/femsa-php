<?php

namespace DigitalFemsa\Test;

use DigitalFemsa\ApiException;

/**
 * ApiExceptionTest Class
 *
 * @category Class
 * @package  DigitalFemsa\Test
 */
class ApiExceptionTest extends TestCase
{
    /**
     * Test constructor with default values
     */
    public function testConstructorDefaults()
    {
        $exception = new ApiException();
        
        $this->assertInstanceOf(ApiException::class, $exception);
        $this->assertEquals('', $exception->getMessage());
        $this->assertEquals(0, $exception->getCode());
        $this->assertEquals([], $exception->getResponseHeaders());
        $this->assertNull($exception->getResponseBody());
    }

    /**
     * Test constructor with all parameters
     */
    public function testConstructorWithParameters()
    {
        $message = 'Test error message';
        $code = 404;
        $headers = ['Content-Type' => 'application/json'];
        $body = ['error' => 'Not found'];
        
        $exception = new ApiException($message, $code, $headers, $body);
        
        $this->assertEquals($message, $exception->getMessage());
        $this->assertEquals($code, $exception->getCode());
        $this->assertEquals($headers, $exception->getResponseHeaders());
        $this->assertEquals($body, $exception->getResponseBody());
    }

    /**
     * Test getResponseHeaders
     */
    public function testGetResponseHeaders()
    {
        $headers = [
            'Content-Type' => 'application/json',
            'X-Request-Id' => '12345'
        ];
        
        $exception = new ApiException('Error', 400, $headers);
        
        $this->assertEquals($headers, $exception->getResponseHeaders());
    }

    /**
     * Test getResponseBody with array
     */
    public function testGetResponseBodyArray()
    {
        $body = ['error' => 'Bad request', 'code' => 'invalid_param'];
        
        $exception = new ApiException('Error', 400, [], $body);
        
        $this->assertEquals($body, $exception->getResponseBody());
    }

    /**
     * Test getResponseBody with string
     */
    public function testGetResponseBodyString()
    {
        $body = 'Error message as string';
        
        $exception = new ApiException('Error', 500, [], $body);
        
        $this->assertEquals($body, $exception->getResponseBody());
    }

    /**
     * Test getResponseBody with stdClass
     */
    public function testGetResponseBodyStdClass()
    {
        $body = new \stdClass();
        $body->error = 'Server error';
        $body->code = 500;
        
        $exception = new ApiException('Error', 500, [], $body);
        
        $this->assertEquals($body, $exception->getResponseBody());
    }

    /**
     * Test setResponseObject and getResponseObject
     */
    public function testSetAndGetResponseObject()
    {
        $exception = new ApiException();
        
        $object = new \stdClass();
        $object->data = 'test';
        
        $exception->setResponseObject($object);
        
        $this->assertEquals($object, $exception->getResponseObject());
    }

    /**
     * Test exception with 400 status code
     */
    public function testBadRequestException()
    {
        $exception = new ApiException('Bad Request', 400);
        
        $this->assertEquals(400, $exception->getCode());
        $this->assertEquals('Bad Request', $exception->getMessage());
    }

    /**
     * Test exception with 401 status code
     */
    public function testUnauthorizedException()
    {
        $exception = new ApiException('Unauthorized', 401);
        
        $this->assertEquals(401, $exception->getCode());
        $this->assertEquals('Unauthorized', $exception->getMessage());
    }

    /**
     * Test exception with 404 status code
     */
    public function testNotFoundException()
    {
        $exception = new ApiException('Not Found', 404);
        
        $this->assertEquals(404, $exception->getCode());
        $this->assertEquals('Not Found', $exception->getMessage());
    }

    /**
     * Test exception with 500 status code
     */
    public function testServerErrorException()
    {
        $exception = new ApiException('Internal Server Error', 500);
        
        $this->assertEquals(500, $exception->getCode());
        $this->assertEquals('Internal Server Error', $exception->getMessage());
    }

    /**
     * Test exception is throwable
     */
    public function testExceptionIsThrowable()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessage('Test exception');
        $this->expectExceptionCode(422);
        
        throw new ApiException('Test exception', 422);
    }

    /**
     * Test exception with JSON response body
     */
    public function testExceptionWithJsonResponseBody()
    {
        $body = [
            'error' => [
                'message' => 'Validation failed',
                'code' => 'validation_error',
                'details' => [
                    'field' => 'email',
                    'issue' => 'invalid format'
                ]
            ]
        ];
        
        $exception = new ApiException('Validation Error', 422, [], $body);
        
        $responseBody = $exception->getResponseBody();
        $this->assertIsArray($responseBody);
        $this->assertArrayHasKey('error', $responseBody);
        $this->assertEquals('Validation failed', $responseBody['error']['message']);
    }

    /**
     * Test __toString method
     */
    public function testToString()
    {
        $exception = new ApiException('Test error', 400);
        
        $string = (string) $exception;
        
        $this->assertStringContainsString('Test error', $string);
        $this->assertStringContainsString('ApiException', $string);
    }
}
