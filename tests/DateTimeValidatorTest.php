<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 24/11/14
 * Time: 23:13
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\ValidatorLibrary;

use AB\ValidatorLibrary\DateTimeValidator;

class DateTimeValidatorTest extends  \PHPUnit_Framework_TestCase
{
    public function testIsYear()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('11/24/2014 00:00:00');

        $bool = DateTimeValidator::isYear($date, 2014);

        $this->assertTrue($bool);
    }

    public function testIsMonth()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('11/24/2014 00:00:00');

        $bool = DateTimeValidator::isMonth($date, 11);

        $this->assertTrue($bool);
    }

    public function testIsDay()
    {
        date_default_timezone_set('Europe/Paris');

        $date = new \DateTime('11/24/2014 00:00:00');

        $bool = DateTimeValidator::isDay($date, 24);

        $this->assertTrue($bool);
    }
}