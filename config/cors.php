<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'link/*', 'login/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['https://yassin287.github.io'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
