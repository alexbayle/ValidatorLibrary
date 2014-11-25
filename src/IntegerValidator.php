<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 16:19
 * To change this template use File | Settings | File Templates.
 */

namespace AB\ValidatorLibrary;

/**
 * Class IntegerValidator
 * @package AB\Validator
 */

class IntegerValidator
{
    /**
     * @param int $integer
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($integer, $nb)
    {
        if(!is_int($integer) || !is_int($nb)) {
            throw new \Exception('The two params must be numbers');
        }else if($integer === $nb) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer,$nb)
    {
        if(!is_int($integer) || !is_int($nb)) {
            throw new \Exception('The two params must be numbers');
        }else if($integer > $nb) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($integer,$nb)
    {
        if(!is_int($integer) || !is_int($nb)) {
            throw new \Exception('The two params must be numbers');
        }else if($integer < $nb) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($integer,$min,$max)
    {
        if(!is_int($integer) || !is_int($min) || !is_int($max)) {
            throw new \Exception('The two params must be numbers');
        }
        if(($integer >= $min) && ($integer <= $max)) {
           return true;
        } else {
           return false;
        }
    }

    /**
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer)
    {
        if(!is_int($integer)) {
            throw new \Exception('integer must be number');
        }else if($integer >= 0) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer)
    {
        if(!is_int($integer)) {
            throw new \Exception('integer must be number');
        }else if($integer <= 0) {
            return true;
        }else {
            return false;
        }
    }
}