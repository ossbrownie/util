<?php

namespace Test\Brownie\Util;

use Brownie\Util\Registry;

class RegistryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Registry
     */
    private $registry;

    protected function setUp()
    {
        $this->registry = new Registry('TestRegistryName');
    }

    protected function tearDown()
    {
        $this->registry = null;
    }

    public function testSetGet()
    {
        $key1 = 'key1';
        $value1 = 'value1';
        $value2 = 'value2';
        $key3 = 'key3';
        $value3 = 'value3';
        $value4 = 'value4';
        $this->registry->set($value1, $key1);
        $this->registry->set($value2);
        $this->registry->set($value3, $key3);
        $this->registry->set($value4);
        $this->assertEquals($value1, $this->registry->get($key1));
        $this->assertEquals($value2, $this->registry->get(0));
        $this->assertEquals($value3, $this->registry->get($key3));
        $this->assertEquals($value4, $this->registry->get(1));
    }

    public function testReSetGet()
    {
        $key1 = 'key1';
        $value1 = 'value1';
        $value2 = 'value2';
        $this->registry->set($value1, $key1);
        $this->registry->set($value2, $key1);
        $this->assertEquals($value2, $this->registry->get($key1));
    }

    public function testNoGet()
    {
        $value = 'NoValue';
        $this->assertEquals($value, $this->registry->get('test', $value));
    }

    public function testHas()
    {
        $key1 = 'key1';
        $key2 = 'key2';
        $value2 = 'value2';
        $this->registry->set($value2, $key2);
        $this->assertFalse($this->registry->has($key1));
        $this->assertTrue($this->registry->has($key2));
        $this->assertEquals($value2, $this->registry->get($key2));
    }

    public function testDelete()
    {
        $key1 = 'key1';
        $value1 = 'value1';
        $this->assertFalse($this->registry->has($key1));
        $this->registry->set($value1, $key1);
        $this->assertTrue($this->registry->has($key1));
        $this->assertTrue($this->registry->delete($key1));
        $this->assertFalse($this->registry->delete($key1));
        $this->assertFalse($this->registry->has($key1));
    }

    public function testCount()
    {
        $key1 = 'key1';
        $value1 = 'value1';
        $value2 = 'value2';
        $key3 = 'key3';
        $value3 = 'value3';
        $value4 = 'value4';
        $this->registry->set($value1, $key1);
        $this->registry->set($value2);
        $this->registry->set($value3, $key3);
        $this->registry->set($value4);
        $this->assertEquals(4, $this->registry->count());
    }


    public function testToArray()
    {
        $key1 = 'key1';
        $value1 = 'value1';
        $value2 = 'value2';
        $key3 = 'key3';
        $value3 = 'value3';
        $value4 = 'value4';
        $this->registry->set($value1, $key1);
        $this->registry->set($value2);
        $this->registry->set($value3, $key3);
        $this->registry->set($value4);
        $this->assertEquals(array(
            'key1' => 'value1',
            0 => 'value2',
            'key3' => 'value3',
            1 => 'value4'
        ), $this->registry->toArray());
    }

    public function testGetRegistryName()
    {
        $this->assertEquals('TestRegistryName', $this->registry->getRegistryName());
    }
}
