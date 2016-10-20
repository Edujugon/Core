# Edujugon Core Package

Set of useful Classes and Functions.

## Available Classes

* [Date](https://github.com/Edujugon/Core#date)
* More comming soon


### Date

#### Methods

* [getMonths](https://github.com/Edujugon/Core#getmonths)

##### getMonths

**Syntax**

`getMonths` method gets the months list. You may pass lang, offset and length through parameters. 
```php
    /**
     * Get months based on language.
     *
     * if offset is null return all items.
     *
     *If offset is non-negative, the sequence will start at that offset in the array.
     * If offset is negative, the sequence will start that far from the end of the array.
     *
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
array getMonths($lang, $offset = NULL, $length = NULL)
```
