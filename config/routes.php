<?php
use Cake\Routing\Router;

Router::plugin('CookieWarning', function ($routes) {
    // $routes->extensions('html');
    $routes->connect(
        '/cookie-warning/display-info',
        ['controller' => 'CookieWarnings', 'action' => 'displayInfo']
    );
    $routes->connect(
        '/cookie-warning/display-detail',
        ['controller' => 'CookieWarning', 'action' => 'displayDetail']
    );
    $routes->connect(
        '/panels/view/*',
        ['controller' => 'Panels', 'action' => 'view']
    );
    $routes->connect(
        '/panels/*',
        ['controller' => 'Panels', 'action' => 'index']
    );
});
