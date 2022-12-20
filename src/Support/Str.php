<?php

namespace Tinigin\LaravelSqsFifoQueue\Support;

use Illuminate\Support\Str as BaseStr;

class Str extends BaseStr
{
    /**
     * Get the portion of a string before the last occurrence of a given value.
     *
     * The beforeLast method wasn't added to the Str class until Laravel 6.x.
     * Add the implementation here to support older versions of Laravel.
     *
     * @param  string  $subject
     * @param  string  $search
     *
     * @return string
     */
    public static function beforeLast($subject, $search)
    {
        if ($search === '') {
            return $subject;
        }

        $pos = mb_strrpos($subject, $search, 0, 'UTF-8');

        if ($pos === false) {
            return $subject;
        }

        return static::substr($subject, 0, $pos);
    }
}
