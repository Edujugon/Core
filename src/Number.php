<?php

namespace Edujugon\Core;


class Number
{

    /**
     * Get Array of numbers.
     *
     * If length is negative returns previous numbers
     * If length is positive returns future numbers
     * The total items of the array is the starting number parameter plus the length amount.
     * so if length value is 3 or -3 it will return an array of 4 items.
     *
     * @param $start
     * @param int $length
     * @return array
     */
    public static function myList($start, $length = 0)
    {
        $year_list = [];

        $negative = ($length > 0 ) ? false : true;
        $length = abs($length);

        for ($i = 0 ; $i <= $length ; $i++)
        {
            $year_list[] = $start - (($negative) ? $i : -($i)) ;
        }

        return $year_list;
    }

}