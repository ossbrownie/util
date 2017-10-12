<?php

use Brownie\Util\Exception\UndefinedMethodException;

class UndefinedMethodExceptionTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Brownie\Util\Exception\UndefinedMethodException
     */
    public function testException()
    {
        throw new UndefinedMethodException('Test');
    }
}
