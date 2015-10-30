<?php
/**
 * Default configuration for the cookie
 */
return [
    /**
     * The time after which CookieWarning cookie expires
     */
    'cookie_warning' => [
        'expire' => env('COOKIE_WARNING_EXPIRE', strtotime('+13 months'))
    ]
];
