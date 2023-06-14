<?php

return [

    /**
     * Config needed to generate JWT
     */
    'jwt' => [
        
        /**
         * A path to your API private key
         * E.g. 'file://path/to/private/key
         */
        'apiKeyPath' => env('ASC_PRIVATE_KEY'),

        /**
         * header fields
         */
        'header' => [
            'algorithm' => 'ES256',
            'keyIdentifier' => env('ASC_KEY_IDENTIFIER'),
            'tokenType' => 'JWT'
        ],

        /**
         * JWT payload fields
         */
        'payload' => [
            'issuerId' => env('ASC_ISSUER_ID'),
            'audience' => 'appstoreconnect-v1',
            'scope' => null
        ],

        /**
         * Token lifetime, should be less then 20 minutes
         */
        'lifetime' => env('ASC_TOKEN_LIFETIME', 15),
    ]
];
