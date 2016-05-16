<?php

use Raam\Support\Facades\Route;

Route::get('/', 'Controllers\Home@index');

Route::missing(function() {
    echo '404' . PHP_EOL;
});