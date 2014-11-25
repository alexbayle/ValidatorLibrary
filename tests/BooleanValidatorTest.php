<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 24/11/14
 * Time: 23:12
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\ValidatorLibrary;

use AB\ValidatorLibrary\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsTrue()
    {
        $boolean = true;

        $res = BooleanValidator::isTrue($boolean);

        $this->assertTrue($res);
    }

    public function testIsFalse()
    {
        $boolean = false;

        $res = BooleanValidator::isFalse($boolean);

        $this->assertTrue($res);
    }
}