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

    public function testIsCompare()
    {
        $array = array('hello');
        $integer = 5;

        $res = ArrayValidator::isCompare($array, ArrayValidator::OPE_EQUAL, $integer);

        $this->assertTrue($res);
    }

    public function testBetweenItems()
    {

    }

    public function testKeyExists()
    {

    }

    public function testValueExists()
    {

    }
}