<?php
namespace mvcv2\Core;


class Request
{
    public static function uri(){
        $router = trim(str_replace(App::get('configs/app')['BASE_URL'],'',$_SERVER['REQUEST_URI']),'/');
        return empty($router) ? 'home' : $router;
    }

    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}