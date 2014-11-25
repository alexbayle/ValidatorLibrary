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
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean)) {
            throw new \Exception('The parameter must be a boolean!');
        }
        if($boolean) {
            return true;
        }else {
            return false;
        }
    }


    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean)) {
            throw new \Exception('The parameter must be a boolean!');
        }
        if(!$boolean) {
            return true;
        }else {
            return false;
        }
    }
}