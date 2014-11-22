<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 17:54
 * To change this template use File | Settings | File Templates.
 */

namespace AB\ValidatorLibrary;


/**
 * Class BooleanValidator
 * @package AB\ValidatorLibrary
 */
class BooleanValidator
{
    /**
     * @param $boolean
     * @return bool
     */
    public static function isTrue($boolean) {

        if(filter_var($boolean, FILTER_VALIDATE_BOOLEAN)) {
            return true;
        }else{
         return false;
        }
    }

    /**
     * @param $boolean
     * @return bool
     */
    public static function isFalse($boolean) {

        if(!filter_var($boolean, FILTER_VALIDATE_BOOLEAN,['flags' => FILTER_NULL_ON_FAILURE])) {
            return true;
        }else{
            return false;
        }
    }
}