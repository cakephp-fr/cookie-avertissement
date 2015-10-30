<?php
use Cake\Routing\Router;

Router::plugin('CookieAvertissement', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
