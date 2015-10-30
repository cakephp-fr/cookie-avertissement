<?php

use Cake\Core\Configure;
use Cake\Routing\DispatcherFactory;
use CookieWarning\Routing\Filter\CookieWarningFilter;
use CookieWarning\Validation\ConfigValidator;
use Cake\Core\Configure\Engine\PhpConfig;

Configure::config('default', new PhpConfig(dirname(APP) . DS . 'config' . DS));
Configure::load('cookie_warning', 'default', false);

// Validate the Configure Data
$validator = new ConfigValidator();
$errors = $validator->errors(Configure::read('cookie_warning'));

if (!empty($errors)) {
    throw new \Exception(__d('cookie_warning', 'Délai d\'expiration du cookie incorrect'));
}

$filter = new CookieWarningFilter();
DispatcherFactory::add($filter, ['priority' => 9999]);
