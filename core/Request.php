<?php

namespace MinFrame\Core;

class Request
{
    public static function uri()
    {
        //var_dump(explode('/',trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'))[2]);

        return explode(
            '/',trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
            )
        )[3];
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}