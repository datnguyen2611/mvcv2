<?php
use mvcv2\Core\Request;

function View($file){
    if (strpos($file, '.php') === false){
            $file .= '.php';
    }
    $file = "src/Views/" . $file;
    if (file_exists($file)){
        include $file;
    }
}

function MathedRoute($route){
    return $route === Request::uri();
}