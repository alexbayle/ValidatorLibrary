<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 24/11/14
 * Time: 23:11
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\ValidatorLibrary;

use AB\ValidatorLibrary\StringValidator;


class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testLengthEqualTo()
    {
        $string = 'abcde';
        $nb = 5;

        $res = StringValidator::lengthEqualTo($string,$nb);

        $this->assertTrue($res);
    }

    public function testLengthIsSuperiorTo()
    {
        $string = 'salut';
        $nb = 3;

        $res = StringValidator::lengthSuperiorTo($string,$nb);

        $this->assertTrue($res);

    }

    public function testLengthInferiorTo()
    {
        $string = 'salut';
        $nb = 7;

        $res = StringValidator::lengthInferiorTo($string,$nb);

        $this->assertTrue($res);
    }

    public function testLengthBetween()
    {
        $min = 5;
        $max = 10;
        $string = 'abcdefgh';

        $res = StringValidator::lengthBetween($string,$min,$max);

        $this->assertTrue($res);
    }

    public function testNoWhiteSpaceStartEnd()
    {
        $string = 'Hello world';

        $res = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertTrue($res);
    }

    public function testNoWhiteSpace()
    {
        $string = 'Helloworld';

        $res = StringValidator::noWhiteSpace($string);

        $this->assertTrue($res);
    }
}