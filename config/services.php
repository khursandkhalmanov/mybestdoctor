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
        'redirect' => env('FACEBOOK_REDIRECT','https://my-best-doctor.us/welcome'),
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('CALLBACK_URL_GOOGLE'),
    ],
    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID','769666381-WPppux6BCLnoZWRog0WPYbNufdCOrT7nMzGP0WdZ'),
        'client_secret' => env('TWITTER_CLIENT_SECRET','8RstNtPpQDIUlovjPJhz5ZNkasQMn2BR5pDicsgnburlh'),
        'redirect' => env('CALLBACK_URL_TWITTER','https://www.my-best-doctor.us/callback/twitter'),
    ],
    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
        'redirect' => env('CALLBACK_URL_LINKEDIN'),
    ],
    'instagram' => [
        'client_id' => env('INSTAGRAM_CLIENT_ID'),
        'client_secret' => env('INSTAGRAM_CLIENT_SECRET'),
        'redirect' => env('CALLBACK_URL_INSTAGRAM'),
    ],

];
