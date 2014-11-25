<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 24/11/14
 * Time: 23:13
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\ValidatorLibrary;

use AB\ValidatorLibrary\ArrayValidator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmpty()
    {
        $array = array();

        $res = ArrayValidator::isEmpty($array);

        $this->assertTrue($res);
    }

    public function testIsEqual()
    {
        $array = array('Hello => 3');
        $integer = 1;

        $res = ArrayValidator::isCompare($array, ArrayValidator::OPE_EQUAL, $integer);

        $this->assertTrue($res);
    }

    public function testBetweenItems()
    {
        $array = array('Hello' => 3, 'Bye' => 10);

        $bool = ArrayValidator::betweenItems($array, 1, 2);

        $this->assertTrue($bool);
    }

    public function testKeyExists()
    {
        $array = array('Hello' => 2);

        $bool = ArrayValidator::keyExists($array,'Hello');

        $this->assertTrue($bool);
    }

    public function testValueExists()
    {
        $array = array('Hello' => 2);

        $bool = ArrayValidator::valueExists($array, '2');

        $this->assertTrue($bool);
    }
}