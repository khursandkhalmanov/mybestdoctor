<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID','943912079338714'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET','0c7acf466eb78a06b74450a88b0887cb'),
        'redirect' => env('FACEBOOK_REDIRECT','https://www.my-best-doctor.us/callback/facebook'),
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID','454243792503-rv0totlatv6bmq35d8c72mo30ovonnkr.apps.googleusercontent.com'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET','F8_txAeENZ6OzEAjTw9NGDfz'),
        'redirect' => env('GOOGLE_REDIRECT','https://www.my-best-doctor.us/welcome'),
    ],
    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID','769666381-WPppux6BCLnoZWRog0WPYbNufdCOrT7nMzGP0WdZ'),
        'client_secret' => env('TWITTER_CLIENT_SECRET','8RstNtPpQDIUlovjPJhz5ZNkasQMn2BR5pDicsgnburlh'),
        'redirect' => env('CALLBACK_URL_TWITTER','https://www.my-best-doctor.us/callback/twitter'),
        'callback_url' => env('TWITTER_CALLBACK_URL','https://www.my-best-doctor.us/callback/twitter'),
    ],
    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID','78yf8qjgm5se3o'),
        'client_secret' => env('LINKEDIN_CLIENT_SECRET', '5JQM2wdtZ9mmdoI5'),
        'redirect' => env('LINKEDIN_REDIRECT','https://www.my-best-doctor.us/callback/linkedin'),
        'redirect_uri' => env('LINKEDIN_REDIRECT','https://www.my-best-doctor.us/callback/linkedin'),
    ],
    'instagram' => [
        'client_id' => env('INSTAGRAM_CLIENT_ID','1217626568444703'),
        'client_secret' => env('INSTAGRAM_CLIENT_SECRET','e5a2142535a27e8814f22a3791736cda'),
        'redirect' => env('INSTAGRAM_REDIRECT','https://www.my-best-doctor.us/welcome'),
    ],

];
