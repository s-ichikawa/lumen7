<?php
return [
    'driver' => env('MAIL_MAILER', 'sendgrid'),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
];
