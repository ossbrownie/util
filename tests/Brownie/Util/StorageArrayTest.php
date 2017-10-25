<?php

use Brownie\Util\StorageArray;

class StorageArrayTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testConstructorOk1()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $arrayList = new StorageArray($fields, true);
        $this->assertEquals($fields, $arrayList->toArray());
    }

    public function testConstructorOk2()
    {
        $fields = array();
        $arrayList = new StorageArray($fields, false);
        $this->assertEquals($fields, $arrayList->toArray());
    }

    /**
     * @expectedException \Brownie\Util\Exception\UndefinedMethodException
     */
    public function testConstructorError()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $arrayList = new StorageArray($fields);
        $this->assertEquals($fields, $arrayList->toArray());
    }

    public function testSetGetOk()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $newvalue = 'answer3';
        $arrayList = new StorageArray($fields, true);
        $arrayList->setQuestion2('answer3');
        $fields['question2'] = $newvalue;
        $this->assertEquals($fields, $arrayList->toArray());
        $this->assertEquals($newvalue, $arrayList->getQuestion2());
    }

    /**
     * @expectedException \Brownie\Util\Exception\UndefinedMethodException
     */
    public function testSetError()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $arrayList = new StorageArray($fields, true);
        $arrayList->setQuestion3('answer3');
        $this->assertEquals($fields, $arrayList->toArray());
    }

    /**
     * @expectedException \Brownie\Util\Exception\UndefinedMethodException
     */
    public function testGetError()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $newvalue = 'answer3';
        $arrayList = new StorageArray($fields, true);
        $this->assertEquals($newvalue, $arrayList->getQuestion3('answer3'));
    }
}
