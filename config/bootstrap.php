<?php

use Cake\Core\Configure;
use Cake\Routing\DispatcherFactory;
use CookieWarning\Routing\Filter\CookieWarningFilter;
use CookieWarning\Validation\ConfigValidator;

$config = Configure::read('cookie_warning');
if ($config == null) {
    throw new \Exception(__d('cookie_warning', 'Please add a configuration for the CookieWarning plugin in the app.php file (see readme in plugin folder)'));
}

// Validate the Configure Data
$validator = new ConfigValidator();
$errors = $validator->errors($config);

if (!empty($errors)) {
    throw new \Exception(__d('cookie_warning', 'Délai d\'expiration du cookie incorrect'));
}

$filter = new CookieWarningFilter(['priority' => 9999]);
DispatcherFactory::add($filter);
