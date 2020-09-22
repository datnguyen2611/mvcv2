<?php
use mvcv2\Core\App;
use mvcv2\Core\Request;
use mvcv2\Core\Router;
require_once 'vendor/autoload.php';
include 'src/Core/function.php';

App::bind('configs/app',require_once 'configs/app.php');
App::bind('configs/router',require_once 'configs/router.php');
Router::load(App::get('configs/router'))->direct(Request::uri(),Request::method());
