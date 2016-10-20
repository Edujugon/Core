<?php

namespace Edujugon\Core;

class Dates
{

    /**
     * Get the months name based on the language
     *
     * @param string $lang
     * @return mixed
     */
    public static function months($lang = 'es')
    {
        return include(__DIR__ .'/lang/'.$lang.'core.php');

    }

    /**
     * Get the months based on language and offset number.
     *
     * if offset is null return all items.
     *
     * offset
     *If offset is non-negative, the sequence will start at that offset in the array.
     * If offset is negative, the sequence will start that far from the end of the array.
     *
     * length
     *If length is given and is positive, then the sequence will have up to that many elements in it.
     * If the array is shorter than the length, then only the available array elements will be present.
     * If length is given and is negative then the sequence will stop that many elements from the end of the array.
     * If it is omitted, then the sequence will have everything from offset up until the end of the array.
     *
     * @param $lang
     * @param null $offset
     * @param null $length
     * @return array|mixed
     */
    public function getMonths($lang, $offset = NULL, $length = NULL)
    {
        $months = $this->months($lang);

        if(is_null($offset)) return $months;

        return array_slice($months,$offset,$length);

    }
}