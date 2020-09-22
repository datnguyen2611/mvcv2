<?php

namespace mvcv2\Core;


class App
{
    private static $Reagisty = [];

    public static function bind($key,$val)
    {
        self::$Reagisty[$key] = $val;
        echo "</br>";
    }

    public static function get($key){
        $getArrayApp = array_key_exists($key, self::$Reagisty) ? self::$Reagisty[$key] : false;
        return  $getArrayApp;
    }
}