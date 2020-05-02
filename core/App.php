<?php

namespace MinFrame\Core;
use Exception;

class App
{
    protected static $registry = [];

    public function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        return static::$registry[$key];
    }
}