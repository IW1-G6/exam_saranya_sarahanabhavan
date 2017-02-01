<?php

namespace tests\Lib;

use Lib\stringFormatter;

class stringFormatterTest extends \PHPUnit_Framework_TestCase
{
    public function testSuffix()
    {
        $exmFormat = new stringFormatter();

        $dbExam = $exmFormat->suffix("toto", "tata");

        $this->assertSame($dbExam, "tatatoto");
    }

    public function testPrefix()
    {
        $exmFormat = new stringFormatter();

        $dbExam = $exmFormat->prefix("toto", "tata");

        $this->assertSame($dbExam, "tototata");
    }

    public function testToCamelCase()
    {
        $exmFormat = new stringFormatter();

        $dbExam = $exmFormat->toCamelCase("toto", "tata");

        $this->assertSame($dbExam, "totoTata");
    }

    public function concatString()
    {
        $exmFormat = new stringFormatter();

        $dbExam = $exmFormat->toCamelCase("toto", "tata");

        $this->assertSame($dbExam, "tototata");
    }
}
