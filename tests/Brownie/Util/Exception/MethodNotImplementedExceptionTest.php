<?php

namespace Test\Brownie\Util\Exception;

use Brownie\Util\Exception\MethodNotImplementedException;

class MethodNotImplementedExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Brownie\Util\Exception\MethodNotImplementedException
     */
    public function testException()
    {
        throw new MethodNotImplementedException('Test');
    }
}
