<?php

namespace Test;

class MyPackageTest extends \PHPUnit\Framework\TestCase
{
    function testLogMessage (): void {

        $this->assertEquals('Hi, World!', \Marom\Package\MyLogger::load('Hi, world!'));

    }
}
