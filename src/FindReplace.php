<?php
namespace Edujugon\Core;


class FindReplace
{
    /**
     * Soft find&replace where do a strtolower either the find text and the text where search.
     * It's no case sensitive. Foo == foo
     *
     * @param $find
     * @param $replace
     * @param $text
     * @return mixed
     */
    static function soft($find, $replace, $text)
    {
        return str_replace(strtolower($find), $replace, strtolower($text));
    }

    /**
     * Strict find&replace it search for the exact substring($find) inside the text.
     * It's case sensitive Foo != foo
     *
     * @param $find
     * @param $replace
     * @param $text
     * @return mixed
     */
    static function strict($find, $replace, $text)
    {
        return str_replace($find, $replace, $text);
    }
}