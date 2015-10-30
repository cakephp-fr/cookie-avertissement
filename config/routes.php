<?php
use Cake\Routing\Router;

Router::plugin('CookieWarning', function ($routes) {
    $routes->connect(
        '/cookie-warnings/display-info',
        ['controller' => 'CookieWarnings', 'action' => 'displayInfo']
    );
    $routes->connect(
        '/cookie-warnings/display-detail',
        ['controller' => 'CookieWarnings', 'action' => 'displayDetail']
    );
});
