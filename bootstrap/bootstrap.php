<?php

// composer自动加载
require __DIR__.'/../vendor/autoload.php';

$app = new Raam\Application(realpath(__DIR__.'/../'));

return $app;