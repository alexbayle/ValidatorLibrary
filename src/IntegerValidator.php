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
     * @param int $nb1
     * @param int $nb2
     * @return bool
     */
    public static function equal($nb1,$nb2) {
        if((int)$nb1 === (int)$nb2){
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     * @return bool
     */
    public static function superior($nb1,$nb2) {
        if((int)$nb1 > (int)$nb2) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     * @return bool
     */
    public static function inferior($nb1,$nb2) {
        if((int)$nb1 < (int)$nb2) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb
     * @param int $min
     * @param int $max
     * @return bool
     */
    public static function between($nb,$min,$max) {
        if((int)$nb >= (int)$min) {
            if((int)$nb <= (int)$max){
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * @param int $nb
     * @return bool
     */
    public static function positive($nb) {
        if(0 >= (int)$nb){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb
     * @return bool
     */
    public static function negative($nb) {
        if(0 <= (int)$nb){
            return true;
        }else{
            return false;
        }
    }
}