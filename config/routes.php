<?php
use Cake\Routing\Router;

Router::plugin('CookieWarning', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
