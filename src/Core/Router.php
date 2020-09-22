<?php

namespace mvcv2\Core;

use Cassandra\Varint;

class Router
{
    private static $aRouter = null;
    private static $_self = null;
    public static $count = 1;

    public static function load( $aRouter)
    {
        if (self::$_self === null) {
            self::$_self = new Router();
        }
        self::$aRouter = $aRouter;

        return self::$_self;

    }

//    public static function get($uri, $controller)
//    {
//        return self::$aRouter['GET'][$uri] = $controller;
//    }
//
//    public static function post($uri, $controller)
//    {
//        return self::$aRouter['POST'][$uri] = $controller;
//    }

    public static function direct($uri,$method){

        if (!$controller =  self::routerIsExits($uri,$method)){

           return View('configs/404.php');

            die();
        }
        else{
            $init = explode('@',self::$aRouter[$method][$uri]);
        }
        self::callRouter($init[0],$init[1]);

    }

    public static function routerIsExits($uri,$method){
        return array_key_exists($uri ,self::$aRouter[$method]) ? self::$aRouter[$method][$uri] : false ;
    }
    public static function callRouter( $controller,$method,$para = []){
        $init = new $controller;
        return call_user_func_array([$init,$method] ,$para);
    }


}