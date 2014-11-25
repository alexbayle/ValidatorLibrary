<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 18:43
 * To change this template use File | Settings | File Templates.
 */

namespace AB\ValidatorLibrary;


/**
 * Class StringValidator
 * @package AB\ValidatorLibrary
 */
class StringValidator {

    /**
     * @param string $string
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqualTo($string, $nb)
    {
        if (!is_string($string) || !is_int($nb)) {
            throw new \Exception('$string must be a string and $nb must a int !');
        }elseif($nb === mb_strlen($string)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperiorTo($string, $nb)
    {
        if (!is_string($string) || !is_int($nb)) {
            throw new \Exception('$string must be a string and $nb must a int !');
        }elseif(mb_strlen($string) > $nb) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferiorTo($string, $nb)
    {
        if (!is_string($string) || !is_int($nb)) {
            throw new \Exception('$string must be a string and $nb must a int !');
        }elseif(mb_strlen($string) < $nb) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $min, $max)
    {
        if (!is_string($string) || !is_int($min) || !is_int($max)) {
            throw new \Exception('$string must be a string, $min and $max must a int !');
        }
        if((mb_strlen($string) >= $min) && (mb_strlen($string) <= $max )) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpaceStartEnd($string)
    {
        if (!is_string($string)) {
            throw new \Exception('$string must be a string!');
        }
        $firstChar = substr($string, 0, 1);
        $lastChar = substr($string, -1);
        if (!ctype_space($firstChar) && !ctype_space($lastChar)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string)
    {
        if (!is_string($string)) {
            throw new \Exception('$string must be a string!');
        }
        if (strpos($string, ' ') == false) {
            return true;
        }else {
            return false;
        }

    }

}