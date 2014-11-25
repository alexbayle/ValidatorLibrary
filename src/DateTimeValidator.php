<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 22/11/14
 * Time: 20:05
 * To change this template use File | Settings | File Templates.
 */

namespace AB\ValidatorLibrary;


class DateTimeValidator
{
     public static function isYear(\DateTime $date,$year)
     {
            if(!is_int($year)) {
                throw new \Exception('the second parameter must be a int');
            }
            if((int)$date->format('Y') === $year) {
                return true;
            }else {
                return false;
            }

     }

    public static function isMonth(\DateTime $date,$month)
    {
        if(!is_int($month)) {
            throw new \Exception('the second parameter must be a int');
        }
        if((int)$date->format('m') === $month) {
            return true;
        }else {
            return false;
        }
    }

    public static function isDay(\DateTime $date,$day)
    {
        if(!is_int($day)) {
            throw new \Exception('the second parameter must be a int');
        }
        if((int)$date->format('d') === $day) {
            return true;
        }else {
            return false;
        }
    }

}