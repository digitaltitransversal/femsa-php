<?php

namespace DigitalFemsa\Test\Model;

use DigitalFemsa\Model\Customer;
use DigitalFemsa\Test\TestCase;

/**
 * CustomerTest Class
 *
 * @category Class
 * @package  DigitalFemsa\Test\Model
 */
class CustomerTest extends TestCase
{
    /**
     * Test constructor with empty array
     */
    public function testConstructorEmpty()
    {
        $customer = new Customer();
        
        $this->assertInstanceOf(Customer::class, $customer);
    }

    /**
     * Test constructor with data
     */
    public function testConstructorWithData()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+5215555555555'
        ];
        
        $customer = new Customer($data);
        
        $this->assertEquals('John Doe', $customer->getName());
        $this->assertEquals('john@example.com', $customer->getEmail());
        $this->assertEquals('+5215555555555', $customer->getPhone());
    }

    /**
     * Test setName and getName
     */
    public function testSetAndGetName()
    {
        $customer = new Customer();
        $name = 'Jane Smith';
        
        $result = $customer->setName($name);
        
        $this->assertSame($customer, $result);
        $this->assertEquals($name, $customer->getName());
    }

    /**
     * Test setEmail and getEmail
     */
    public function testSetAndGetEmail()
    {
        $customer = new Customer();
        $email = 'jane@example.com';
        
        $result = $customer->setEmail($email);
        
        $this->assertSame($customer, $result);
        $this->assertEquals($email, $customer->getEmail());
    }

    /**
     * Test setPhone and getPhone
     */
    public function testSetAndGetPhone()
    {
        $customer = new Customer();
        $phone = '+5215555555555';
        
        $result = $customer->setPhone($phone);
        
        $this->assertSame($customer, $result);
        $this->assertEquals($phone, $customer->getPhone());
    }

    /**
     * Test setCorporate and getCorporate
     */
    public function testSetAndGetCorporate()
    {
        $customer = new Customer();
        
        $result = $customer->setCorporate(true);
        
        $this->assertSame($customer, $result);
        $this->assertTrue($customer->getCorporate());
        
        $customer->setCorporate(false);
        $this->assertFalse($customer->getCorporate());
    }

    /**
     * Test setCustomReference and getCustomReference
     */
    public function testSetAndGetCustomReference()
    {
        $customer = new Customer();
        $reference = 'REF-12345';
        
        $result = $customer->setCustomReference($reference);
        
        $this->assertSame($customer, $result);
        $this->assertEquals($reference, $customer->getCustomReference());
    }

    /**
     * Test setMetadata and getMetadata
     */
    public function testSetAndGetMetadata()
    {
        $customer = new Customer();
        $metadata = ['key1' => 'value1', 'key2' => 'value2'];
        
        $result = $customer->setMetadata($metadata);
        
        $this->assertSame($customer, $result);
        $this->assertEquals($metadata, $customer->getMetadata());
    }

    /**
     * Test listInvalidProperties with missing required fields
     */
    public function testListInvalidPropertiesMissingRequired()
    {
        $customer = new Customer();
        
        $invalidProperties = $customer->listInvalidProperties();
        
        $this->assertIsArray($invalidProperties);
        $this->assertContains("'name' can't be null", $invalidProperties);
    }

    /**
     * Test listInvalidProperties with valid data
     */
    public function testListInvalidPropertiesValid()
    {
        $customer = new Customer([
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);
        
        $invalidProperties = $customer->listInvalidProperties();
        
        $this->assertEmpty($invalidProperties);
    }

    /**
     * Test valid method
     */
    public function testValid()
    {
        $customer = new Customer(['name' => 'John Doe']);
        
        $this->assertTrue($customer->valid());
    }

    /**
     * Test getModelName
     */
    public function testGetModelName()
    {
        $customer = new Customer();
        
        $this->assertEquals('customer', $customer->getModelName());
    }

    /**
     * Test ArrayAccess offsetExists
     */
    public function testArrayAccessOffsetExists()
    {
        $customer = new Customer(['name' => 'John Doe']);
        
        $this->assertTrue(isset($customer['name']));
        $this->assertFalse(isset($customer['nonexistent']));
    }

    /**
     * Test ArrayAccess offsetGet
     */
    public function testArrayAccessOffsetGet()
    {
        $customer = new Customer(['name' => 'John Doe']);
        
        $this->assertEquals('John Doe', $customer['name']);
    }

    /**
     * Test ArrayAccess offsetSet
     */
    public function testArrayAccessOffsetSet()
    {
        $customer = new Customer();
        $customer['name'] = 'Jane Smith';
        
        $this->assertEquals('Jane Smith', $customer->getName());
    }

    /**
     * Test ArrayAccess offsetUnset
     */
    public function testArrayAccessOffsetUnset()
    {
        $customer = new Customer(['name' => 'John Doe']);
        unset($customer['name']);
        
        $this->assertNull($customer->getName());
    }

    /**
     * Test jsonSerialize
     */
    public function testJsonSerialize()
    {
        $customer = new Customer([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+5215555555555'
        ]);
        
        $json = $customer->jsonSerialize();
        
        $this->assertIsArray($json);
        $this->assertEquals('John Doe', $json['name']);
        $this->assertEquals('john@example.com', $json['email']);
        $this->assertEquals('+5215555555555', $json['phone']);
    }

    /**
     * Test __toString
     */
    public function testToString()
    {
        $customer = new Customer([
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);
        
        $string = (string) $customer;
        
        $this->assertIsString($string);
        $this->assertJson($string);
        
        $decoded = json_decode($string, true);
        $this->assertEquals('John Doe', $decoded['name']);
    }

    /**
     * Test openAPITypes
     */
    public function testOpenAPITypes()
    {
        $types = Customer::openAPITypes();
        
        $this->assertIsArray($types);
        $this->assertArrayHasKey('name', $types);
        $this->assertArrayHasKey('email', $types);
        $this->assertEquals('string', $types['name']);
    }

    /**
     * Test openAPIFormats
     */
    public function testOpenAPIFormats()
    {
        $formats = Customer::openAPIFormats();
        
        $this->assertIsArray($formats);
        $this->assertArrayHasKey('email', $formats);
        $this->assertEquals('email', $formats['email']);
    }

    /**
     * Test with null phone (nullable field)
     */
    public function testNullablePhoneField()
    {
        $customer = new Customer([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => null
        ]);
        
        $this->assertNull($customer->getPhone());
        $this->assertTrue($customer->valid());
    }

    /**
     * Test setters return self for fluent interface
     */
    public function testFluentInterface()
    {
        $customer = new Customer();
        
        $result = $customer
            ->setName('John Doe')
            ->setEmail('john@example.com')
            ->setPhone('+5215555555555')
            ->setCorporate(false);
        
        $this->assertSame($customer, $result);
        $this->assertEquals('John Doe', $customer->getName());
        $this->assertEquals('john@example.com', $customer->getEmail());
    }
}
