<?php

require_once __DIR__.'/../vendor/autoload.php';

use IsOdd\IsOdd as IsOddIsOdd;

class IsOddTest extends PHPUnit_Framework_TestCase{

    /**
     * Asset that function recognize oddness properly
     */
    public function testTruncation(){
        $this->assertEquals(true, IsOddIsOdd::isOdd(3));
        $this->assertEquals(false, IsOddIsOdd::isOdd(12));
    }
}