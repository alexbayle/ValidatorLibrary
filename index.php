<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 17:31
 * To change this template use File | Settings | File Templates.
 */

require __DIR__.'/vendor/autoload.php';

//$test = false;

//$validation = \AB\ValidatorLibrary\BooleanValidator::isTrue($test);
//var_dump($validation);


//$validation1 = \AB\ValidatorLibrary\IntegerValidator::equal(5,5);
//var_dump($validation1);
$array = [0,1,2];
$validation = \AB\ValidatorLibrary\ArrayValidator::inferiorItems($array,3);

var_dump($validation);