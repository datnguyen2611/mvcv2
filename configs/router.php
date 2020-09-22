<?php
return [
    'GET' => [
        'home' => 'mvcv2\Controllers\HomeController@index',
        'about' => 'mvcv2\Controllers\AboutController@index',
        'contact' => 'mvcv2\Controllers\ContactController@index',
        'register' =>'mvcv2\Controllers\RegisterController@index',
    ],
    'POST' => [
      'register' =>'mvcv2\Controllers\RegisterController@register'
    ],
];

