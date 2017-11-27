<?php

namespace Test\Brownie\Util;

use Brownie\Util\StorageList;

class StorageListTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var StorageList
     */
    private $storageList;

    protected function setUp()
    {
        $this->storageList = new StorageList(array(
            'test1' => 'Hello1',
            'test3' => 'Hello3',
            'test4' => 'Hello4',
        ));
    }

    protected function tearDown()
    {
        $this->storageList = null;
    }

    public function testGet()
    {
        $this->assertEquals('Hello1', $this->storageList->get('test1'));
        $this->assertEquals('Hello3', $this->storageList->get('test3'));
        $this->assertEquals('Hello4', $this->storageList->get('test4'));
        $this->assertNull($this->storageList->get('test5'));
    }

    public function testToArray()
    {
        $list = array(
            'test1' => 'Hello1',
            'test3' => 'Hello3',
            'test4' => 'Hello4',
        );
        $this->assertEquals($list, $this->storageList->toArray());
    }
}
