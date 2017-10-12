<?php

use Brownie\Util\ArrayStorage;

class ArrayStorageTest extends PHPUnit_Framework_TestCase
{

    protected $arrayListProphecy;

    protected function setUp()
    {
    }

    protected function tearDown()
    {
        $this->arrayListProphecy = null;
    }

    public function testConstructorOk()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $arrayList = new ArrayStorage($fields, true);
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
        $arrayList = new ArrayStorage($fields);
        $this->assertEquals($fields, $arrayList->toArray());
    }

    public function testSetGetOk()
    {
        $fields = array(
            'question1' => 'answer1',
            'question2' => 'answer2',
        );
        $newvalue = 'answer3';
        $arrayList = new ArrayStorage($fields, true);
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
        $arrayList = new ArrayStorage($fields, true);
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
        $arrayList = new ArrayStorage($fields, true);
        $this->assertEquals($newvalue, $arrayList->getQuestion3('answer3'));
    }
}
