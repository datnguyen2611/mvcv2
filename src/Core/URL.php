<?php


namespace mvcv2\core;


class URL
{
    /**
     * @param string $path
     * @return string
     */

    public static function url($path='')
    {
        if(empty($path)){
            return App::get('configs/app')['BASE_URL'];
        }
        return App::get('configs/app')['BASE_URL'].ltrim($path,'/');
    }
}
