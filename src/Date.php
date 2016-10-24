<?php

namespace Edujugon\Core;

class Date
{

    /**
     * Get the months list based on the language
     *
     * @param string $lang
     * @return mixed
     */
    static private function getMonths($lang = NULL)
    {
        if(!$lang || !file_exists(__DIR__.'/lang/'.$lang)) $lang = 'en';

        $months = include(__DIR__.'/lang/'.$lang .'/date.php');

        return $months['months'];
    }

    /**
     * Get months list.
     *
     * if lang is null, "en" language is set by default.
     * if offset is null return all items.
     *
     * If offset is non-negative, the sequence will start at that offset in the array.
     * If offset is negative, the sequence will start that far from the end of the array.
     *
     * If length is given and is positive, then the sequence will have up to that many elements in it.
     * If the array is shorter than the length, then only the available array elements will be present.
     * If length is given and is negative then the sequence will stop that many elements from the end of the array.
     * If it is omitted, then the sequence will have everything from offset up until the end of the array.
     *
     * @param $lang
     * @param null $offset
     * @param null $length
     * @return array|mixed
     */
    public static function months($lang = NULL, $offset = NULL, $length = NULL)
    {
        $months = self::getMonths($lang);

        if(is_null($offset)) return $months;

        return array_slice($months,$offset,$length);

    }

}