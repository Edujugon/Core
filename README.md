# Edujugon Core Package

Set of useful Classes and Functions.

## Available Classes

* [Date](https://github.com/Edujugon/Core#date)
* [Number](https://github.com/Edujugon/Core#number)
* [FindReplace](https://github.com/Edujugon/Core#findreplace)
* More comming soon


## Date

### Methods

* [getMonths](https://github.com/Edujugon/Core#getmonths)

#### getMonths

**Syntax**

`getMonths` method gets the months list. You may pass lang, offset and length through parameters. 

```php
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
        array getMonths($lang = NULL, $offset = NULL, $length = NULL)
```

## Number

### Methods

* [myList](https://github.com/Edujugon/Core#mylist)

#### myList

**Syntax**

`myList` method gets array of numbers. You must pass a starting number and a length of desired array. 

```php
        /**
         * Get Array of numbers.
         *
         * If length is negative returns previous numbers
         * If length is positive returns following numbers
         * The total items of the array is the starting number parameter plus the length amount.
         * so if length value is 3 or -3 it will return an array of 4 items.
         *
         * @param $start
         * @param int $length
         * @return array
         */
        array myList($start, $length = 0)
```


## FindReplace

### Methods

* [soft](https://github.com/Edujugon/Core#soft)
* [strict](https://github.com/Edujugon/Core#strict)

#### soft

**Syntax**

`soft` method gets a new string replacing the searched substring for a replacement in a text.  

```php
        /**
             * Soft find&replace where do a strtolower either the find text and the text where search.
             * It's no case sensitive. Foo == foo
             *
             * @param $find
             * @param $replace
             * @param $text
             * @return mixed
             */
            string static function soft($find, $replace, $text)
```

#### strict

**Syntax**

`strict` method gets a new string replacing the searched substring for a replacement in a text.

> Case Sensitive

```php
        /**
             * Strict find&replace it search for the exact substring($find) inside the text.
             * It's case sensitive Foo != foo
             *
             * @param $find
             * @param $replace
             * @param $text
             * @return mixed
             */
            string static function strict($find, $replace, $text)
```