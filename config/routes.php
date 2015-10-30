<?php
use Cake\Routing\Router;

Router::plugin('CookieWarning', ['path' => '/cookie'], function ($routes) {
    $routes->connect(
        '/warnings/display-info',
        ['controller' => 'CookieWarnings', 'action' => 'displayInfo']
    );
    $routes->connect(
        '/warnings/display-detail',
        ['controller' => 'CookieWarnings', 'action' => 'displayDetail']
    );
});
