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
       $bool = IntegerValidator::equal($nb,$nb);

       $this->assertEquals($bool,true);
   }
}