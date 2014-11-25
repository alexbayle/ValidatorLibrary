<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 20:04
 * To change this template use File | Settings | File Templates.
 */

namespace AB\ValidatorLibrary;


/**
 * Class ArrayValidator
 * @package AB\ValidatorLibrary
 */
class ArrayValidator
{
    const OPE_EQUAL = 0;
    const OPE_SUPERIOR = 1;
    const OPE_INFERIOR = 2;
    const OPE_SUPERIOR_EQUAL = 3;
    const OPE_INFERIOR_EQUAL = 4;

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array)) {
            throw new \Exception('$array must be an array !');
        }elseif(count($array) == 0) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param array $array
     * @param     $compare
     * @param int $integer
     *
     * @return bool|string
     *
     * @throws \Exception
     */
    public static function isCompare($array,$compare,$integer)
    {
        /*if((!is_array($array)) || is_int($integer)) {
            throw new \Exception('The parameter must be an array and a int !');
        }*/
        if(!in_array($compare,
                [
                    self::OPE_EQUAL,
                    self::OPE_SUPERIOR,
                    self::OPE_INFERIOR,
                    self::OPE_SUPERIOR_EQUAL,
                    self::OPE_INFERIOR_EQUAL,
                ]))
            throw new \Exception('this an invalid variable');

        $res = '';
        $length = count($array);

        switch($compare){
            case self::OPE_EQUAL:
                $res = $length === $integer ;
                break;
            case self::OPE_SUPERIOR:
                $res = $length > $integer ;
                break;
            case self::OPE_INFERIOR:
                $res = $length < $integer ;
                break;
            case self::OPE_SUPERIOR_EQUAL:
                $res = $length >= $integer ;
                break;
            case self::OPE_INFERIOR_EQUAL:
                $res = $length <= $integer ;
                break;
        }
        return $res;
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function betweenItems($array, $min, $max)
    {
        if(!is_array($array) || !is_int($min) || !is_int($max)) {
            throw new \Exception('$array must be an array, $min and max must be an int !');
        }
        if((count($array) >= $min) && (count($array) <= $max)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param       $key
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array,$key)
    {
        if(array_key_exists($key,$array)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param       $value
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array,$value)
    {
        if(in_array($value,$array)) {
            return true;
        }else {
            return false;
        }
    }
}