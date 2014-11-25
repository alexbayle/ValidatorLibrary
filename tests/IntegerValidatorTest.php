<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 24/11/14
 * Time: 22:18
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\ValidatorLibrary;

use AB\ValidatorLibrary\IntegerValidator;

class IntegerValidatorTest extends  \PHPUnit_Framework_TestCase
{
    public function testEqual()
    {
        $nb = mt_rand(0,10);
        $res = IntegerValidator::equal($nb,$nb);

        $this->assertTrue($res);
    }


    public function testSuperior()
    {
        $integer = mt_rand(11,20);
        $nb = mt_rand(0,10);

        $res = IntegerValidator::superior($integer,$nb);

        $this->assertTrue($res);
    }


    public function testInferior()
    {
        $integer = mt_rand(0,10);
        $nb = mt_rand(11,20);

        $res = IntegerValidator::inferior($integer,$nb);

        $this->assertTrue($res);
    }

    public function testBetween()
    {
        $min = mt_rand(0,5);
        $max = mt_rand(10,15);
        $integer = mt_rand(6,9);

        $res = IntegerValidator::between($integer,$min,$max);

        $this->assertTrue($res);

    }


    public function testPositive()
    {
        $integer = mt_rand(1,10);

        $res = IntegerValidator::positive($integer);

        $this->assertTrue($res);
    }

    public function testNegative()
    {
        $integer = mt_rand(-10,-1);

        $res = IntegerValidator::negative($integer);

        $this->assertTrue($res);
    }

}