<?php
/**
 * Configuration par défaut de l'expiration du cookie
 */
return [
    'CookieWarning' => [
        'expire' => env('COOKIE_WARNING_EXPIRE', strtotime('+13 months'))
    ]
];
