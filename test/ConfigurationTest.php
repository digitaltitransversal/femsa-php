<?php

namespace DigitalFemsa\Test;

use DigitalFemsa\Configuration;

/**
 * ConfigurationTest Class
 *
 * @category Class
 * @package  DigitalFemsa\Test
 */
class ConfigurationTest extends TestCase
{
    /**
     * Test default configuration
     */
    public function testDefaultConfiguration()
    {
        $config = Configuration::getDefaultConfiguration();
        
        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertEquals('https://api.digitalfemsa.io', $config->getHost());
        $this->assertEquals('Femsa/v2 PhpBindings/1.2.0', $config->getUserAgent());
        $this->assertFalse($config->getDebug());
    }

    /**
     * Test constructor
     */
    public function testConstructor()
    {
        $config = new Configuration();
        
        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertEquals('https://api.digitalfemsa.io', $config->getHost());
        $this->assertNotEmpty($config->getTempFolderPath());
    }

    /**
     * Test setHost and getHost
     */
    public function testSetAndGetHost()
    {
        $config = new Configuration();
        $host = 'https://custom.api.com';
        
        $result = $config->setHost($host);
        
        $this->assertSame($config, $result);
        $this->assertEquals($host, $config->getHost());
    }

    /**
     * Test setApiKey and getApiKey
     */
    public function testSetAndGetApiKey()
    {
        $config = new Configuration();
        $identifier = 'Authorization';
        $key = 'test_api_key_123';
        
        $result = $config->setApiKey($identifier, $key);
        
        $this->assertSame($config, $result);
        $this->assertEquals($key, $config->getApiKey($identifier));
    }

    /**
     * Test getApiKey with non-existent identifier
     */
    public function testGetApiKeyNonExistent()
    {
        $config = new Configuration();
        
        $this->assertNull($config->getApiKey('NonExistent'));
    }

    /**
     * Test setApiKeyPrefix and getApiKeyPrefix
     */
    public function testSetAndGetApiKeyPrefix()
    {
        $config = new Configuration();
        $identifier = 'Authorization';
        $prefix = 'Bearer';
        
        $result = $config->setApiKeyPrefix($identifier, $prefix);
        
        $this->assertSame($config, $result);
        $this->assertEquals($prefix, $config->getApiKeyPrefix($identifier));
    }

    /**
     * Test getApiKeyPrefix with non-existent identifier
     */
    public function testGetApiKeyPrefixNonExistent()
    {
        $config = new Configuration();
        
        $this->assertNull($config->getApiKeyPrefix('NonExistent'));
    }

    /**
     * Test setAccessToken and getAccessToken
     */
    public function testSetAndGetAccessToken()
    {
        $config = new Configuration();
        $token = 'access_token_123';
        
        $result = $config->setAccessToken($token);
        
        $this->assertSame($config, $result);
        $this->assertEquals($token, $config->getAccessToken());
    }

    /**
     * Test setUsername and getUsername
     */
    public function testSetAndGetUsername()
    {
        $config = new Configuration();
        $username = 'testuser';
        
        $result = $config->setUsername($username);
        
        $this->assertSame($config, $result);
        $this->assertEquals($username, $config->getUsername());
    }

    /**
     * Test setPassword and getPassword
     */
    public function testSetAndGetPassword()
    {
        $config = new Configuration();
        $password = 'testpass123';
        
        $result = $config->setPassword($password);
        
        $this->assertSame($config, $result);
        $this->assertEquals($password, $config->getPassword());
    }

    /**
     * Test setUserAgent and getUserAgent
     */
    public function testSetAndGetUserAgent()
    {
        $config = new Configuration();
        $userAgent = 'CustomAgent/1.0';
        
        $result = $config->setUserAgent($userAgent);
        
        $this->assertSame($config, $result);
        $this->assertEquals($userAgent, $config->getUserAgent());
    }

    /**
     * Test setDebug and getDebug
     */
    public function testSetAndGetDebug()
    {
        $config = new Configuration();
        
        $result = $config->setDebug(true);
        
        $this->assertSame($config, $result);
        $this->assertTrue($config->getDebug());
        
        $config->setDebug(false);
        $this->assertFalse($config->getDebug());
    }

    /**
     * Test setDebugFile and getDebugFile
     */
    public function testSetAndGetDebugFile()
    {
        $config = new Configuration();
        $debugFile = '/tmp/debug.log';
        
        $result = $config->setDebugFile($debugFile);
        
        $this->assertSame($config, $result);
        $this->assertEquals($debugFile, $config->getDebugFile());
    }

    /**
     * Test setTempFolderPath and getTempFolderPath
     */
    public function testSetAndGetTempFolderPath()
    {
        $config = new Configuration();
        $tempPath = '/tmp/custom';
        
        $result = $config->setTempFolderPath($tempPath);
        
        $this->assertSame($config, $result);
        $this->assertEquals($tempPath, $config->getTempFolderPath());
    }

    /**
     * Test getApiKeyWithPrefix with prefix
     */
    public function testGetApiKeyWithPrefix()
    {
        $config = new Configuration();
        $identifier = 'Authorization';
        $key = 'test_key';
        $prefix = 'Bearer';
        
        $config->setApiKey($identifier, $key);
        $config->setApiKeyPrefix($identifier, $prefix);
        
        $result = $config->getApiKeyWithPrefix($identifier);
        
        $this->assertEquals('Bearer test_key', $result);
    }

    /**
     * Test getApiKeyWithPrefix without prefix
     */
    public function testGetApiKeyWithPrefixNoPrefix()
    {
        $config = new Configuration();
        $identifier = 'Authorization';
        $key = 'test_key';
        
        $config->setApiKey($identifier, $key);
        
        $result = $config->getApiKeyWithPrefix($identifier);
        
        $this->assertEquals('test_key', $result);
    }

    /**
     * Test getApiKeyWithPrefix with non-existent key
     */
    public function testGetApiKeyWithPrefixNonExistent()
    {
        $config = new Configuration();
        
        $result = $config->getApiKeyWithPrefix('NonExistent');
        
        $this->assertNull($result);
    }

    /**
     * Test boolean format for query string
     */
    public function testBooleanFormatForQueryString()
    {
        $config = new Configuration();
        
        $this->assertEquals(Configuration::BOOLEAN_FORMAT_INT, $config->getBooleanFormatForQueryString());
        
        $config->setBooleanFormatForQueryString(Configuration::BOOLEAN_FORMAT_STRING);
        $this->assertEquals(Configuration::BOOLEAN_FORMAT_STRING, $config->getBooleanFormatForQueryString());
    }

    /**
     * Test toDebugReport
     */
    public function testToDebugReport()
    {
        $config = new Configuration();
        $config->setDebug(true);
        
        $report = $config->toDebugReport();
        
        $this->assertIsString($report);
        $this->assertStringContainsString('PHP SDK', $report);
        $this->assertStringContainsString('Debug Report', $report);
        $this->assertStringContainsString('PHP Version', $report);
    }
}
