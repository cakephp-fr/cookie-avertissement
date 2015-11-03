<?php
/**
 * Configuration par défaut de l'expiration du cookie
 */
return [
    'cookie_warning' => [
        'expire' => env('COOKIE_WARNING_EXPIRE', strtotime('+13 months'))
    ]
];
